<?php

class Dashboard extends Controller {

	public function __construct() {
		parent::__construct();
		Auth::handleLogin();
	}
	
	public function index($url = '', $page = '') {
	     
	    $this->view->title = $this->me()['user_fname'] . ' | '.$this->_company()['c_name'];
		$this->view->render('dashboard/index');
	}
	
	public function editself() {  
	    $this->view->title = $this->me()['user_fname'] . ' - Edit | '.$this->_company()['c_name'];
		$this->view->render('dashboard/edit-self');
	}
 
    
    public function logout() {  
        //$this->model->removedevices();  
        Session::destroy();  
        echo "<script>document.cookie = 'remember=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';</script>";
        echo "<script>document.cookie = 'rkey=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';</script>";
        echo CustomFunctions::relocate('/');
    }
 
	

	// end of class

}