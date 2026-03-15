<?php 
/**
* Contact Controller
*/
class contact extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    //print_r("working");die();
	    $meta = ['url'=>url('contact'),'title'=>'Contact Us | Business Telecommunication Services', 'description'=>"Imperium Software Technology is offering ICT services in Dubai to leading brands since 2005. Feel free to contact Imperium to avail business telecommunication services bespoke for your specific industry type.", "keywords" => ""];
		return $this->view->render('contact', ['meta'=>$meta]);
	}
}