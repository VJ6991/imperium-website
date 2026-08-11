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
	    $meta = Seo::page('industry-influence');
        $verticals = Helper::get_verticals();
		return $this->view->render('industry-influence', ['meta'=>$meta, 'verticals'=>$verticals]);
	}
}