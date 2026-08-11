<?php
/**
* Contact Controller
*/
class contact extends Controller
{

	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = Seo::page('contact');
		return $this->view->render('contact', ['meta'=>$meta]);
	}
}
