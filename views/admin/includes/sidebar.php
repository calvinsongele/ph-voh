	<div id="layoutSidenav_nav">
		<span class="close-mobile-nav"><i class="fa fa-close-line-squared-alt"></i></span>
        <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">

			<div class="sidebar-user">
				<a href="javascript: void(0);"> 
					<?php 
					
					if ( strtolower(Session::get('role')) != 'admin') {
					    echo CustomFunctions::relocate('/dashboard');die();
					}
					
					
					
					    $file = "public/assets/uploads/{$this->me['image_name']}";

						if (!file_exists("public/assets/uploads/{$this->me['image_name']}"))
							$file = "public/assets/uploads/5a1fe8218365f792ef0f5604670e90d30e.jpg"; 
						    //$file = "https://i.pinimg.com/564x/5a/1f/e8/5a1fe8218365f792ef0f5604670e9030.jpg";
					
					?>
                    <img src="/<?php echo $file ?>" alt="<?php echo $this->me['user_names'] ?>" height="82" class="rounded-circle shadow-sm"  >
                    <span class="sidebar-user-name"><?php echo $this->me['user_names'] ?></span>
                </a>
            </div>

			<div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">NAVIGATIONS  </div>

                        <a class="nav-link" href="/admin">
                        	<div class="sb-nav-link-icon"><i class="fa fa-home"></i></div>
                        	Home
                        </a> 
    
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Structure" aria-expanded="false" aria-controls="collapseLayouts">
                        	<div class="sb-nav-link-icon"><i class="fa fa-headphones"></i></div>
                        	Users
                        	<div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="Structure" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        	<nav class="sb-sidenav-menu-nested nav">
                        		<a class="nav-link" href="/admin/users/new">New User</a>  
                        		<a class="nav-link" href="/admin/users/view">All</a>
                        	</nav>
                        </div>  
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#hmantmgt" aria-expanded="false" aria-controls="collapseLayouts">
                        	<div class="sb-nav-link-icon"><i class="fa fa-newspaper-o"></i></div>
                        	Articles
                        	<div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="hmantmgt" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        	<nav class="sb-sidenav-menu-nested nav">
                        		<a class="nav-link" href="/admin/articles/new">New </a> 
                        		<a class="nav-link" href="/admin/articles/all">Manage </a>  
                        		<a class="nav-link" href="/admin/articles/review">Review Posts </a> 
                        		<a class="nav-link" href="/admin/articles/new-dynamic">New Dynamic </a> 
                        	</nav>
                        </div> 
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#hmantmgt2" aria-expanded="false" aria-controls="collapseLayouts">
                        	<div class="sb-nav-link-icon"><i class="fa fa-folder-open-o"></i></div>
                        	Predictions 
                        	<div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="hmantmgt2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        	<nav class="sb-sidenav-menu-nested nav">
                        		<a class="nav-link" href="/admin/predictions/new">New </a> 
                        		<a class="nav-link" href="/admin/predictions/view">Manage </a>  
                        		<a class="nav-link" href="/admin/predictions/jps">Jps </a>
                        	</nav>
                        </div>  
                         
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#hmantmgt45" aria-expanded="false" aria-controls="collapseLayouts">
                        	<div class="sb-nav-link-icon"><i class="fa fa-users"></i></div>
                        	Celebs
                        	<div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="hmantmgt45" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        	<nav class="sb-sidenav-menu-nested nav">
                        		<a class="nav-link" href="/admin/celebs/new">New </a> 
                        		<a class="nav-link" href="/admin/celebs/view">Manage </a>  
                        		<a class="nav-link" href="/admin/celebs/review">Review Celebs </a> 
                        		<a class="nav-link" href="/admin/celebs/content">Celeb Content </a> 
                        	</nav>
                        </div> 
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#hmantmgt451" aria-expanded="false" aria-controls="collapseLayouts">
                        	<div class="sb-nav-link-icon"><i class="fa fa-briefcase"></i></div>
                        	Jobs
                        	<div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="hmantmgt451" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        	<nav class="sb-sidenav-menu-nested nav">
                        		<a class="nav-link" href="/admin/jobs/new">New </a> 
                        		<a class="nav-link" href="/admin/jobs/view">Manage </a>   
                        	</nav>
                        </div> 
                        
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#hmantmgt456" aria-expanded="false" aria-controls="collapseLayouts">
                        	<div class="sb-nav-link-icon"><i class="fa fa-snowflake-o"></i></div>
                        	Extras  
                        	<div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="hmantmgt456" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        	<nav class="sb-sidenav-menu-nested nav">
                        		<a class="nav-link" href="/admin/extras/ads">Ads </a> 
                        		<a class="nav-link" href="/admin/extras/visits-today">Visits Today </a> 
                        		<a class="nav-link" href="/admin/extras/visits">Visits </a>  
                        		<a class="nav-link" href="/admin/extras/sessions">Session visits </a> 
                        		<a class="nav-link" href="/admin/extras/sms">Send Sms </a> 
                        	</nav>
                        </div> 
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#hmantmgt4568" aria-expanded="false" aria-controls="collapseLayouts">
                        	<div class="sb-nav-link-icon"><i class="fa fa-dollar"></i></div>
                        	Payments  
                        	<div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="hmantmgt4568" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        	<nav class="sb-sidenav-menu-nested nav">
                        		<a class="nav-link" href="/admin/payments/requests">Requests </a> 
                        		<a class="nav-link" href="/admin/payments/slips">Pay </a>   
                        		<a class="nav-link" href="/admin/payments/staff-slips">Staff Slips </a> 
                        	</nav>
                        </div> 
                        
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tickets" aria-expanded="false" aria-controls="collapseLayouts">
                        	<div class="sb-nav-link-icon"><i class="fa fa-comment"></i></div>
                        	Enquiries 
                        	<div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="tickets" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        	<nav class="sb-sidenav-menu-nested nav">
                        		<a class="nav-link" href="/admin/support_tickets?status=current">Active Tickets</a> 
                        		<a class="nav-link" href="/admin/support_tickets?status=closed">Closed Tickets</a>
                        	</nav>
                        </div> 
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#dashb" aria-expanded="false" aria-controls="collapseLayouts">
                        	<div class="sb-nav-link-icon"><i class="fa fa-cog"></i></div>
                        	Settings
                        	<div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="dashb" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        	<nav class="sb-sidenav-menu-nested nav">
                        		<a class="nav-link" href="/admin/logs">View Logs</a> 
                        		<a class="nav-link" href="/admin/my-profile">My Profile</a>  
                        		<a class="nav-link" href="/admin/company-profile">Company Profile</a> 
                        		<a class="nav-link" href="/admin/change-password">Change password</a>  
                        		<a class="nav-link" href="/admin/logout">Logout</a> 
                        		<a class="nav-link" href="/admin/logout?all_devices=true">Logout all devices</a> 
                        	</nav>
                        </div>
                         <a class="nav-link upload_img_btn" href="#">
                        	<div class="sb-nav-link-icon"><i class="fa fa-file-image-o"></i></div>
                        	Manage Images
                         </a> 
 
                    </div>
                    </div>
           </nav>
        </div><!--End layoutSidenav_nav-->