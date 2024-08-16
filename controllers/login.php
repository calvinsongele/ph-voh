<?php

class Login extends Controller {

	function __construct() {
		parent::__construct();	
		Session::init();
	}
	
	public function index() {	
		$this->view->title = 'Login | ' . $this->_company()['c_name'];
		$this->view->render('account/login');
	}
	public function signup() {	
		$this->view->title = 'Create account | ' . $this->_company()['c_name'];
		$this->view->render('account/signup');
	}
	//forgot password
	public function forgotpassword(){	
		$this->view->title = 'Forgot Password | ' . $this->_company()['c_name'];
		$this->view->render('account/forgot-password');
	}
	
	//forgot password action
	public function forgotpasswordaction(){		
		$this->model->forgotpassword();
	}

	// password reset
	public function passwordreset($val1 = null, $val2 = null){
		
		// if isset selector and token
		if (isset($_GET['validator']) && ($_GET['selector'])) {
			$this->view->validator = $_GET['validator'];
			$this->view->selector = $_GET['selector'];
		} else {
			$this->view->validator = '';
			$this->view->selector = '';
		}
		
		$this->view->title = 'Password Reset | ' . $this->_company()['c_name'];
		$this->view->render('account/new-password');
	}
	// password reset
	public function passwordresetaction(){		
		$this->model->passwordresetaction();
	}

	//email verification
	public function emailverify($val1 = null, $val2 = null){	

		$this->view->feedback = $this->model->emailverify($val1, $val2);
		$this->view->title = 'Email Verify | ' . $this->_company()['c_name'];
		$this->view->render('account/email-verify');
	}
	
	

}