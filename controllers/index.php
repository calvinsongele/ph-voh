<?php

class Index extends Controller {

	public function __construct() {
		parent::__construct();
		Session::init();
	//	Auth::handleLogin();
	}
	
	public function index() { 
	    //$this->view->jobs = $this->model->latestjobs();
	    $this->view->title = "{$this->_company()['c_name']} | {$this->_company()['c_short_desc']}";
		$this->view->render('index/index');
	}

	



	
	
}