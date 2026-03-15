<?php 
/**
* partnerscisco Controller
*/
class partnerscisco extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('partners-cisco'),'title'=>'Cisco Call Accounting | Partner', 'description'=>"Imperium is a business partner of Cisco; it provides Cisco call accounting with valuable features such as ring time summary, traffic analysis, ring time detail, etc.", "keywords" => ""];
		return $this->view->render('partners-cisco', ['meta'=>$meta]);
	}
}