<?php 
/**
* inaipi Controller
*/
class realestate extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = Seo::page('realestate');
		return $this->view->render('realestate', ['meta'=>$meta]);
	}
}