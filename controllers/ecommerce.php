<?php 
/**
* inaipi Controller
*/
class ecommerce extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('ecommerce'),'title'=>'Cloud Communication for Ecommerce Industry | Contact Center Solution', "keywords" => ""];
		return $this->view->render('ecommerce', ['meta'=>$meta]);
	}
}