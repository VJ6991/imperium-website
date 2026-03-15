<?php 
/**
* About Controller
*/
class casestudy extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('casestudy'),'title'=>'Case Study | CTI Soultions | VoIP Service UAE', 'description'=>"Know more about Imperium, an industry leader in CTI solutions. Headquartered in Dubai, UAE, we are a one-stop solution for all of your computer telephony integration needs. Read more about us!", "keywords" => ""];
		return $this->view->render('casestudies', ['meta'=>$meta]);
	}

	
}