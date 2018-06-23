<?php 
/**
* Main Class
*/
class Main
{
	public $url;
	public $controlname  = "maincontrol";
	public $model		 = "Index";
	public $control_path = "app/controllers/";
	public $controller;

	public function __construct()
	{
		$this->getURL();
		$this->loadcontroller();
		$this->callmethod();
	} 


	public function getURL(){
		$this->url = isset($_GET['url']) ? $_GET['url'] : NULL; 
	
		if ($this->url !=NULL) {
			$this->url = rtrim($this->url);
		$this->url = explode('/', filter_var($this->url, FILTER_SANITIZE_URL));
		} else {
			unset($this->url);
		}
	}


	 
		

	// Controller  Load
	public function loadcontroller(){
		if(!isset($this->url[0])){
			include $this->control_path.$this->controlname.".php"; 
			$this->controller = new $this->controlname(); 
		}else{
			$this->controlname = $this->url[0];
			$filename = $this->control_path.$this->controlname.".php";
			if(file_exists($filename)){
				include $filename;
				if(class_exists($this->controlname)){
					$this->controller = new $this->controlname();
				}else{
					header('Location:'.BASED_URL.'/maincontrol');
				}
			}else{
				header('Location:'.BASED_URL.'/maincontrol');
			}
		}
	}
	// Model Load
	public function callmethod(){
		if (isset($this->url[2])) {
			$this->model= $this->url[1];
			if (method_exists($this->controller, $this->model)) {
				$this->controller->{$this->model}($this->url[2]);
			} else {
				header('Location:'.BASED_URL.'/maincontrol');
			} 
		}else{
			if (isset($this->url[1])) {
				$this->model = $this->url[1];

				if (method_exists($this->controller, $this->model)) {
					$this->controller->{$this->model}();
				} else {
					header('Location:'.BASED_URL.'/maincontrol');
				}
			}else{
				if (method_exists($this->controller, $this->model)) {
					$this->controller->{$this->model}();
				} else {
					//header('Location:'.BASED_URL.'/maincontrol');
				}
			}
		}
	}





}
 ?>