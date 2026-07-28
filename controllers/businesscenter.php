<?php 
/**
* inaipi Controller
*/
class businesscenter extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('businesscenter'),'title'=>'Business Center', 'description'=>"", "keywords" => ""];
		return $this->view->render('businesscenter', ['meta'=>$meta]);
	}
}