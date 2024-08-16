
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
					<div class="table-wrapper" style="margin-top: -.1%;">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
            						<h6>Payments</h6>
            					</div>
            					<div class="col-sm-6">						
            					</div>
                            </div>
                        </div>
                        <?php echo empty($this->users) ? "<div class='alert alert-danger'> No users </div>" : ""; ?>
                        <table class="table table-striped table-hover table-responsive <?php echo empty($this->users) ? "hidden" : ""; ?>" align="center">
                            <thead>
                                <tr>
            						<!--th>
            							<span class="custom-checkbox">
            								<input type="checkbox" id="selectAll">
            								<label for="selectAll"></label>
            							</span>
            						</th-->
            						
            								<th>#</th>
            								<th>Name</th>
                                            <th>Pay</th>
            							</tr>
            								</thead>
            								<tfoot>
            									<tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Pay</th>
                                                </tr>
            							</tfoot>
                            			<tbody class="table_body">
            					
            								<?php 
            										
            											$i = 0;
            											foreach($this->users as $row) {
                                                        			$i++;																		
            											echo "
            											<tr>
            												<td>$i</td>
            												<td>". $row['user_names'] ."</td>
                                                            <td> <a href='#' class='paysal' rel='".$row['user_ID']."'> Pay </a> </td>
            											</tr>";
            											}
            										
            									?>
            					
            							</tbody>
            					</table>
            			 
            					
            		</div>
	</div>
				</main>

			</div>	<!--End layoutSidenav_content-->
		</div> <!--End layoutSidenav-->

	    <?php require ROOT . 'views/admin/includes/footer.php'; ?>

  

	 <!-- Custom JS -->
	 
    </body>
</html>