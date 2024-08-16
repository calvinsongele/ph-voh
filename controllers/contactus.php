<?php

class ContactUs extends Controller {

	public function __construct() {
		parent::__construct(); 
		
	}
	
	public function index() {	
		$this->view->title = 'Contact Us | '.$this->_company()['c_name'];
		$this->view->render('index/contact');
	}

	

	// end of class

}