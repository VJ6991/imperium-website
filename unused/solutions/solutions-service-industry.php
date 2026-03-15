<?php 
/**
* solutions-service-industry Controller
*/
class solutionsserviceindustry extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('solutions-service-industry'),'title'=>'Imperium CTI Solutions', 'description'=>"", "keywords" => ""];
		return $this->view->render('solutions-service-industry', ['meta'=>$meta]);
	}
}