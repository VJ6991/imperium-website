<?php 
	/**
	* Error Controller
	*/
	class IMK_Error
	{

		function index(){
            header("HTTP/1.0 404 Not Found");
			header("location:".url('not-found'));
			die;
		}

	}