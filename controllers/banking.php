<?php 
/**
* inaipi Controller
*/
class banking extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = Seo::page('banking');
		return $this->view->render('banking', ['meta'=>$meta]);
	}
}