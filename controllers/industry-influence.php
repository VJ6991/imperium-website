<?php 
/**
* solutions-service-industry Controller
*/
class industryinfluence extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('industry-influence'),'title'=>'Solutions| Industries | Imperium App', 'description'=>"Imperium provides cloud based software specially tailor for healthcare industry be it contact centers, telephony customized reports and multi-channel support system", "keywords" => ""];
        $verticals = Helper::get_verticals();
		return $this->view->render('industry-influence', ['meta'=>$meta, 'verticals'=>$verticals]);
	}
}