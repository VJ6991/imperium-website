<?php 
/**
* registration Controller
*/
class registration extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('registration'),'title'=>'Imperium CTI Solutions', 'description'=>"", "keywords" => ""];
		return $this->view->render('registration', ['meta'=>$meta]);
	}
}