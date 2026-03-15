<?php 
/**
* solutions-logistics Controller
*/
class solutionslogistics extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('solutions-logistics'),'title'=>'Imperium CTI Solutions', 'description'=>"", "keywords" => ""];
		return $this->view->render('solutions-logistics', ['meta'=>$meta]);
	}
}