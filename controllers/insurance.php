<?php 
/**
* inaipi Controller
*/
class insurance extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = Seo::page('insurance');
		return $this->view->render('insurance', ['meta'=>$meta]);
	}
}