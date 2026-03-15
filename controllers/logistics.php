<?php 
/**
* inaipi Controller
*/
class logistics extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('logistics'),'title'=>'Supply Chain & Logistics Solutions | Cloud Software | Imperium', 'Logistics'=>"", "keywords" => ""];
		return $this->view->render('logistics', ['meta'=>$meta]);
	}
}