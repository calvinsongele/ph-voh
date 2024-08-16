<?php
#[AllowDynamicProperties]
class Controller { 
    
	function __construct() {
		 
		$this->view = new View();
		date_default_timezone_set('Africa/Nairobi');
		Session::init();
	    set_time_limit(1080);  
	    
	 
	    
	}
	
	public function loadModel($name) {
	    set_time_limit(1080); 
		
		$path = 'models/'.$name.'_model.php';
		
		if (file_exists($path)) {
			require 'models/'.$name.'_model.php';
			
			$modelName = $name . '_Model';
			$this->model = new $modelName();
		}	
		
		  
		$this->view->_company = $this->model->_company();    
		$this->view->me = $this->model->me();   
		$this->view->_content = $this->model->content();  
		$this->view->_nots = $this->model->nots();  
	}
	
	
    public function me() {
		return $this->model->me();
	}
	public function _company() {
		return $this->model->_company();
	} 
    public function content() {
        return $this->model->content();
    }  
    public function nots() {
        return $this->model->nots();
    }   
    public function notfound() {
        $this->view->title = 'Not Found';
        $this->view->msg = '404 Error Page Not found';
	    $this->view->render('err/index');
    }
  
	
	
	
	
	
	
	
	
	
	
	

}