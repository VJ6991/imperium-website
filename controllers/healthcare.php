<?php 
/**
* inaipi Controller
*/
class healthcare extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = Seo::page('healthcare');
		return $this->view->render('healthcare', ['meta'=>$meta]);
	}
}