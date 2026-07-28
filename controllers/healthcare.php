<?php 
/**
* inaipi Controller
*/
class healthcare extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('healthcare'),'title'=>'Healthcare Management Software | VoIP Services in Dubai | Imperium Software', 'description'=>"Imperium provides cloud based software specially tailor for healthcare industry be it contact centers, telephony customized reports and multi-channel support system", "keywords" => ""];
		return $this->view->render('healthcare', ['meta'=>$meta]);
	}
}