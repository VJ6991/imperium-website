<?php 
/**
* multimedia Controller
*/
class multimedia extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('multimedia'),'title'=>'Multimedia', 'description'=>"", "keywords" => ""];
		return $this->view->render('multimedia', ['meta'=>$meta]);
	}
}