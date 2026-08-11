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
	    $meta = Seo::page('casestudy');
        $casestudies = Helper::get_casestudies();
		return $this->view->render('casestudies', ['meta'=>$meta, 'casestudies' => $casestudies]);
	}

	
}