<?php 
/**
* inaipi Controller
*/
class ecommerce extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = Seo::page('ecommerce');
		return $this->view->render('ecommerce', ['meta'=>$meta]);
	}
}