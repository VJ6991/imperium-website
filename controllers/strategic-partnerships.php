<?php 
/**
* strategicpartnerships Controller
*/
class strategicPartnerships extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
		header("Location: " . url('cx/#/strategic-partnerships'));
		exit;
	}
}
