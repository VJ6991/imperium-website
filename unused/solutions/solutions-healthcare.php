<?php 
/**
* solutions-healthcare Controller
*/
class solutionshealthcare extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('solutions-healthcare'),'title'=>'Healthcare Management Software | VoIP Services in Dubai | Imperium Software', 'description'=>"Imperium provides cloud based software specially tailor for healthcare industry be it contact centers, telephony customized reports and multi-channel support system.", "keywords" => ""];
		return $this->view->render('solutions-healthcare', ['meta'=>$meta]);
	}
}