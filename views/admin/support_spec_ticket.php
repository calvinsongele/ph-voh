
<!DOCTYPE html>
<html lang="en">


    <head>
        <?php require 'includes/header.php'; ?>
    </head>

    <body class="sb-nav-fixed">
	  
		<!-- Preloader area start -->
		<!--<div id="preloader"></div>-->
		<!-- Preloader area end -->

		<?php require 'includes/head2.php'; ?>

		<div id="layoutSidenav" class="container-fluid d-flex align-items-stretch">
		    
		  <?php require 'includes/sidebar.php'; ?>

			<div id="layoutSidenav_content">

				<main>
				 
		 
	<div class="card mb-4">
		<div class="card-header">
			<?php echo $this->msg['subject'] ?> 
		</div> 
		<div class="card-body"> 
			    <p>
			        <?php echo $this->msg['message'] ?>
			    </p> 
		</div>
		<div class="card-footer">
		    <p>
		        Sender: <i style='color:blac;font-weight:bolder;'><?php echo $this->msg['name'] ?></i> &nbsp; 
		        Phone: <i style='color:blac;font-weight:bolder;'><?php echo $this->msg['phone'] ?></i></i> &nbsp; 
		        Status: <i style='color:blac;font-weight:bolder;'><?php echo $this->msg['status'] ?></i></i> &nbsp; 
		        Date: <i style='color:blac;font-weight:bolder;'><?php echo date('d/m/Y', strtotime($this->msg['date'])) ?></i> &nbsp;
		        Email: <a href='/admin/send_email?email=<?php echo $this->msg['email'] ?>'><i style='color:blac;font-weight:bolder;'><?php echo $this->msg['email'] ?></i></i> 
		        <i class='fa fa-external-link'></i></a>
		            
		        
		    </p>
		    <div class='row'>
		        <div class='col-md-6'>
		            <a href='#' class='deleteticket btn btn-danger' rel='<?php echo $this->msg['cus_ID'] ?>'>Delete this ticket </a>
		        </div>
		        <div class='col-md-6'>
		            <?php if ( strtolower($this->msg['status']) != 'closed') { ?>
		            <a href='#' class='closeticket btn btn-warning' rel='<?php echo $this->msg['cus_ID'] ?>'>Close this ticket </a>
		            <?php } ?>
		        </div>
		    </div>
		    
		</div>
	</div>
				</main>

			</div>	<!--End layoutSidenav_content-->
		</div> <!--End layoutSidenav-->

	    <?php require 'includes/footer.php'; ?>
 
	 
    </body>
</html>