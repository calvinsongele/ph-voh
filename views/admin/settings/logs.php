
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
				 
		 
	<div class="card mb-4">
		<div class="card-header">
			Your Logs
		</div>
		<div class="card-body">
            <div class="alert">
                <label for="">Start Date</label> <input type="date" value="<?php echo date('Y-m-d') ?>"  id="startdate">
                <label for="">End Date</label> <input type="date" value="<?php echo date('Y-m-d') ?>"  id="enddate">
                <label for="">Type</label> <select  id="ltype">
                    <option value="all">All Logs</option> 
                    <option value="Account">Account</option>
                    <option value="Payments Mgt">Payments Mgt</option>
                    <option value="Bill Mgt">Bill Mgt</option>
                    <option value="User Mgt">User Mgt</option>
                    <option value="Tenant Mgt">Tenant Mgt</option> 
                    <option value="Support Mgt">Support Mgt</option>
                    <option value="Settings">Settings</option>
                    <option value="Company">Company</option>
                </select>  
                <input type='hidden'  id="usrid" value="self"> 
                    
               
                <button type="button"  class=" btn-sm btn_blend" id="printLogs">Print Logs</button>
            </div>
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
					    <tr> 
							<th>Narration</th>
							<th>Activity type</th>
							<th>Done by</th> 
					    </tr>
					</thead>
					<tbody> 
							    <?php  foreach($this->logs as $row) {   ?>
									<tr>  
										<td><?php echo $row['l_message']   ?></td>  
										<td><?php echo $row['l_type'] ?></td>   
										<td><?php echo $row['user_names'] ?></td>     
										   
									 
									
								         
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

		<script type="text/javascript">
		(function($) {
            
            $('#printLogs').click(() => {
                const start = $('#startdate').val();
                const end = $('#enddate').val();
                const type = $('#ltype').val();
                const usrid = $('#usrid').val();
                if ((start) == '') swal('wait!', 'Select start date', 'error');
                else if ((end) == '') swal('Wait!', 'Select end date', 'error');
                else if ((type) == '') swal('Wait!', 'Select type', 'error');
                else location.href='/printouts/logs?start='+start+'&end='+end+'&type='+type+'&id='+usrid; 
            });

    		"use strict";

			//Show Success Message
			
			//Show Single Error Message
			
			
			
        })(jQuery);

	 </script>

	 <!-- Custom JS -->
	 
    </body>
</html>