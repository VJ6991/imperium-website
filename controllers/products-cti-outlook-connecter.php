<?php 
/**
* products-cti-outlook-connecter Controller
*/
class productsctioutlookconnecter extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('products-cti-outlook-connecter'),'title'=>'Imperium CTI Solutions', 'description'=>"", "keywords" => ""];
		return $this->view->render('products-cti-outlook-connecter', ['meta'=>$meta]);
	}
}