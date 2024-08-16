<?php

class Err extends Controller {

	function __construct() {
		parent::__construct();
		Session::init();
	}
	
	function index() {
	    $this->view->_company = ['c_name'=>'', 'c_tel'=>'', 'c_email'=>'', 'image_name'=>''];
	    $this->view->_ads = [ [] ];
		$this->view->title = '404 Error';
		$this->view->render('err/inc/header', true);
		$this->view->msg = 'This page doesnt exist';
		$this->view->render('err/index', true);
		$this->view->render('err/inc/footer', true);
	}

}