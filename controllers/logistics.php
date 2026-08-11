<?php 
/**
* inaipi Controller
*/
class logistics extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = Seo::page('logistics');
		return $this->view->render('logistics', ['meta'=>$meta]);
	}
}