<?php 
/**
* inaipi Controller
*/
class retail extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = Seo::page('retail');
		return $this->view->render('retail', ['meta'=>$meta]);
	}
}