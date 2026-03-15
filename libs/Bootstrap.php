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