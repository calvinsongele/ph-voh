
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
                                        <div class="col-sm-4">
                                            <h5 class="getcelerev" id="currentcontest"><?php echo count($this->content);?> Total Content adm</h5>
                                        </div>
                                        <div class="col-sm-2">
                                            <!--a href="/admin/celebs" class="btn btn-success font_sm"><i class="fa fa-plus-circle font_sm"></i> <span class='font_sm'>New Record</span></a-->				
                                        </div>
                                        <!--<div class="col-sm-6">		-->
                                        <!--    <div class="btn-group btngroup1 ">-->
                                        <!--        <label class="btn btn-info font_sm" >-->
                                        <!--            <input type="radio" name="status" value="all"  checked="checked"> All-->
                                        <!--        </label>-->
                                        <!--        <label class="btn btn-success font_sm">-->
                                        <!--            <input type="radio" name="status" value="modestarandia@gmail.com" > Mod-->
                                        <!--        </label>-->
                                        <!--        <label class="btn btn-warning font_sm">-->
                                        <!--            <input type="radio" name="status" value="missmuriithiframes2020@gmail.com"> Eve-->
                                        <!--        </label>-->
                                        <!--        <label class="btn btn-danger font_sm">-->
                                        <!--            <input type="radio" name="status" value="benjaminmutuva@gmail.com"> Ben-->
                                        <!--        </label>-->
                                        <!--        <label class="btn btn-secondary font_sm">-->
                                        <!--            <input type="radio" name="status" value="calvinsongele@gmail.com"> Cal-->
                                        <!--        </label>-->
                                                							
                                        <!--    </div>-->
                                        
                                        <!--</div>-->
                                    </div>
                                </div> 

								<table class="table table-striped table-hover table-responsive <?php echo empty($this->content) ? "hidden" : ""; ?>">
								<thead>
									<tr>
										<th>#</th>
                                        <th>Stage&nbsp;Name</th>
										<th>By</th>
										<th>Title</th>
										<th>Date </th>
										<th>View&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
										<th>Action&nbsp;&nbsp;</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
                                        <th>#</th>
                                        <th>Stage&nbsp;Name</th>
										<th>By</th>
										<th>Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
										<th>Date </th>
										<th>View&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
										<th>Action&nbsp;&nbsp;</th>
									</tr>
								</tfoot>
								<tbody>
									<?php  
											$i = 0;
											foreach($this->content as $row) {
											$i++;	
											echo "
											<tr data-status='". $row['user_email'] ."' style='font-size:15px;' >
												<td>$i</td>
												<td>". $row['c_stagename'] ."</td>
												<td>". explode(' ', $row['user_names'])[0] ."</td>
												<td> ". CustomFunctions::trimTitle($row['c_content_title'], 6) ."  </td>
												<td> ". str_replace('-', '.',$row['c_date_updated']) ." </td>
													<td> <a target='_blank' href='/celebs/video/". $row['c_url'] ."/".$row['c_browser_link']."'>View ". explode(' ', $row['c_content_title'])[0] ."</a></td>
											 
														<td> 
											<a href='#' rel='".$row['cc_ID']."' class='editarcontent'> <i class='fa fa-plus' title='Edit' data-toggle='tooltip'></i></a>
												<!--a target='_blank' href='/media/post/". $row['c_url'] ." '> <i class='fa fa-eye' title='View' data-toggle='tooltip'></i></a--> 
													<a href='' rel=' ". $row['cc_ID'] ."' class='trash_celeb' action='celeb'><i class='fa fa-trash' title='Delete' data-toggle='tooltip'></i></a>
												</td>
												
												
											</tr>";
											}
											
								 
									?>
																
								</tbody>
							</table>	
							<div class="clearfix <?php echo empty($this->content) ? "hidden" : ""; ?>">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <?php
                                            $pre_num = isset($this->currentpage) ? $this->currentpage - 1 : null;
                                            if ($pre_num <= 0) {
                                                $pre_num = 1;
                                            }
                                        ?>
                                        <a href='/admin/celebs/content/<?php echo $pre_num; ?>' class="page-link">Previous</a>
                                    </li>
                                    <?php
                                        $total = 30;
                                        $upperLimt = ceil($this->numrows / $total);
                                        $last = isset($this->currentpage) ? $this->currentpage : 1;
                                        $next = isset($this->currentpage) ? $this->currentpage + 1 : 2 ;
                                        $notAllowed = (($upperLimt == $last) || ($upperLimt < $last)) ? "notAllowed" : null;
                                           
                                    for($currentPage = 1; $currentPage <= ceil($this->numrows / $total); $currentPage++){
                                        echo"
                                        <!--li class='page-item'><a href='/admin/celebs/content/$currentPage' class='page-link'> $currentPage </a></li-->";
                                    }?>
                                    
                                    <li class="page-item"><a href='/admin/celebs/content/<?php echo $next; ?>' class="page-link <?php echo $notAllowed; ?>">Next</a></li>
                                </ul>
                            </div>
						</div>
	</div>
				</main>

			</div>	<!--End layoutSidenav_content-->
		</div> <!--End layoutSidenav-->

	    <?php require ROOT . 'views/admin/includes/footer.php'; ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.8.0/ckeditor.js"></script> 
<script>
 //<![CDATA[
     CKEDITOR.replace( 'markdownid2');
    //]]>
	$(function(){ 
		 

	});
</script>

	 <!-- Custom JS -->
	 
    </body>
</html>