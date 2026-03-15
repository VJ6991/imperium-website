<?php 
/**
* team Controller
*/
class team extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
		// $agentData = $this->getAgents();  
        $agents = [];
        $agentData = $this->getAgents();  
        $agents = $agentData->records;

        //print_r($agentData);die();

	    $meta = [
	                'url'=>url('team'),
                    'title'=>'team',
                    'breadcrumbs'=>'team',
                    'description'=> '',
                    'keywords' =>   ''
                    
        ];

		return $this->view->render('team', ['meta'=>$meta , 'team' => $agents]);
	}

	function detail($agentId){
        $agentSlug = explode('-',$agentId);
        $aId = end($agentSlug);
        $agentData = $this->singleAgent($aId);

        $agent = [];
        if(isset($agentData->records)){
            $agent = $agentData->records;
        }
        $meta = [
            'url'=>url('team/detail/'.$agentId),
            'title'=>  Helper::input($agent->profile, 'firstName') .' '. Helper::input($agent->profile, 'lastName'),
            'description'=> ''
        ];

        if(Helper::input($agent->profile, 'profilePic')) {
            $meta['image'] = Helper::input($agent->profile, 'profilePic');
        }
        if(Helper::input($agent->profile, 'phone')) {
            $meta['phone'] = Helper::input($agent->profile, 'phone');
        }
        if(Helper::input($agent->profile, 'email')) {
            $meta['email'] = Helper::input($agent->profile, 'email');
        }




        return $this->view->render('team_detail', ['meta'=>$meta, 'agent' => $agent]);

    }
}