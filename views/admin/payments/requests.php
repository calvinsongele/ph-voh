
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
					<div class="table-wrapper " style="margin-top: -.1%;">
            <div class="table-title ">
                <div class="row">
                    <div class="col-sm-6">
						<h6>Payment Requests</h6>
					</div>
					<div class="col-sm-6">
						<a href="#" class="btn btn-success" id="requestPayment1"><i class="fa fa-plus-cirscle"></i> <span>Approve All</span></a>
						<a href="#" id="amount" class="btn btn-danger" data-toggle="modal" > <span>Delete All</span></a>						
					</div>
                </div>
            </div>
            <?php echo empty($this->paymentrequests) ? "<div class='alert alert-danger'> No payment history yet </div>" : ""; ?>
            <table class="table table-striped table-hover table-responsive <?php echo empty($this->paymentrequests) ? "hidden" : ""; ?>" align="center">
                <thead>
                    <tr> 
								<th>#</th>
								<th>Amount</th>
                                <th>Date</th>
                                <th>Status</th>
							</tr>
								</thead>
								<tfoot>
									<tr>
                                        <th>#</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
							</tfoot>
                			<tbody class="table_body">
					
								<?php 
										
											$i = 0;
											foreach($this->paymentrequests as $hist) {
                                            $i++;		
                                            if ($hist['requestStatus'] == 0) {
                                                $status = 'Pending';
                                            } else {
                                                $status = 'Settled';
                                            }																					
											echo "
											<tr>
												<td>$i</td>
												<td>". $hist['amountRequested'] / 100 ."</td>
                                                <td> ". $hist['requestDate'] ." </td>
                                                <td> ". $status ." </td>
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