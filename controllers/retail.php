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
	    $meta = ['url'=>url('retail'),'title'=>'Retail Services in Dubai', "keywords" => ""];
		return $this->view->render('retail', ['meta'=>$meta]);
	}
}