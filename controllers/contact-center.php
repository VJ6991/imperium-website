<?php 
/**
* Contact Center Controller
*/
class contactCenter extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('contact-center'),'title'=>'Avaya Contact Center Select | Imperium', 'description'=>"Imperium offers a multi-channel contact center on Cloud that is smooth and scalable to meet the needs of a flourishing business.", "keywords" => ""];
		return $this->view->render('contact-center', ['meta'=>$meta]);
	}
}
