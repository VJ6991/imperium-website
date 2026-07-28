<?php 
/**
* inaipi Controller
*/
class helpdesk extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('helpdesk'),'title'=>'Imperium Service Desk Module | Help Desk Services', 'description'=>"Searching for a cost-effective help desk services? Imperium service desk module offers best help desk services for customer service industry at competitive rates. Contact now.", 'Make Help Desk'=>"", "keywords" => ""];
		return $this->view->render('helpdesk', ['meta'=>$meta]);
	}
}