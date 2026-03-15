<?php 
/**
* products-call-reporter Controller
*/
class productscallreporter extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('products-call-reporter'),'title'=>'Imperium CTI Solutions', 'description'=>"", "keywords" => ""];
		return $this->view->render('products-call-reporter', ['meta'=>$meta]);
	}
}