
<!DOCTYPE html>
<html lang="en">

    <head>
        <?php require ROOT . 'views/admin/includes/header.php'; ?>
    </head>

    <body class="sb-nav-fixed"> 

		<!-- Preloader area start -->
		<!--<div id="preloader"></div>-->
		<!-- Preloader area end -->

		<?php require ROOT . 'views/admin/includes/head2.php'; ?>

		<div id="layoutSidenav" class="container-fluid d-flex align-items-stretch">
		    
		    
		  <?php require ROOT . 'views/admin/includes/sidebar.php'; ?>

			<div id="layoutSidenav_content">

				<main>
				 

 
<div class="row">
						<div class="col-lg-12">
							<div class="alert alert-success alert-dismissible" id="main_alert" role="alert">
								<button type="button" id="close_alert" class="close">
									<span aria-hidden="true"><i class="icofont-close-line-squared-alt"></i></span>
								</button>
								<span class="msg"></span>
							</div>
						</div>
					</div>

					<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<h4 class="header-title">Add a User</h4>
                 
			</div>
			<div class="card-body">
			    <form method="post" class="validate" autocomplete="off" id="invitetenant"  >
					<input type="hidden" name="_token" value="OczKU8aDJfcjYzvNjkuOdWZEZBGT4o4VBL5xCUS3">
					<div class="row">
					 

						<div class="col-md-12">


                            <div class="form-group">
								<label class="control-label">Full Name</label>
								<input  class="form-control " name="name" type='text' autocomplete="off" required> 
							</div> 
							<!------------------------------------------>
							<hr>
                            <div class="form-group">
								<label class="control-label">Phone</label>
								<input  class="form-control " name="tel" type='text' autocomplete="off" required> 
							</div> 
							<!------------------------------------------>
							<hr>
							<div class="form-group">
								<label class="control-label">Email</label>
								<input  class="form-control " name="email" type='email' autocomplete="off" required> 
							</div> 
							<!------------------------------------------>
							<hr>
							<div class="form-group">
								<label class="control-label">Role</label>
								<select class="form-control   " name="role"   required>
                                    <option value="" hidden>Select role</option>
                                    <option value="User" >Customer</option>
                                    <option value="Admin" >Admin</option>
                                </select>
							</div>
							<!------------------------------------------>
							<hr>
					  
							<div class="form-group"> 
								<input type='submit' class="btn blend btn-block" value='Submit Now'>
							</div>
                            <div class="alert mt-2 fdback"></div>
							<!------------------------------------------>
						 



						</div>
 
					</div>
			    </form>
			</div>
		</div>
    </div>
</div>
 

		 
	 
				</main>

			</div>	<!--End layoutSidenav_content-->
		</div> <!--End layoutSidenav-->

		<!-- Core Js  -->
	    <?php require ROOT . 'views/admin/includes/footer.php'; ?>

		<script type="text/javascript">
		(function($) {
 

            $('#invitetenant').submit(function(e) {
                e.preventDefault(); 

				const data = _data(new FormData(this), 'add_users');				
                if (data['error'] == 'false') {
                    $(this).trigger('reset');
                    $('.fdback').html( "<span class='text-success'> "+data['msg']+" </span>" );
                } else $('.fdback').html( "<span class='text-danger'> "+data['msg']+" </span>" );
            });
		    
		 
		 

    		"use strict"; 
        })(jQuery);

	 </script>

	 <!-- Custom JS -->
	 
    </body>
</html>