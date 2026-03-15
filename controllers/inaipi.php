<?php 
/**
* inaipi Controller
*/
class inaipi extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('inaipi'),'title'=>'Imperium CTI Solutions', 'description'=>"", "keywords" => ""];
		return $this->view->render('inaipi', ['meta'=>$meta]);
	}
}