<?php 
/**
* strategicpartnerships Controller
*/
class strategicpartnerships extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
		header("Location: " . url('cx/#/strategic-partnerships'));
		exit;
	}
}
