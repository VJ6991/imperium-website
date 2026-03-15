<?php 
/**
* resources Controller
*/
class resources extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
	    $meta = ['url'=>url('resources'),'title'=>'Resources', 'description'=>"", "keywords" => ""];
		return $this->view->render('resources', ['meta'=>$meta]);
	}
	function guide(){
	    $meta = ['url'=>url('resources/guide'),'title'=>'Guide', 'description'=>"", "keywords" => ""];
		return $this->view->render('guide', ['meta'=>$meta]);
	}

	function productsctisolutions(){
	    $meta = ['url'=>url('resources/products-cti-solutions'),'title'=>'Imperium CTI Solutions', 'description'=>"", "keywords" => ""];
		return $this->view->render('products-cti-solutions', ['meta'=>$meta]);
	}

	function calculator(){
	    $meta = ['url'=>url('resources/calculator'),'title'=>'Calculator', 'description'=>"", "keywords" => ""];
		return $this->view->render('calculator', ['meta'=>$meta]);
	}

	function gainCalculator(){
	    $meta = ['url'=>url('resources/gainCalculator'),'title'=>'Gain Calculator', 'description'=>"", "keywords" => ""];
		return $this->view->render('gain-calculator', ['meta'=>$meta]);
	}

	function roiCalculator(){
	    $meta = ['url'=>url('resources/roiCalculator'),'title'=>'Gain Calculator', 'description'=>"", "keywords" => ""];
		return $this->view->render('roi-calculator', ['meta'=>$meta]);
	}
	function vesting(){
	    $meta = ['url'=>url('resources/vesting'),'title'=>'vesting', 'description'=>"", "keywords" => ""];
		return $this->view->render('vesting', ['meta'=>$meta]);
	}

}