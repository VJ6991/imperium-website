<?php 
/**
* products-cti-crm-connecter Controller
*/
class productscticrmconnecter extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('products-cti-crm-connecter'),'title'=>'Imperium CTI Solutions', 'description'=>"", "keywords" => ""];
		return $this->view->render('products-cti-crm-connecter', ['meta'=>$meta]);
	}
}