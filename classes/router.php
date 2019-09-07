<?php
Class Router {

        private $registry;

        private $path;

        private $args = array();


        function __construct($registry)
		{

              $this->registry = $registry;

        }
		
		
	function setPath($path)
	 {
	
			$path = trim($path, '/\\');
			$path .= DIRSEP;
			//echo $path.'-----';
			if (is_dir($path) == false) 
			{
					throw new Exception ('Invalid controller path: `' . $path . '`');
			}
			$this->path = $path;
	}

	private function getController(&$file, &$controller, &$action, &$args) {
	
			$route = (empty($_GET['route'])) ? '' : $_GET['route'];
			
	
			if (empty($route)) { $route = 'index'; }
	
			$route = trim($route, '/\\');
	        
			//echo $route;
			
			$parts = explode('/', $route);
			
			$cmd_path = $this->path;
	
			foreach ($parts as $part)
			{
	        		$fullpath = $cmd_path . $part;
					//echo $fullpath.'**';
	
    				if (is_dir($fullpath))
					{
							$cmd_path .= $part . DIRSEP;
	
							array_shift($parts);
	
							continue;
					}

					if (is_file($fullpath . '.php'))
					{
							//echo 'Here we are-this is the php file';
							$controller = $part;
							array_shift($parts);
							break;
					}
			}
	
			if (empty($controller)) { $controller = 'index'; };
	
			$action = array_shift($parts);
			
	
			if (empty($action)) { $action = 'index'; }
	
			//path to controller
			$file = $cmd_path . $controller . '.php';
			//echo $cmd_path;
	
			$args = $parts;
			
			//echo "FILE -".$file." CONTROLLER - ".$controller." ACTION -".$action;
			//var_dump($args);
	
	}

	function delegate() 
	{

			$this->getController($file, $controller, $action, $args);
	
			if (is_readable($file) == false) 
			{
				die ('404 Not Found');
			}
	
	        ///yyyyaaas! we had found it! let's include it!
			include ($file);//подключает файл с нужным контроллером из getController()



			if ($this->getService($controller))
			{	

				$class_s = 'Service_' . $controller;
		
				$service = new $class_s($this->registry);
						//создаем объект сервиса и задаем ему нужный метод  	
//print_r($args);		
				$service->$action($args);
			}


	
			$class = 'Controller_' . $controller;
	
			$controller = new $class($this->registry);
	
			if (is_callable(array($controller, $action)) == false) 
			{
	     		die ('404 Not Found');
	    	}
	
			$controller->$action($args);
	
	}



	private function getService($name)
	{
		
		$path = site_path . 'service' . DIRSEP . $name . '.php';
 
			if (!file_exists($path)) 
			{
					//trigger_error ('service `' . $name . '` does not exist.', E_USER_NOTICE);
					return false;
			}
	
			// Load variables
			/*foreach ($this->vars as $key => $value) 
			{
					$$key = $value;
			}*/
	
			include ($path);  
			return true;              


	}


}




?>
