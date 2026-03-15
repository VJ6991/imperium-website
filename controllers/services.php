<?php 
/**
* Service Controller
*/
class services extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('services'),'title'=>'Services', 'description'=>"", "keywords" => ""];
		return $this->view->render('services', ['meta'=>$meta]);
	}
	function singleservice(){
	    $meta = ['url'=>url('singleservice'),'title'=>'Single Service', 'description'=>"", "keywords" => ""];
		return $this->view->render('singleservice', ['meta'=>$meta]);
	}
}