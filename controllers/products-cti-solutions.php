<?php 
/**
* products-cti-solutions Controller
*/
class productsctisolutions extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('products-cti-solutions'),'title'=>'Imperium CTI Solutions', 'description'=>"", "keywords" => ""];
		return $this->view->render('products-cti-solutions', ['meta'=>$meta]);
	}
}