<?php

/**
* Bootstrap of the app
*/
class Bootstrap 
{
	
	function __construct() {
		
		$uri = isset($_GET['uri']) ? $_GET['uri'] : 'index';

		//$uri = strtolower($uri);	
		
		$uri = rtrim($uri,'/');
		$uri = explode('/',$uri);

		// This is a trimmed build: Home, Case Studies (casestudy), and the
		// Verticals section — the industry-influence listing plus each vertical's
		// inside page. Any other path 404s instead of trying to load a controller
		// that no longer ships in this folder.
		$allowed = [
			'index', 'industry-influence', 'casestudy',
			// Entity/E-E-A-T page (GEO phase) — who Imperium is, not what it sells
			'about',
			// Enquiry page reached from the "Get in Touch" buttons on the homepage
			'contact',
			// Vertical inside pages linked from /industry-influence
			'healthcare', 'debtcollection', 'helpdesk', 'businesscenter',
			'logistics', 'educationsector', 'ecommerce', 'realestate',
			'retail', 'banking', 'finance', 'insurance',
		];
		if (!empty($uri[0]) && !in_array($uri[0], $allowed, true)) {
			require __DIR__.'/../controllers/IMK_Error.php';
			$error = new IMK_Error();
			$error->index();
			return false;
		}

 		if(empty($uri[0])){
 			require __DIR__.'/../controllers/index.php';
 			$controller = new Index();
 			return false;
 		}

		$file = __DIR__.'/../controllers/' . $uri[0] . '.php';
		if(file_exists($file)){
			require $file;
		}else{
			$error_file =  __DIR__.'/../controllers/IMK_Error.php';
			require $error_file;
			$error = new IMK_Error();
			$error->index();
			return false;

		}
		
		$ctr = Helper::dashesToCamelCase($uri[0]);
		$controller = new  $ctr;
		
		if(isset($uri[2])){
			$params_uri  = array_slice($uri, 2);
			if(count($params_uri) > 1){
				echo $controller->{$uri[1]}($params_uri);
			}else{
				echo $controller->{$uri[1]}($params_uri[0]);
			}
			
			 
		}else{
			if(isset($uri[1])){
				if(method_exists($controller,$uri[1]))
					echo $controller->{$uri[1]}();
				else{
					$error_file =  __DIR__.'/../controllers/IMK_Error.php';
					require $error_file;
					$error = new IMK_Error();
					$error->index();
					return false;
				}
			}else{
				echo $controller->index();

			}
		}

		
	}
}

?>