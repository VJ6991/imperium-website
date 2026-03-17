<?php

class index extends Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    function index()
    {
        $blogs = [];
        $blogData = $this->getBlogs();

        if( isset( $blogData->posts ) && count($blogData->posts)){
            $blogs = $blogData->posts;
        }

        $meta = ['title' => 'Unified Communication Solution in Dubai | Software Provider in Dubai| Business Communication Services | Imperium' , 'description' => 'Imperium is a leading IT & telecom company provides customize telecommunications software solutions that helps to deliver enhance experience to customer and employees at every touch point.','keywords'=>'', 'url' => url('')];
        $casestudies = Helper::get_casestudies();
        
        return $this->view->render('index', ['meta' => $meta, 'blogs' => $blogs, 'casestudies' => $casestudies]);

    }

}
