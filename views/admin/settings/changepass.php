
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
				<h4 class="header-title">Change password</h4>
                <style>  .d {  color:red; font-size:14px; font-style:italic;  } </style>
                <small class="d">Always change password regularly.</small>
                <?php if ($this->me['user_role'] != 'Applicant') { ?> <br>
                <small class="d">Current password expires in <?php echo number_format((($this->me['user_pass_expiry']-time())/86400), 0) ?> days.</small> 
                <small class="d">It will expire exactly at <?php echo date('H:i:s', $this->me['user_pass_expiry']) ?> hours.</small>
                <?php } ?>
			</div>
			<div class="card-body">
			    <form method="post" class="validate" autocomplete="off" id="changepassform"  >
					<input type="hidden" name="_token" value="OczKU8aDJfcjYzvNjkuOdWZEZBGT4o4VBL5xCUS3">
					<div class="row">
					 

						<div class="col-md-12">


							<div class="form-group">
								<label class="control-label">Current Password</label>
								<input  class="form-control " name="pass1" type='password' autocomplete="off" ><span class="user_names"></span>
							</div>
							<!------------------------------------------>
							<hr>
							<div class="form-group">
								<label class="control-label">New Password</label>
								<input  class="form-control "  name="pass2" type='password' autocomplete="off" ><span class="user_email"></span>
							</div>
							<!------------------------------------------>
							<hr>
							<div class="form-group">
								<label class="control-label">Repeat Password</label>
								<input class="form-control " name="pass3"  type='password' autocomplete="off"><span class="user_workemail"></span>
							</div>
							<!------------------------------------------>
							<hr>
					  
							<div class="form-group"> 
								<button type='submit' class="btn blend btn-block">Submit Now</button><span class="c_short_desc"></span>
							</div>
                            <div class="alert mt-2 fdback"></div>
							<!------------------------------------------>
							
							<div class='alert shadow' >
							    <h3>Logged In Devices</h3>  
							    <div class=''>
							        <table class='table table-striped table-hover'>
							            <thead>
							                <th>#</th>
							                <th>Device</th>
							                <th>Delete</th>
							            </thead>
							            <tbody>
							                <?php $i=0; foreach ($this->all_devices as $row) { $i++; ?>
							                <tr>
							                    <td><?php echo $i ?></td>
							                    <td><?php echo CustomFunctions::getdevice($row['ud_user_agent']) ?></td>
							                    <td> <a href='#' class='remove_spec_dev' rel='<?php echo $row['ud_ID'] ?>'>Delete</a> </td>
							                </tr>
							                <?php } ?>
							            </tbody>
							        </table>
							    </div>
							</div>
						 



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

            $('#changepassform').submit(function(e) {
                e.preventDefault(); 

				const data = _data(new FormData(this), 'changepass');				
				$('.fdback').html(data['msg']);
                if (data['error'] == 'false') $(this).trigger('reset');
            });
		    
		 
		 

    		"use strict"; 
        })(jQuery);

	 </script>

	 <!-- Custom JS -->
	 
    </body>
</html>