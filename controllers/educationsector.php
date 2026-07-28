<?php 
/**
* inaipi Controller
*/
class educationsector extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('educationsector'),'title'=>'ICT Solution for Education Industry | Industry Leading Software', 'Make Help Desk'=>"", "keywords" => ""];
		return $this->view->render('educationsector', ['meta'=>$meta]);
	}
}