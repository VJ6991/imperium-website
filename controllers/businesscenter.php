<?php 
/**
* inaipi Controller
*/
class businesscenter extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = Seo::page('businesscenter');
		return $this->view->render('businesscenter', ['meta'=>$meta]);
	}
}