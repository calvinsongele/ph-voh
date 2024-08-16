<?php

class Admin extends Controller {

	public function __construct() {
		parent::__construct();
		Auth::handleLogin();
		
	}
	
	public function index() {	
		$this->view->title = 'Admin Dashboard | '.$this->_company()['c_name'];
	 
		$this->view->render('admin/index');
	}
	
    public function support_tickets() { 
        $this->view->contacts = $this->model->contacts( $_GET['status'] ?? 'current' ); 
     
        
        if (isset($_GET['id'])) { 
            $this->view->msg = $this->model->contacts( $_GET['status'] ?? 'current', $_GET['id'] ); 
            $this->view->title = $this->view->msg['subject'] .'  | ' . $this->_company()['c_name'];
            $this->view->render('admin/support_spec_ticket');
            return;
        } 
        
        
        $this->view->title = ' Support | ' . $this->_company()['c_name'];
        $this->view->render('admin/support_tickets');
    }
   
    public function send_email() {    
        $this->view->me = $this->model->me();
        $this->view->title = ' Email | ' . $this->_company()['c_name'];
        $this->view->render('admin/send_email');
    }
 
 
    public function myprofile() {   
        $this->view->me = $this->me();
        $this->view->title = 'My profile settings | ' . $this->_company()['c_name'];
        $this->view->render('admin/settings/profile');
    }
    public function companyprofile() { 
        $this->view->me = $this->me();
        $this->view->title = 'Company profile settngs | ' . $this->_company()['c_name'];
        $this->view->render('admin/settings/company');
    }
    
    public function logs() {    
        $this->view->me = $this->me();
        $this->view->logs = $this->model->getlogs(150);
        //$this->view->employees = $this->model->getemployees(150);
        $this->view->title = 'My profile settngs | ' . $this->_company()['c_name'];
        $this->view->render('admin/settings/logs');
    }
    public function changepassword() {   
        $this->view->me = $this->me();
        $this->view->all_devices = $this->model->all_devices();
        $this->view->title = 'Change password | ' . $this->_company()['c_name'];
        $this->view->render('admin/settings/changepass');
    }
 
 
    public function users($action = 'all') { 
        $this->view->users = $this->model->users();  
        $this->view->me = $this->me();
        
        
        if ($action == 'new') {
            
            $this->view->title = ' New User | ' . $this->_company()['c_name'];
            $this->view->render('admin/staff/new');
            return;
        }
        
        
        $this->view->title = ' Users | ' . $this->_company()['c_name'];
        $this->view->render('admin/staff/view');
    }
    
     
    public function articles($action = 'new', $id = null) { 
        $this->view->me = $this->me();
		$this->view->getCategories = $this->model->getCategories();
		
		
 		$this->view->numrows = $this->model->numrows();

		if ($id != null) { //$n
			$this->view->currentpage = $id;
		}
		$this->view->role = '';
        
        
        if ($action == 'all') {
            $this->view->blogs = $this->model->myarticles( $id ); 
            $this->view->title = ' Manage Blogs | ' . $this->_company()['c_name'];
            $this->view->render('admin/blog/manage-blogs');
            return;
        } else if ($action == 'edit') {
            $this->view->role = 'edit';
            $this->view->getCategories = $this->model->getCategories();
            $this->view->article = $this->model->editarticle( $id ); 
            $this->view->title = ' Edit Blogs | ' . $this->_company()['c_name'];
            $this->view->render('admin/blog/edit-blogs');
            return;
        } else if ($action == 'newdynamic') {
            $this->view->getCategories = $this->model->getCategories(); 
            $this->view->title = ' New  Dynamic | ' . $this->_company()['c_name'];
            $this->view->render('admin/blog/new-dynamic');
            return;
        } else if ($action == 'review') {
            $this->view->getCategories = $this->model->getCategories();
	        $this->view->article = $this->model->getreviewposts();
            $this->view->title = ' Review Blogs | ' . $this->_company()['c_name'];
            $this->view->render('admin/blog/review-posts');
            return;
        }
        
         
        $this->view->title = ' New Blog | ' . $this->_company()['c_name'];
        $this->view->render('admin/blog/new-blog');
        return;
    }
 
 
    public function extras($action = 'visitstoday' ) {  
 
        
        
        if ($action == 'visitstoday') {
		    $this->view->visits = $this->model->getVisitsToday();
		    $this->view->duplicate = count($this->model->getVisitsduplicate()); 
            $this->view->title = ' Manage Blogs | ' . $this->_company()['c_name'];
            $this->view->render('admin/extras/visits-today');
            return;
        } else if ($action == 'visits') {
            $this->view->role = 'edit';
		$this->view->visits = $this->model->getVisits();
            $this->view->title = ' Visits | ' . $this->_company()['c_name'];
            $this->view->render('admin/extras/visits');
            return;
        } else if ($action == 'sessions') {
		    $this->view->visits = $this->model->getSessions();
            $this->view->title = ' New  Dynamic | ' . $this->_company()['c_name'];
            $this->view->render('admin/extras/sessions');
            return;
        }  
        else if ($action == 'ads') {
		    $this->view->ads = $this->model->getads();
            $this->view->title = ' Top Ads | ' . $this->_company()['c_name'];
            $this->view->render('admin/extras/ads');
            return;
        }  
         
        $this->view->title = ' Send SMS | ' . $this->_company()['c_name'];
        $this->view->render('admin/extras/send-sms');
        return;
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