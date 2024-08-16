
<!DOCTYPE html>
<html lang="en">

    <head>
        <?php require ROOT . 'views/admin/includes/header.php'; ?>
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
			All Users  <a href='/admin/users/new' class='btn btn-secondary'>New user</a>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
					    <tr>
							<th>Since | Total: <?php echo count($this->users) ?></th>  
							<th>Name</th>  
							<th>Phone</th>
							<th>Status</th>
							<th>Action</th>
							<th>Password</th>
					    </tr>
					</thead>
					<tbody> 
							    <?php  foreach($this->users as $row) { ?>
									<tr>
									    <td> <?php echo str_replace('-', '.',$row['user_datecreated']); ?></td>
									    <td><?php echo $row['user_names']   ?> <a href='/admin/send_email?email=<?php echo $row['user_email'] ?>'><i class='fa fa-external-link'></i></a> </td>
										
										<td><?php echo $row['user_tel'] ?></td>
										<td><?php echo $row['user_status'] ?></td> 
										<td>
												<span class='deactivate badge badge-primary cursor' rel='<?php echo $row['user_ID'] ?>'>Suspend</span> 
												<span class='reactivate badge badge-success cursor' rel='<?php echo $row['user_ID'] ?>'>Reinstate</span> 
												<span class='deluser badge badge-danger cursor' rel='<?php echo $row['user_ID'] ?>'>Delete</span>  
											
										</td>
										<td> 
												<span class='resetpass badge badge-danger cursor' title='Anyone can do this' data-toggle='tooltip' rel='<?php echo $row['user_ID'] ?>'>Reset Pass</span> 
											
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

	    <?php require ROOT . 'views/admin/includes/footer.php'; ?>

		<script type="text/javascript">
		(function($) {

			$('.deluser').click(function() {
				let formdata = new FormData();
				formdata.append('id', $(this).attr('rel') ); 
				swal({icon: 'warning', text: 'Do you really want to delete this?', buttons:true, dangerMode: true})
				.then(function(ok) { 
					if (ok) { 
						const data = _data(formdata, 'deluser');				
						if (data['error'] == 'false') {
							swal('', data['msg'], 'success' );
							location.reload();
						} else swal('Heads Up', data['msg'], 'error' );
						e.preventDefault();
					}

				}); 
			});
			$('.reactivate').click(function() {
				let formdata = new FormData();
				formdata.append('id', $(this).attr('rel') ); 
				
				
				swal({icon: 'warning', text: 'Do you really want to reactivate this?', buttons:true, dangerMode: true})
				.then(function(ok) {

					if (ok) { 
						const data = _data(formdata, 'reinstateuser');				
						if (data['error'] == 'false') {
							swal('', data['msg'], 'success' );
							location.reload();
						} else swal('Heads Up', data['msg'], 'error' );
						e.preventDefault();
					}

				}); 

			});
			$('.resetpass').click(function() {
				let formdata = new FormData();
				formdata.append('id', $(this).attr('rel') ); 
				
				
				swal({icon: 'warning', text: 'Do you really want to reactivate this?', buttons:true, dangerMode: true})
				.then(function(ok) {

					if (ok) { 
						const data = _data(formdata, 'resetpass_indv');				
						if (data['error'] == 'false') {
							swal('', data['msg'], 'success' );
							location.reload();
						} else swal('Heads Up', data['msg'], 'error' );
						e.preventDefault();
					}

				}); 

			});
			$('.deactivate').click(function() {
				let formdata = new FormData();
				formdata.append('id', $(this).attr('rel') );

				
				swal({icon: 'warning', text: 'Do you really want to deactivate this?', buttons:true, dangerMode: true})
				.then(function(ok) {

					if (ok) { 
						const data = _data(formdata, 'deactivateuser');				
						if (data['error'] == 'false') {
							swal('', data['msg'], 'success' );
							location.reload();
						} else swal('Heads Up', data['msg'], 'error' );
						e.preventDefault();
					}

				}); 

			});
 
    		"use strict";

			//Show Success Message
			
			//Show Single Error Message
			
			
			
        })(jQuery);

	 </script>

	 <!-- Custom JS -->
	 
    </body>
</html>