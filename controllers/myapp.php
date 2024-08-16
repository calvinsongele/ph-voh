<?php

class MyApp extends Controller {
    
	public function __construct() {
		parent::__construct(); 
	}
	
	public function forgotpasswordaction(){ $this->model->forgotpasswordaction(); }
	public function passwordresetaction(){ $this->model->passwordresetaction(); }
	public function processlogin(){ $this->model->processlogin(); }
	public function processsignup(){ $this->model->processsignup(); }
	public function send_email(){ $this->model->send_email(); }
	public function content_update() { $this->model->content_update(); }
	public function update_user_data() { $this->model->update_user_data(); }
	public function change_password() { $this->model->change_password(); }
	public function get_csrf() { $this->model->get_csrf(); } 
	public function update_blog_views() { $this->model->update_blog_views(); }
	public function contactus() { $this->model->contactus(); } 
	/**************************************************real functions *******************************************************/

	
	
	
   // end of class
}