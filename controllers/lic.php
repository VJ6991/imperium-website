<?php 
/**
* inaipi Controller
*/
class lic extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('lic'),'title'=>'', 'description'=>"", "keywords" => ""];
		return $this->view->render('lic', ['meta'=>$meta]);
	}
}