<?php 
/**
* About Controller
*/
class about extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('about'),'title'=>'Imperium Software Technologies| About Us', 'description'=>"Imperium offers interactive telecom software solutions that add competitive value to an organization’s and accelerate digital transformation", "keywords" => ""];
		return $this->view->render('about', ['meta'=>$meta]);
	}

	function ipx(){
	    $meta = ['url'=>url('ipx'),'title'=>'About', 'description'=>"", "keywords" => ""];
		return $this->view->render('ipx', ['meta'=>$meta]);
	}
}