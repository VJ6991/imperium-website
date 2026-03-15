<?php 
/**
* products-ivrsolutions Controller
*/
class productsivrsolutions extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('products-ivrsolutions'),'title'=>'Imperium CTI Solutions', 'description'=>"", "keywords" => ""];
		return $this->view->render('products-ivrsolutions', ['meta'=>$meta]);
	}
}