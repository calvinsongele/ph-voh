
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
			Support Tickets [if your clients send messages] 
		</div> 
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
					    <tr>
							<th>Date</th> 
							<th>Name</th>
							<th>Email</th> 
							<th>Subject</th>
							<th>Message</th>  
							<th>Status</th>    
					    </tr>
					</thead>
					<tbody> 
					            
				        <?php  foreach($this->contacts as $row) { ?> 
							<tr>
							    <td> <?php echo date('d/m/Y', strtotime($row['date']) ); ?></td>
							    <td><?php echo $row['name'] ?? '' ?></td>
								<td><?php echo $row['email'] ?></td>  
								<td><?php echo CustomFunctions::trimTitle($row['subject'], 6); ?> </td>  
								<td>
								    <a class='c btn_blend'  style='border:1px solid grey; padding:2px;border-radius:4px;' href='/admin/support_tickets?id=<?php echo $row['cus_ID'] ?>'>View Message</a> 
								</td> 
								<td>
								     <?php if ($row['status'] == 'current') { ?>
								        <a class='badge badge-success  ' href='#'>Active</a> 
								     <?php } else { ?>
								        <a class='badge badge-danger  ' href='#'>Closed</a> 
								     <?php } ?>
								</td> 
						    </tr>
					    <?php } ?>
							 
					</tbody>
				</table>
			</div>
		</div>
	</div>
				</main>

			</div>	<!--End layoutSidenav_content-->
		</div> <!--End layoutSidenav-->

	    <?php require 'includes/footer.php'; ?>

		<script type="text/javascript">
		(function($) {
		    
		    

    		"use strict";

			//Show Success Message
			
			//Show Single Error Message
			
			
			
        })(jQuery);

	 </script>

	 <!-- Custom JS -->
	 
    </body>
</html>