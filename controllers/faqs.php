<?php 
/**
* faqs Controller
*/
class faqs extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('faqs'),'title'=>'Imperium CTI Solutions', 'description'=>"", "keywords" => ""];
		return $this->view->render('faqs', ['meta'=>$meta]);
	}
}