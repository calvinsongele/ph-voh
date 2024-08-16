
<!DOCTYPE html>
<html lang="en">

    <head>
        <?php require 'views/admin/includes/header.php'; ?>
        
    </head>

    <body class="sb-nav-fixed">
		<!-- Main Modal -->
		

		<!-- Preloader area start -->
		<!--<div id="preloader"></div>-->
		<!-- Preloader area end -->

		<?php require 'views/admin/includes/head2.php'; ?>

		<div id="layoutSidenav" class="container-fluid d-flex align-items-stretch">
		    
		  <?php require 'views/admin/includes/sidebar.php'; ?>

			<div id="layoutSidenav_content">

				<main>
			
			
				 
	  <!----------------------------->
	  
<div class="mt-2">
                    <h4 class="h6 text-center"> A new Prediction </h4>
    
                                <form action="" method="post" id="new_ad">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label>Title</label>
                                                <input type="text" name="title" class=" form-control "  required placeholder='' >         
                                                
                                            </div>
                                          
                                            <div class="col-md-6 mb-3"> 
                                                <label>Type</label>
                                                <select type="text" name="type" class="  form-control" required>  
                                                    <option value=''>Empty</option>
                                                    <option value='top'>Top</option> 
                                                    <option value='footer'>Footer</option> 
                                                </select>
                                            </div>   
                                            
                                           
                                            <div class="col-md-12 mb-3"> 
                                                <label>Ad</label>
                                                <textarea type="text" name="ad" rows='6' class="  form-control" required></textarea>
                                            </div>   
                                             
                                           
                                             
                                            <div class="col-md-12">
                                                <input type="submit" value="Submit" name='submit' class="form-control btn btn-primary">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                
                                <div class='alert shadow table-responsive'>
                                    <table class='table table-striped table-hover'>
                                        <thead>
                                            <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Code</th> 
                                            <th>Type</th> 
                                            <th>Status</th> 
                                            <th>Date</th> 
                                            <th>Actions</th> 
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=0;  foreach($this->ads as $row) { $i++; ?>
                                            <tr>
                                                <td><?php echo $i ?></td>
                                                <td><?php echo $row['ad_title'] ?></td>
                                                <td style='font-size:13px; overflow:auto padding:5px;background:white;'><code><?php echo str_replace('<', '&lt;',$row['ad_code']) ?></code></td>
                                                <td><?php echo $row['ad_type'] ?></td>
                                                <td><?php echo $row['ad_status'] ?></td>
                                                <td><?php echo date('d.m.y',$row['ad_date']) ?></td>
                                                <td> 
                                                    <a href='#' rel='<?php echo $row['ad_ID'] ?>' class='badge badge-danger deletead'>Delete</a>
                                                    <a href='#' rel='<?php echo $row['ad_ID'] ?>' status='Active' class='badge badge-success updatead'>Activate</a>
                                                    <a href='#' rel='<?php echo $row['ad_ID'] ?>' status='Pause' class='badge badge-warning updatead'>Pause</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
</div>
	  <!----------------------------->
	  
 

 
				</main>

			</div>	<!--End layoutSidenav_content-->
		</div> <!--End layoutSidenav-->

	    <?php require ROOT . 'views/admin/includes/footer.php'; ?>
  

	 <!-- Custom JS -->
	 
    </body>
</html>
 