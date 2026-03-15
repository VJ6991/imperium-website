<?php 
/**
* inaipi Controller
*/
class avaya extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('avaya'),'title'=>'Avaya Cloud', 'description'=>"", "keywords" => ""];
		return $this->view->render('avaya', ['meta'=>$meta]);
	}
}