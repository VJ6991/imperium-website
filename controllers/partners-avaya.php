<?php 
/**
* partnersavaya Controller
*/
class partnersAvaya extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
		header("Location: " . url('cx/'));
		exit;
	}
}