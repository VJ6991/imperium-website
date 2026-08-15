<?php
/**
* About Controller
*/
class about extends Controller
{

	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = Seo::page('about');
		return $this->view->render('about', ['meta'=>$meta]);
	}
}
