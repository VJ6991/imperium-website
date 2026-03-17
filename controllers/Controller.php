<?php

/**
 * Main Controller
 */
use TBC\IMK\WEB\ImkServiceProvider;
use TBC\IMK\WEB\BladeRenderer;

class Controller extends ImkServiceProvider {

    public $view;
    public $client;
    public $user;
    public $group;
    public $accessKey;
    public $ancillarykey;
    protected $limit = 21;
    protected $paginationItems = 5;

    function __construct() {
        $views = Config::get('basePath')  .'/views';
        $compiledFolder =  Config::get('basePath') . '/cache';
        
        $this->view = new BladeRenderer( $views, $compiledFolder, BladeRenderer::MODE_AUTO );
        
        $this->user = Config::get('IMK/user/id');
        $this->group = Config::get('IMK/user/group');
        $this->accessKey = Config::get('IDX/accesskey');
        $this->ancillarykey = Config::get('IDX/ancillarykey');

        $imkObj = $this;
        $imkObj->setApiGroup( $this->group )
                ->setApiKey("key")
                ->setApiUser( $this->user )
                ->setApiUrl( SERVER_URL )
                ->init();
    }

    function redirect($url) {
        header('location:' . url($url));
    }

    function getBlogs($params = []) {
        $blogs = $this->getLocalBlogs();
        
        // Filtering by category
        if (isset($params['category'])) {
            $blogs = array_filter($blogs, function($b) use ($params) {
                return strtolower($b->category) == strtolower($params['category']);
            });
        }

        // Search filtering
        if (isset($params['keyword'])) {
            $keyword = strtolower($params['keyword']);
            $blogs = array_filter($blogs, function($b) use ($keyword) {
                return strpos(strtolower($b->title), $keyword) !== false || strpos(strtolower($b->body), $keyword) !== false;
            });
        }

        return (object)['posts' => array_values($blogs)];
    }

    function getRecentPosts() {
        $blogs = $this->getLocalBlogs();
        return array_slice($blogs, 0, 5);
    }

    function getCategories() {
        $blogs = $this->getLocalBlogs();
        $categories = [];
        $unique = [];
        foreach ($blogs as $blog) {
            if (!in_array($blog->category, $unique)) {
                $unique[] = $blog->category;
                $catObj = new stdClass();
                $catObj->title = $blog->category;
                $categories[] = $catObj;
            }
        }
        return $categories;
    }

    function getArchives() {
        return [];
    }

    function getSingleBlog($postId) {
        $blogs = $this->getLocalBlogs();
        foreach ($blogs as $blog) {
            if ($blog->_id == $postId) {
                return (object)['posts' => $blog, 'user' => $blog->user];
            }
        }
        return null;
    }

    protected function getLocalBlogs() {
        $blogsFile = Config::get('basePath') . '/cms/data/blogs.json';
        $blogs = [];
        if (file_exists($blogsFile)) {
            $data = json_decode(file_get_contents($blogsFile), true);
            if (is_array($data)) {
                foreach ($data as $item) {
                    $blogObj = new stdClass();
                    $blogObj->_id = $item['id'];
                    $blogObj->title = $item['title'];
                    $blogObj->body = $item['content'];
                    $img = $item['image'] ?? '';
                    $blogObj->featuredImage = (strpos($img, 'http') === 0) ? $img : url($img);
                    $blogObj->createdAt = $item['date'] ?? '';
                    $blogObj->category = $item['category'] ?? 'General';
                    
                    $blogObj->user = new stdClass();
                    $blogObj->user->profile = new stdClass();
                    $blogObj->user->profile->firstName = $item['author'] ?? 'Admin';
                    
                    $blogs[] = $blogObj;
                }
            }
        }
        return array_reverse($blogs); // Latest first
    }
}
