<?php 
/**
* solutions-business-center Controller
*/
class solutionsbusinesscenter extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('solutions-business-center'),'title'=>'Imperium CTI Solutions', 'description'=>"", "keywords" => ""];
		return $this->view->render('solutions-business-center', ['meta'=>$meta]);
	}
}