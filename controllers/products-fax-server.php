<?php 
/**
* products-fax-server Controller
*/
class productsfaxserver extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('products-fax-server'),'title'=>'Imperium CTI Solutions', 'description'=>"", "keywords" => ""];
		return $this->view->render('products-fax-server', ['meta'=>$meta]);
	}
}