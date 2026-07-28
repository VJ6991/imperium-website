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
	    $meta = ['url'=>url('contact'),'title'=>'Contact Us | Talk to Imperium Software Technologies', 'description'=>"Get in touch with Imperium Software Technologies for AI-powered CX, contact center, CTI, IVR and enterprise telephony solutions. Offices in Dubai, Singapore, Chennai and Bengaluru.", "keywords" => ""];
		return $this->view->render('contact', ['meta'=>$meta]);
	}
}
