<?php

class Settings extends Controller {

	public function __construct() {
		parent::__construct(); 
	}
	
	public function index() {	
		$this->view->title = 'Settings | '.$this->_company()['c_name'];
		$this->view->render('index/settings');
	}
}