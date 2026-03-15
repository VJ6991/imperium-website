<?php 
/**
* products-sms-solutions Controller
*/
class productssmssolutions extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('products-sms-solutions'),'title'=>'Imperium CTI Solutions', 'description'=>"", "keywords" => ""];
		return $this->view->render('products-sms-solutions', ['meta'=>$meta]);
	}
}