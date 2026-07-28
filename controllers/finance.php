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
	    $meta = ['url'=>url('finance'),'title'=>'Finance Services in Dubai', "keywords" => ""];
		return $this->view->render('finance', ['meta'=>$meta]);
	}
}