<?php

class Legal extends Controller {

	public function __construct() {
		parent::__construct(); 
		
	}
	
 

	// end of class
	public function index($url) {
	    
	    $this->view->data = $this->content()[$url];
	    $this->view->render("legal/index");
	}

}