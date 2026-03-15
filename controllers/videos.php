<?php 
/**
* Videos Controller
*/
class videos extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('videos'),'title'=>'videosideos', 'description'=>"", "keywords" => ""];
		return $this->view->render('videos', ['meta'=>$meta]);
	}
	function whyExchange(){
		$meta = ['url'=>url('videos/whyExchange'),'title'=>'Why Exchange', 'description'=>"", "keywords" => ""];
		return $this->view->render('why-exchange', ['meta'=>$meta]);
	}
	function equity(){
		$meta = ['url'=>url('videos/equity'),'title'=>'Equity', 'description'=>"", "keywords" => ""];
		return $this->view->render('equity', ['meta'=>$meta]);
	}
	function likekind(){
		$meta = ['url'=>url('videos/likekind'),'title'=>'Likekind', 'description'=>"", "keywords" => ""];
		return $this->view->render('likekind', ['meta'=>$meta]);
	}
	function history(){
		$meta = ['url'=>url('videos/history'),'title'=>'History', 'description'=>"", "keywords" => ""];
		return $this->view->render('history', ['meta'=>$meta]);
	}
	function logistics(){
		$meta = ['url'=>url('videos/logistics'),'title'=>'Logistics', 'description'=>"", "keywords" => ""];
		return $this->view->render('logistics', ['meta'=>$meta]);
	}
	function dst(){
		$meta = ['url'=>url('videos/dst'),'title'=>'DST', 'description'=>"", "keywords" => ""];
		return $this->view->render('dst', ['meta'=>$meta]);
	}

	function deferred(){
		$meta = ['url'=>url('videos/deferred'),'title'=>'Deferred 1031', 'description'=>"", "keywords" => ""];
		return $this->view->render('deferred', ['meta'=>$meta]);
	}

	function reverse(){
		$meta = ['url'=>url('videos/reverse'),'title'=>'Reverse 1031', 'description'=>"", "keywords" => ""];
		return $this->view->render('reverse', ['meta'=>$meta]);
	}
	function improvement(){
		$meta = ['url'=>url('videos/improvement'),'title'=>'Improvement 1031', 'description'=>"", "keywords" => ""];
		return $this->view->render('improvement', ['meta'=>$meta]);
	}
	function personalproperty(){
		$meta = ['url'=>url('videos/personalproperty'),'title'=>'Personal Property', 'description'=>"", "keywords" => ""];
		return $this->view->render('personalproperty', ['meta'=>$meta]);
	}
	function idrules(){
		$meta = ['url'=>url('videos/idrules'),'title'=>'Idrules', 'description'=>"", "keywords" => ""];
		return $this->view->render('idrules', ['meta'=>$meta]);
	}
	function idissues(){
		$meta = ['url'=>url('videos/idissues'),'title'=>'Idissues', 'description'=>"", "keywords" => ""];
		return $this->view->render('idissues', ['meta'=>$meta]);
	}
	function timeconstraints(){
		$meta = ['url'=>url('videos/timeconstraints'),'title'=>'1031 Timing', 'description'=>"", "keywords" => ""];
		return $this->view->render('timeconstraints', ['meta'=>$meta]);
	}
}