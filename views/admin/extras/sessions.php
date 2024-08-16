
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
						<div class="table-wrapper" style="margin-top: -.04%;">
                                <div class="table-title">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h5 class="" id="currentcontest">Last 30 Session visits</h5>
                                        </div>
                                        <div class="col-sm-6">
                                            					
                                        </div>
                                    </div>
                                </div> 

								<table class="table table-striped table-hover table-responsive <?php echo empty($this->visits) ? "hidden" : ""; ?>">
								<thead>
									<tr>
										<th>#</th>
                                        <th>Ip Address</th>
                                        <th>Country</th>
										<th>Continent</th>
										<th>Date</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
                                        <th>#</th>
                                        <th>Ip Address</th>
                                        <th>Country</th>
										<th>Continent</th>
										<th>Date</th>
									</tr>
								</tfoot>
								<tbody>
									<?php 
								//	$this->getCurrentSubmissions($contest['cq_int_ID']) 
											$i = 0;
											foreach($this->visits as $visit) {
											$i++;	if ($i == 101) break;
											$dataArray = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='. $visit['us_ip_address']));
											if (empty($visit['us_country'])) {
			                                    $country = $dataArray["geoplugin_countryName"];
											} else {
											    $country = $visit['us_country'];
											}
											if (empty($visit['us_continent'])) {
			                                    $continent = $dataArray["geoplugin_continentName"];
											} else {
											    $continent = $visit['us_continent'];
											}
											echo "
											<tr>
												<td>$i</td>
												<td>". $visit['us_ip_address'] ."</td>
												<td>". $country ."</td>
												<td> ". $continent ." </td>
												<td>". $visit['us_year'] ."-".  $visit['us_month'] ."-".  $visit['us_day'] ."  </td>
												
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