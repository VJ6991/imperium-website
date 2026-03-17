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
		$partnerships_file = __DIR__ . '/../cms/data/partnerships.json';
		$partnerships = [];
		if (file_exists($partnerships_file)) {
			$partnerships = json_decode(file_get_contents($partnerships_file), true);
		}
		
		return $this->view->render('strategic-partnerships', [
			'partnerships' => $partnerships
		]);
	}
}
