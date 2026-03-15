<?php 
/**
* solutions-debt-collection Controller
*/
class solutionsdebtcollection extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('solutions-debt-collection'),'title'=>'Imperium CTI Solutions', 'description'=>"", "keywords" => ""];
		return $this->view->render('solutions-debt-collection', ['meta'=>$meta]);
	}
}