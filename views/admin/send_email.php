
<!DOCTYPE html>
<html lang="en">

    <head>
        <?php require 'views/dashboard/includes/header.php'; ?>
    </head>

    <body class="sb-nav-fixed">
		<!-- Main Modal -->
		

		<!-- Preloader area start -->
		<!--<div id="preloader"></div>-->
		<!-- Preloader area end -->

		<?php require 'views/dashboard/includes/head2.php'; ?>

		<div id="layoutSidenav" class="container-fluid d-flex align-items-stretch">
		    
		  <?php require 'views/dashboard/includes/sidebar.php'; ?>

			<div id="layoutSidenav_content">

				<main>
			
			
				 
	  <!----------------------------->

                    <div class="mt-2">
                        <h4 class="h6 text-center"> Send Email </h4>
                        
                        <form action="" id="sendNewEmail">
                             <div class="row"> 
        						<div class="col-md-12">  
                                    <div class="form-group">
                                        <label>Email [Write as many separated by commas]</label>
        								<input  type="email" name='email' class='form-control' value="<?php echo $_GET['email'] ?? '' ?>"  ><br>
        								
                                        <label>Email Subject</label>
        								<input  type="text" name='subject' class='form-control'   ><br>
        								
        								<label class="control-label">Email Body</label>
        								<textarea  class="form-control " id="editorck"  ></textarea><br>
        								
                                        <label>Attach Files [Optional]</label>
        								<input  type="file" name='file[]' class='form-control'   ><br>
        							</div> 
        							  
        							<!------------------------------------------> 
        							<hr>
        					    
        							<div class="form-group"> 
        								<button type='submit' class="submitterms btn btn_blend btn-block">Submit Now</button>
        							</div>
                                    <div class="alert mt-2 fdback"></div>
        							<!------------------------------------------> 
        						</div>
 
					        </div>
                     
                        </form>
                    </div>
                          <!----------------------------->
				</main>

			</div>	<!--End layoutSidenav_content-->
		</div> <!--End layoutSidenav-->

	    <?php require ROOT . 'views/admin/includes/footer.php'; ?>
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.8.0/ckeditor.js"></script> 
    <script type="text/javascript">
     
        //<![CDATA[
        CKEDITOR.replace( 'editorck');
        //]]>
    </script>

	 <!-- Custom JS -->
	 
    </body>
</html>