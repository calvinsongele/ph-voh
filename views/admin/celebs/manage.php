
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
						    <?php echo "Total: {$this->numrows} | Unpublished: {$this->rows}" ?>
                                <div class="table-title">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <!--h5 class="" id="currentcontest"><?php //echo count($this->celebs);?> Total Celebs</h5-->
                                            <a href="/admin/celebs/new" rel='<?php echo isset($this->review) ? 'true' : 'false' ?>' class="btn btn-success getcelerev"><i class="fa fa-plus-circle"></i> <span>New</span></a>
                                        </div>
                                        <div class="col-sm-4">
                                            <input class='searchparam' placeholder='Search here' value='<?php echo $_GET['search'] ?? '' ;?>' title='Search with real names or stage name' ><button class='searchceleb'  title='Search'> <i class='fa fa-search'></i> </button>					
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $this->avgdata ?>		
                                            <!--<div class="btn-group btngroup1 ">-->
                                            <!--    <label class="btn btn-info font_sm" >-->
                                            <!--        <input type="radio" name="status" value="all"  checked="checked"> All-->
                                            <!--    </label>-->
                                            <!--    <label class="btn btn-success font_sm">-->
                                            <!--        <input type="radio" name="status" value="modestarandia@gmail.com" > Mod-->
                                            <!--    </label>-->
                                            <!--    <label class="btn btn-warning font_sm">-->
                                            <!--        <input type="radio" name="status" value="missmuriithiframes2020@gmail.com"> Eve-->
                                            <!--    </label>-->
                                            <!--    <label class="btn btn-danger font_sm">-->
                                            <!--        <input type="radio" name="status" value="benjaminmutuva@gmail.com"> Ben-->
                                            <!--    </label>-->
                                            <!--    <label class="btn btn-secondary font_sm">-->
                                            <!--        <input type="radio" name="status" value="calvinsongele@gmail.com"> C-->
                                            <!--    </label>-->
                                                							
                                            <!--</div>-->
                                        
                                        </div>
                                    </div>
                                </div> 

								<table class="table table-striped table-hover table-responsive <?php echo empty($this->celebs) ? "hidden" : ""; ?>">
								<thead>
									<tr>
										<th>#</th>
                                        <th>Stage&nbsp;Name <span class='feedbck'></span> </th>
										<th>By&nbsp;&nbsp;</th>
										<th>Date <?php echo $this->rows  ?></th>
										<th>Pic&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
										<th>Latest&nbsp;Post</th>
										<th>Action&nbsp;&nbsp;</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
                                        <th>#</th>
                                        <th>Stage&nbsp;Name</th>
										<th>By&nbsp;&nbsp;</th>
										<th>Date&nbsp;</th>
										<th>Pic&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
										<th>Latest&nbsp;Post</th>
										<th>Action&nbsp;&nbsp;</th>
									</tr>
								</tfoot>
								<tbody>
									<?php 
								//	$this->getCurrentSubmissions($contest['cq_int_ID']) 
											$i = 0;
											$thistype = $this->type;
											foreach($this->celebs as $row) { 
											$i++;	
											$title = empty($row['c_stagename']) ? $row['c_url'] : $row['c_stagename'];
											$id = 'id_'. $row['c_ID'];
											echo "
											<tr data-status='". $row['user_email'] ."' id='$id' >
												<td>$i</td>
												<td><a target='_blank' href='/celebs/bio/". $row['c_url'] ."'> ".  $title ."</a> ".$row['c_popularity']."</td>
												<td> ". explode(' ', $row['user_names'])[0] ."  </td>
												<td> ". date('Y-m-d', $row['c_date']) ." </td>
												<td> <img src='/public/assets/uploads/{$row['image_name']}' style='height:40px; width:50px'></td>
												<td> <span class='badge badge-sm badge-primary add_updates' rel=' ". $row['c_ID'] ."'> <i class='fa fa-plus' title='Add content' data-toggle='tooltip'></i> </span> </td>
												<td> 
												<a href='/admin/celebs/edit?type=$thistype&id=".$row['c_ID']."' rel='".$row['c_ID']."' class='peditaceleb1'> <i class='fa fa-pencil-square-o' title='Edit' data-toggle='tooltip'></i></a>
												<!--a target='_blank' href='/media/post/". $row['c_url'] ." '> <i class='fa fa-eye' title='View' data-toggle='tooltip'></i></a--> 
													<a href='' rel=' ". $row['c_ID'] ."' class='trash_celeb' action='$thistype'><i class='fa fa-trash' title='Delete' data-toggle='tooltip'></i></a>
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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.8.0/ckeditor.js"></script> 
<script>
 //<![CDATA[
     CKEDITOR.replace( 'markdownid');
    //]]>
	$(function(){ 
		
		$('.searchceleb').click(function(e) {
		    const searchparam = $('.searchparam').val();
		    window.location.href='/admin/celebs/view?search=' + searchparam;
		    e.preventDefault();
		});
		 $(document).on('keypress',function(e) {
		    const searchparam = $('.searchparam').val();
            if(e.which == 13) {
                if ( searchparam != '')
		    window.location.href='/admin/celebs/view?search=' + searchparam;
            }
        });

		$("[data-toggle='tooltip']").tooltip();

	});
</script>

	 <!-- Custom JS -->
	 
    </body>
</html>