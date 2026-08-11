<?php 
/**
* inaipi Controller
*/
class finance extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = Seo::page('finance');
		return $this->view->render('finance', ['meta'=>$meta]);
	}
}