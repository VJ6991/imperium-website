<?php 
/**
* partners-microsoft-lync Controller
*/
class partnersmicrosoftlync extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('partners-microsoft-lync'),'title'=>'Microsoft Lync Server | Partner', 'description'=>"Imperium has a partnership with Microsoft Lync Server; it is the most advanced cloud communication product available in the market to expand your communication options.", "keywords" => ""];
		return $this->view->render('partners-microsoft-lync', ['meta'=>$meta]);
	}
}