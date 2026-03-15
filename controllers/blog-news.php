<?php

/**
 * About Controller
 */
class blogNews extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index($params = []) {
        $meta = ['url' => url('blog-news'), 'title' => 'Blog & News', 'breadcrumbs' => "Blog", 'description' => '', 'keywords' => ''];
        if (Input::get('q')) {
            $params['keyword'] = Input::get('q');
        }
        $posts = $this->getBlogs($params);
        // The API Client strips out the top-level 'success' and 'data' keys and returns the data node directly.
        // In this case, the data node ITSELF is the object containing 'posts' and 'total'.
        $blogList = [];
        if (is_object($posts) && isset($posts->posts)) {
            $blogList = $posts->posts;
        } else if (is_array($posts)) {
            if (isset($posts['posts'])) {
                $blogList = $posts['posts'];
            } else {
                $blogList = $posts;
            }
        }

        $recentPosts = $this->getRecentPosts();
        $categories = $this->getCategories();
        $archives = $this->getArchives();

        return $this->view->render('blog.blog', [
                    'meta' => $meta,
                    "blogs" => $blogList,
                    "recentPosts" => $recentPosts,
                    "categories" => $categories,
                    "archives" => $archives
        ]);
    }

    function post($postName) {
        $postslug = explode('-', $postName);
        $postId = end($postslug);
        $recentPosts = $this->getRecentPosts();
        $categories = $this->getCategories();
        $archives = $this->getArchives();
        $postData = $this->getSingleBlog($postId);
        if ($postData && !$postData->posts) {
            $postData->posts = [];
        }
        $post = $postData->posts;
        $user = $postData->user;
        $meta['title'] = $post->title;
        $meta['keywords'] = $post->title;

        $meta['breadcrumbs'] = $post->title;


        $meta['url'] = url('blog-news/post/' . Helper::slugify($post->title) . '-' . $post->_id);
        if ($post->featuredImage && $post->featuredImage != '/img/imageph.png') {
            $meta['image'] = $post->featuredImage;
        } else {
            $meta['image'] = asset('images/slider/slider_new2.jpg');
        }
        $meta['description'] = strip_tags($post->body);
        $meta['author'] = $user->profile->firstName;

        return $this->view->render('blog.single', [
                    'meta' => $meta,
                    'post' => $post,
                    'user' => $user,
                    "recentPosts" => $recentPosts,
                    "categories" => $categories,
                    "archives" => $archives
        ]);
    }

    function archive($params = []) {
        $data = [];
        if (count($params)) {
            $data['month'] = $params[0];
            $data['year'] = $params[1];
        }

        return $this->index($data);
    }

    function category($cat = '') {
        $data = [];
        if ($cat)
            $data['category'] = $cat;
        return $this->index($data);
    }

}
