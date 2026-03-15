<?php

class notFound extends Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    function index()
    {
        $meta = ['url'=>url('not-found'),'title' => '404', 'description' => ''
        ];
        return $this->view->render('404', ['meta' => $meta ]);
    }

}
