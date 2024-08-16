
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
						    <?php  //print_r($this->jobs) ?>
                                <div class="table-title">
                                    <div class="row">
                                        <div class="col-sm-2"> 
                                            <a href="/admin/jobs/new" rel='<?php echo isset($this->review) ? 'true' : 'false' ?>' class="btn btn-success getcelerev"><i class="fa fa-plus-circle"></i> <span>New</span></a>
                                        </div> 
                                    </div>
                                </div> 

								<table class="table table-striped table-hover table-responsive <?php echo empty($this->jobs) ? "hidden" : ""; ?>">
								<thead>
									<tr>
										<th>#</th>
                                        <th>Title&nbsp; <span class='feedbck'></span> </th>
										<th>By&nbsp;&nbsp;</th>
										<th>Date  </th>
										<th>Pic&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th> 
										<th>Action&nbsp;&nbsp;</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>#</th>
                                        <th>Title&nbsp; <span class='feedbck'></span> </th>
										<th>By&nbsp;&nbsp;</th>
										<th>Date  </th>
										<th>Pic&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th> 
										<th>Action&nbsp;&nbsp;</th>
									</tr>
								</tfoot>
								<tbody>
									<?php 
								//	$this->getCurrentSubmissions($contest['cq_int_ID']) 
											$i = 0; 
											foreach($this->jobs as $row) { 
											$i++;	  
											echo "
											<tr  >
												<td>$i</td>
												<td><a target='_blank' href='/jobs/view/". $row['job_url'] ."'> ".  $row['job_title'] ."</a> ".$row['job_views']."</td>
												<td> ". explode(' ', $row['user_names'])[0] ."  </td>
												<td> ". date('d.m.y', $row['job_date_posted']) ." </td>
												<td> <img src='/public/assets/uploads/{$row['image_name']}' style='height:40px; width:50px'></td> 
												<td> 
												<a href='/admin/jobs/edit?id=".$row['job_ID']."' rel='".$row['job_ID']."' class='peditaceleb1'> <i class='fa fa-pencil-square-o' title='Edit' data-toggle='tooltip'></i></a>
											 
													<a href='#' rel=' ". $row['job_ID'] ."' class='trash_job' action='content'><i class='fa fa-trash' title='Delete' data-toggle='tooltip'></i></a>
												</td>
											</tr>";
											}
									?>
																
								</tbody>
							</table>	
							<div class="clearfix <?php echo empty($this->celebs) ? "hidden" : ""; ?>">
                                <ul class="pagination table-responsive">
                                    <li class="page-item ">
                                        <?php
                                            
                                            $country = '';
                                            if (isset($_GET['country'])  ) $country = "?country=". $_GET['country'];
                                        
                                            $pre_num = isset($this->currentpage) ? $this->currentpage - 1 : null;
                                            if ($pre_num <= 0) {
                                                $pre_num = 1;
                                            }
                                        ?>
                                        <a href='/admin/celebs/view/<?php echo $pre_num . $country; ?>' class="page-link">Previous</a>
                                    </li>
                                    <?php
                                        $total = 30;
                                        $upperLimt = ceil($this->numrows / $total);
                                        $last = isset($this->currentpage) ? $this->currentpage : 1;
                                        $next = isset($this->currentpage) ? $this->currentpage + 1 : 2 ;
                                        $notAllowed = (($upperLimt == $last) || ($upperLimt < $last)) ? "notAllowed" : null;
                                           
                                    for($currentPage = 1; $currentPage <= ceil($this->numrows / $total); $currentPage++){
                                        echo"
                                        <li class='page-item'><a href='/admin/celebs/view/$currentPage{$country}' class='page-link'> $currentPage </a></li>";
                                    }?>
                                    
                                    <li class="page-item"><a href='/admin/celebs/view/<?php echo $next.$country; ?>' class="page-link <?php echo $notAllowed; ?>">Next</a></li>
                                </ul>
                            </div>
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

	 <!-- Custom JS -->
	 
    </body>
</html>