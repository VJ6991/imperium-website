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
}
