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
	    $meta = ['url'=>url('insurance'),'title'=>'Insurance Services in Dubai', "keywords" => ""];
		return $this->view->render('insurance', ['meta'=>$meta]);
	}
}