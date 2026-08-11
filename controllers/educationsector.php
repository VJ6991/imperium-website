<?php 
/**
* inaipi Controller
*/
class educationsector extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = Seo::page('educationsector');
		return $this->view->render('educationsector', ['meta'=>$meta]);
	}
}