<?php 
/**
* inaipi Controller
*/
class debtcollection extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('debtcollection'),'title'=>'Dubai Debt Solutions | Debt Management Services', 'description'=>"Need debt solutions system in Dubai to manage your agency's day-to-day operations? We provide secured debt management and collection system. For more information, visit Imperium.", "keywords" => ""];
		return $this->view->render('debtcollection', ['meta'=>$meta]);
	}
}