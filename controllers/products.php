<?php 
/**
* Products Controller
*/
class products extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
		$meta = ['url'=>url('products'),'title'=>'Products | Imperium Software Technologies FZCO', 'description'=>"Choose our finest telecom software products to compliment your everyday business functionality", "keywords" => ""];
		return $this->view->render('products', ['meta'=>$meta]);
	}

	function crmsolution(){
		$meta = ['url'=>url('crmsolution'),'title'=>'CRM Solution | Imperium Software Technologies FZCO', 'description'=>"", "keywords" => ""];
		return $this->view->render('crm-solution', ['meta'=>$meta]);
	}

	function callmanagement(){
		$meta = ['url'=>url('callmanagement'),'title'=>'Call Management | Imperium Software Technologies FZCO', 'description'=>"", "keywords" => ""];
		return $this->view->render('call-management', ['meta'=>$meta]);
	}

	function webrtc(){
		$meta = ['url'=>url('webrtc'),'title'=>'WebRTC | Imperium Software Technologies FZCO', 'description'=>"", "keywords" => ""];
		return $this->view->render('webrtc', ['meta'=>$meta]);
	}

	function tollfraud(){
		$meta = ['url'=>url('tollfraud'),'title'=>'Toll Fraud Protection | Imperium Software Technologies FZCO', 'description'=>"", "keywords" => ""];
		return $this->view->render('toll-fraud', ['meta'=>$meta]);
	}

	function budgetcontrol(){
		$meta = ['url'=>url('budgetcontrol'),'title'=>'Budget Control System | Imperium Software Technologies FZCO', 'description'=>"", "keywords" => ""];
		return $this->view->render('budget-control', ['meta'=>$meta]);
	}

	function callassistmodule(){
		$meta = ['url'=>url('callassistmodule'),'title'=>'Call Back Assist | Imperium Software Technologies FZCO', 'description'=>"", "keywords" => ""];
		return $this->view->render('call-assist-module', ['meta'=>$meta]);
	}

	function customersurvey(){
		$meta = ['url'=>url('customersurvey'),'title'=>'Customer Survey Module | Imperium Software Technologies FZCO', 'description'=>"", "keywords" => ""];
		return $this->view->render('customer-survey', ['meta'=>$meta]);
	}

	function pushpull(){
		$meta = ['url'=>url('pushpull'),'title'=>'Push/Pull Notification | Imperium Software Technologies FZCO', 'description'=>"", "keywords" => ""];
		return $this->view->render('push-pull', ['meta'=>$meta]);
	}

	function payroll(){
		$meta = ['url'=>url('payroll'),'title'=>'Payroll HRMS | Imperium Software Technologies FZCO', 'description'=>"", "keywords" => ""];
		return $this->view->render('payroll', ['meta'=>$meta]);
	}

	function islamicprayer(){
		$meta = ['url'=>url('islamicprayer'),'title'=>'Islamic Prayer Announcement | Imperium Software Technologies FZCO', 'description'=>"", "keywords" => ""];
		return $this->view->render('islamicprayer', ['meta'=>$meta]);
	}

	function icep(){
		$meta = ['url'=>url('icep'),'title'=>'ICEP | Imperium Software Technologies FZCO', 'description'=>"", "keywords" => ""];
		return $this->view->render('icep', ['meta'=>$meta]);
	}

	function chatbot(){
		$meta = ['url'=>url('chatbot'),'title'=>'Chatbot | Imperium Software Technologies FZCO', 'description'=>"", "keywords" => ""];
		return $this->view->render('chatbot', ['meta'=>$meta]);
	}

	function socialmedia(){
		$meta = ['url'=>url('socialmedia'),'title'=>'Social Media Integrator | Imperium Software Technologies FZCO', 'description'=>"", "keywords" => ""];
		return $this->view->render('socialmedia', ['meta'=>$meta]);
	}

	function zoho(){
		$meta = ['url'=>url('zoho'),'title'=>'ZOHO Connector | Imperium Software Technologies FZCO', 'description'=>"", "keywords" => ""];
		return $this->view->render('zoho', ['meta'=>$meta]);
	}

	function clicktocall(){
		$meta = ['url'=>url('clicktocall'),'title'=>'Inaipi Click to Call | Imperium Software Technologies FZCO', 'description'=>"", "keywords" => ""];
		return $this->view->render('clicktocall', ['meta'=>$meta]);
	}

	function callreporter(){
		$meta = ['url'=>url('callreporter'),'title'=>'Imperium Call Reporter | Imperium Software Technologies FZCO', 'description'=>"", "keywords" => ""];
		return $this->view->render('call-reporter', ['meta'=>$meta]);
	}
}