<?php 
/**
* inaipi Controller
*/
class banking extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('banking'),'title'=>'Digital Communication for Banking and Financial Services', "keywords" => ""];
		return $this->view->render('banking', ['meta'=>$meta]);
	}
}