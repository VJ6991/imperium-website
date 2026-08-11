<?php 
/**
* inaipi Controller
*/
class debtcollection extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = Seo::page('debtcollection');
		return $this->view->render('debtcollection', ['meta'=>$meta]);
	}
}