<?php 
/**
* inaipi Controller
*/
class realestate extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('realestate'),'title'=>'Communication Technology Solution for Real Estate in Dubai ', "keywords" => ""];
		return $this->view->render('realestate', ['meta'=>$meta]);
	}
}