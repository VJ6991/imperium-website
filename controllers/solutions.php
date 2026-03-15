<?php 
class solutions extends Controller
{
	function __construct(){
		parent::__construct();
	}
	function index(){
		header("Location: " . url('cx/#/solutions'));
		exit;
	}
}