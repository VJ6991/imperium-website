<?php 
/**
* inaipi Controller
*/
class helpdesk extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = Seo::page('helpdesk');
		return $this->view->render('helpdesk', ['meta'=>$meta]);
	}
}