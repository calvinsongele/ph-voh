
<!DOCTYPE html>
<html lang="en">

    <head>
        <?php require 'includes/header.php'; ?>
    </head>

    <body class="sb-nav-fixed">
		<!-- Main Modal -->
		

		<!-- Preloader area start -->
		<!--<div id="preloader"></div>-->
		<!-- Preloader area end -->

		<?php require 'includes/head2.php'; ?>

		<div id="layoutSidenav" class="container-fluid d-flex align-items-stretch">
		    
		  <?php require 'includes/sidebar.php'; ?>

			<div id="layoutSidenav_content">

				<main class='shadow alert'>
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
	 
	 
 
 

		<div class="col-xl-3 col-md-6">
			<div class="card mb-4 border-bottom-card border_blend">
				<div class="card-body">
					<div class="d-flex">
						<div class="flex-grow-1"> 
							<h5  >Tickets.</h5>
							<h6 class="pt-1 mb-0"><b><?php echo ($this->contacts) ?> </b></h6>
						</div>
						<div>
							<a href="/dashboard/support_tickets?status=current"><i class="fa fa-arrow-right"></i>View</a>
						</div>
					</div>
				</div>
			</div>
		</div>	 	
		<div class="col-xl-3 col-md-6">
			<div class="card mb-4 border-bottom-card border_blend">
				<div class="card-body">
					<div class="d-flex">
						<div class="flex-grow-1">
							<h5>Total Posts</h5>
							<h6 class="pt-1 mb-0"><b><?php echo $this->totposts; ?> days</b></h6>
						</div>
						<div>
							<a href="/dashboard/change-password"><i class="fa fa-arrow-right"></i>View</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="col-xl-3 col-md-6">
			<div class="card mb-4 border-bottom-card border_blend">
				<div class="card-body">
					<div class="d-flex">
						<div class="flex-grow-1">
							<h5>Drafts</h5>
							<h6 class="pt-1 mb-0"><b class=''> <?php echo $this->drafts ?></b></h6>
						</div>
						<div>
							<a href="#"><i class="fa fa-arrow-right"></i>View</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-xl-3 col-md-6">
			<div class="card mb-4 border-bottom-card border_blend">
				<div class="card-body">
					<div class="d-flex">
						<div class="flex-grow-1">
							<h5>Celebrities</h5>
							<h6 class="pt-1 mb-0"><b class=''> <?php echo $this->cels ?></b></h6>
						</div>
						<div>
							<a href="/dashboard/change-password"><i class="fa fa-arrow-right"></i>View</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card mb-4 border-bottom-card border_blend">
				<div class="card-body">
					<div class="d-flex">
						<div class="flex-grow-1">
							<h5>External</h5>
							<h6 class="pt-1 mb-0"><b class=''> <?php echo $this->external ?></b></h6>
						</div>
						<div>
							<a href="/dashboard/change-password"><i class="fa fa-arrow-right"></i>View</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card mb-4 border-bottom-card border_blend">
				<div class="card-body">
					<div class="d-flex">
						<div class="flex-grow-1">
							<h5>Links</h5>
							<h6 class="pt-1 mb-0"><b class=''> <?php echo $this->totlinks ?></b></h6>
						</div>
						<div>
							<a href="/dashboard/change-password"><i class="fa fa-arrow-right"></i>View</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card mb-4 border-bottom-card border_blend">
				<div class="card-body">
					<div class="d-flex">
						<div class="flex-grow-1">
							<h5>Content</h5>
							<h6 class="pt-1 mb-0"><b class=''> <?php echo $this->conts ?></b></h6>
						</div>
						<div>
							<a href="/dashboard/change-password"><i class="fa fa-arrow-right"></i>View</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card mb-4 border-bottom-card border_blend">
				<div class="card-body">
					<div class="d-flex">
						<div class="flex-grow-1">
							<h5>Grand Ttl</h5>
							<h6 class="pt-1 mb-0"><b class=''> <?php echo $this->total ?></b></h6>
						</div>
						<div>
							<a href="/dashboard/change-password"><i class="fa fa-arrow-right"></i>View</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card mb-4 border-bottom-card border_blend">
				<div class="shadow">
					<h5 class="alert text-center blend white" style='' >Online Users <a href="/dashboard/"><i class="fa fa-arrow-right white"></i></a></h5>	
					<div class="carl_online_widget ">
						<p class="shadow pb-3 pl-2 text-center text-strong current"> <i class="fa fa-pei-chart"></i> <?php echo isset($_SESSION['onlineusers']) ? $_SESSION['onlineusers'] : 0; ?> </p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card mb-4 border-bottom-card border_blend">
				<div class="shadow">
					<h5 class="alert text-center blend white" >Total Visits <a href="/dashboard/"><i class="fa fa-arrow-right white"></i></a></h5>	
					<div class="carl_online_widget ">
						<p class="shadow pb-3 pl-2 text-center text-strong total"> <i class="fa fa-pei-chart"></i> <?php echo isset($_SESSION['onlineusers']) ? $_SESSION['onlineusers'] : 0; ?> </p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card mb-4 border-bottom-card border_blend">
				<div class="shadow">
					<h5 class="alert text-center blend white" >Regenerate XML <a href="#" class='btn_xml'><i class="fa fa-arrow-right white"></i></a></h5>	
				 
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card mb-4 border-bottom-card border_blend">
				<div class="shadow">
				    <?php 
				    $state = file_get_contents('public/assets/system/other_ads.txt');
				    if (empty($state)) { ?>
					<h5 class="alert text-center blend white" title='Not active' >Activate MGID 
					<a href="#" class='btn_update_mgid' value='1'><i class="fa fa-toggle-off text-danger"></i></a></h5>		
				    <?php } else { ?>
					<h5 class="alert text-center blend white" title='Active' >Deactivate MGID <a href="#" class='btn_update_mgid' value='0'><i class="fa fa-toggle-on white"></i></a></h5>
					<?php } ?>
				 
				</div>
			</div>
		</div>


		 
	</div>

	<div class="card mb-4">
		<div class="card-header"> 
			Your Recent Logs [Max-50] 
		</div>
		<div class="card-body" style='max-height: 600px; overflow:auto;'>
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
					    <tr>
							<th>Date</th> 
							<th>Narration</th>
							<th>Activity type</th> 
					    </tr>
					</thead>
					<tbody>
							    <?php  foreach($this->logs as $row) {   ?>
									<tr> 
									    <td><?php echo date('d-m-Y', $row['l_date'])   ?></td>
										<td><?php echo $row['l_message']   ?></td>  
										<td><?php echo $row['l_type'] ?></td>     
								         
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

	    <?php require ROOT . 'views/admin/includes/footer.php'; ?>
 
        <script>
            $(function() {
                getonline();
            })
        </script>
	 <!-- Custom JS -->
	 
    </body>
</html>