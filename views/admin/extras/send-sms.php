
<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include ROOT . 'views/admin/includes/header.php'; ?>
    </head>

    <body class="sb-nav-fixed">
		<!-- Main Modal -->
		  
		<!-- Preloader area start -->
		<!--<div id="preloader"></div>-->
		<!-- Preloader area end -->

		<?php require ROOT . 'views/admin/includes/head2.php'; ?>

		<div id="layoutSidenav" class="container-fluid d-flex align-items-stretch">
		    
		  <?php require ROOT . 'views/admin/includes/sidebar.php'; ?>

			<div id="layoutSidenav_content">

				<main>
				 
		 
	                <div class="container ">
						<div class="card mt-3">
						    <div class="container">
                                <div class="row mt-3">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <form action="" method="post" id='sendsmsform'><?php //echo date('Y-m-d: H:i:s', 1643074003); ?>
                                            <p style='color:initial;'>If valid email or empty, email will be sent otherwise sms. </p>
                                            <div class="form-group">
                                                <input type="text" name="number" class="form-control" placeholder='Email or number'>
                                            </div>
                                            <div class="form-group">
                                                <textarea type="text" name="message" class="form-control" rows='7'>Dear User, your account at www.homekazi.co.ke is active. Please login anytime. Don't reply to this SMS.</textarea>
                                            </div>
                                            <div class="form-group">
                                                <button class="form-control btn btn-primary mybtn" type="send" name="sendmessage">Send Message</button>
                                            </div>
                                        </form>
                            
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                            </div>
					    </div>
					</div>
				</main>

			</div>	<!--End layoutSidenav_content-->
		</div> <!--End layoutSidenav-->

	    <?php require ROOT . 'views/admin/includes/footer.php'; ?>
 

	 <!-- Custom JS -->
	 
    </body>
</html>