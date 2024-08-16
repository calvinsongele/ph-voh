
<!DOCTYPE html>
<html lang="en">

    <head>
        <?php require ROOT . 'views/admin/includes/header.php'; ?>
    </head>

    <body class="sb-nav-fixed"> 

		<!-- Preloader area start -->
		<!--<div id="preloader"></div>-->
		<!-- Preloader area end -->

		<?php require ROOT . 'views/admin/includes/head2.php'; ?>

		<div id="layoutSidenav" class="container-fluid d-flex align-items-stretch">
		    
		    
		  <?php require ROOT . 'views/admin/includes/sidebar.php'; ?>

			<div id="layoutSidenav_content">

				<main>
				 

 
<div class="row">
						<div class="col-lg-12">
							<div class="alert alert-success alert-dismissible" id="main_alert" role="alert">
								<button type="button" id="close_alert" class="close">
									<span aria-hidden="true"><i class="icofont-close-line-squared-alt"></i></span>
								</button>
								<span class="msg"></span>
							</div>
						</div>
					</div>

					<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<h4 class="header-title">About Yourself</h4>
                <style>  .d {  color:red; font-size:14px; font-style:italic;  } </style>
                <!-- <small class="d">Marked with red stars can only be edited by the HR.</small> -->
			</div>
			<div class="card-body">
			    <form method="post" class="validate" autocomplete="off" id="editabout" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="OczKU8aDJfcjYzvNjkuOdWZEZBGT4o4VBL5xCUS3">
					<div class="row"> 

							<div class='col-md-12'>
							<div class="form-group">
								<label class="control-label">My name   </label>
								<input  class="form-control cdata" rel='user_names' value="<?php echo $this->me['user_names'] ?>"><span class="user_names"></span>
							</div>
							</div>
							<!------------------------------------------>
							<hr>
							<div class='col-md-12'>
							<div class="form-group">
								<label class="control-label">My email</label>
								<input type='email' class="form-control cdata"   rel='user_email' value="<?php echo $this->me['user_email'] ?>"><span class="user_email"></span>
							</div>
							</div>
							<!------------------------------------------>
							<hr>
							<div class='col-md-12'>
							<div class="form-group">
								<label class="control-label">My phone</label>
								<input type="tel" class="form-control cdata" rel='user_tel' value="<?php echo $this->me['user_tel'] ?>"><span class="user_tel"></span>
							</div> 
							</div>
							<!------------------------------------------>
							<hr>
							<div class='col-md-12'>
							<p class='alert-danger'>Your social media links and about are placed below your blog posts</p>
							</div>
							<hr>
							<div class='col-md-6'>
							    <div class="form-group">
								    <label class="control-label">Your Fb </label>
								    <input type='url' class="form-control cdata"   rel='user_fb' value="<?php echo $this->me['user_fb'] ?>"><span class="user_fb"></span>
							    </div>
							</div>
							<!------------------------------------------>
							<hr>
							<div class='col-md-6'>
							<div class="form-group">
								<label class="control-label">Your Twitter </label>
								<input type='url' class="form-control cdata"   rel='user_tw' value="<?php echo $this->me['user_tw'] ?>"><span class="user_tw"></span>
							</div>
							</div>
							<!------------------------------------------>
							<hr>
							<div class='col-md-6'>
							<div class="form-group">
								<label class="control-label">Your Instagram </label>
								<input type='url' class="form-control cdata"   rel='user_instagram' value="<?php echo $this->me['user_ig'] ?>"><span class="user_ig"></span>
							</div>
							</div>
							<!------------------------------------------>
							<hr> 
						    <div class="col-md-6  ">     
                                <input type='hidden' value="<?php echo $this->me['user_dp'] ?>" name='imageid' rel='user_dp' class='imageid cdata'>
                                <label >Change Company Logo <img class='previmgx' src='/public/assets/uploads/<?php echo $this->me['image_name'] ?>' style='height:20px; width:40px;'> </label> <br>
                                <button type="button"  class="form-control form_control_sm upload_img_btn" style="min-width:100%;"   >Open File Center</button><span class="user_dp"></span>
                            </div>
							<!------------------------------------------>
							<hr>
							<div class='col-md-12'>
							<div class="form-group">
								<label class="control-label">Your Bio </label>
								<textarea type='text' class="form-control cdata"   rel='user_bio' ><?php echo $this->_more['user_bio'] ?></textarea><span class="user_bio"></span>
							</div>
							</div>
							 
							<!------------------------------------------>
 
 
					</div>
			    </form>
			</div>
		</div>
    </div>
</div>
 

		 
	 
				</main>

			</div>	<!--End layoutSidenav_content-->
		</div> <!--End layoutSidenav-->

		<!-- Core Js  -->
	    <?php require ROOT . 'views/admin/includes/footer.php'; ?>

		<script type="text/javascript">
		(function($) {
		    
		 
			$('.cdata').change(function() {  
				let formdata = new FormData();
				formdata.append('value', $(this).val() );
				formdata.append('col', $(this).attr('rel') );

				const data = _data(formdata, 'edituser');				
				$('.' + $(this).attr('rel')).html(data['msg']);
		        
		    })

    		"use strict"; 
        })(jQuery);

	 </script>

	 <!-- Custom JS -->
	 
    </body>
</html>