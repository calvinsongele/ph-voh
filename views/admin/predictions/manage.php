
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
                                        <div class="col-sm-2">
                                             
                                            <a href="/admin/predictions/new" class="btn btn-primary"><i class="fa fa-plus-circle"></i> <span>New</span></a>
                                        </div>
                                        <div class="col-sm-4">
                                            
                                            <input class='searchparam1' placeholder='Search here' value='<?php echo $_GET['search'] ?? '' ;?>' title='Search predictions' ><button class='searchcelebp'  title='Search'> <i class='fa fa-search'></i> </button>	 					
                                        </div>
                                        <div class="col-sm-6">		
                                            <div class="btn-group btngroup1 ">
                                                 <label style='background:lightgrey;'>Yesterday</label>
                                                 <label style='background:lightblue;'>Today</label>
                                                							
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div> 

								<table class="table table-striped table-hover table-responsive table-secondary <?php echo empty($this->data) ? "hidden" : ""; ?>">
								<thead  >
									<tr  >
										<th  >#</th>
                                        <th  >Teams <span style='background:blue;color:white;font-size:14px'><?php echo ($this->avg) ?></span> </th>
										<th>Playing date</th>
										<th>Prediction</th>
										<th>Results</th> 
										<th>Action </th>
									</tr>
								</thead> 
								<tbody>
									<tr>
										<td> </td>
                                        <td> </td>
										<td></td>
										<td></td>
										<td></td> 
										<td> </td>
									</tr>
									<?php 
								//	$this->getCurrentSubmissions($contest['cq_int_ID']) 
											$i = 0;
											$thistype = $this->tp;
											foreach($this->data as $row) { 
											$i++;	
											$teams = "{$row['comp_team_a']} v {$row['comp_team_b']}";
											
											$yesterday = "";
											$today = "";
											if ($row['comp_date'] == date('Y-m-d', strtotime("-1 days") ) ) $yesterday = "background:lightgrey;";
											if ($row['comp_date'] == date('Y-m-d'  ) ) $today = "background-color:lightblue;";
										 
										 
											echo "
											<tr style='$yesterday $today   ' > 
												<td>$i</td>
												<td> <a target='_blank' href='/football/predictions/".$row['comp_url']."'>$teams</a> [".$row['comp_views']."] 
												<a href='#' rel='". $row['comp_ID'] ."' class='changeprediction'>ch</a>
												<a href='/admin/predictions/edit/". $row['comp_ID'] ."' ><i class='fa fa-pencil'></i></a>
												<a href='#' rel='". $row['comp_ID'] ."' class='delete_prediction'><i class='fa fa-trash'></i></a>
												</td>
												<td> ". str_replace('-','.', $row['comp_date']) ."  </td>
												<td> ".$row['comp_prediction']." | ".$row['comp_score_prediction']." </td>
												<td> ". $row['comp_result'] ." [". $row['comp_result_score'] ."]   </td> 
												<td> 
												  
													<a href='#' rel=' ". $row['comp_ID'] ."' class='add_result'>Update</a>
												</td>
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

	<script>
	$(function(){ 
		$("[data-toggle='tooltip']").tooltip();

	});
</script>
<script> 
	$(function(){ 
		
		$('.searchcelebp').click(function(e) {
		    const searchparam = $('.searchparam1').val();
		    window.location.href='/admin/predictions/view?search=' + searchparam;
		    e.preventDefault();
		});
		 $(document).on('keypress',function(e) {
		    const searchparam = $('.searchparam1').val();
            if(e.which == 13) {
                if ( searchparam != '')
		    window.location.href='/admin/predictions/view?search=' + searchparam;
            }
        });

		$("[data-toggle='tooltip']").tooltip();

	});
</script>

	 <!-- Custom JS -->
	 
    </body>
</html>