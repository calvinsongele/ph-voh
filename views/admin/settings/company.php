
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
				<h4 class="header-title">About the Company</h4>
                <style>  .d {  color:red; font-size:14px; font-style:italic;  } </style>
                <!-- <small class="d">Marked with red stars can only be edited by the HR.</small> -->
			</div>
			<div class="card-body">
			    <form method="post" class="validate" autocomplete="off" id="editabout" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="OczKU8aDJfcjYzvNjkuOdWZEZBGT4o4VBL5xCUS3">
					<div class="row">
					 

						    <div class="col-md-6"> 
                            
    							<div class="form-group">
    								<label class="control-label">Company Title   </label>
    								<input  class="form-control cdata" rel='c_name' value="<?php echo $this->_company['c_name'] ?>"><span class="c_name"></span>
    							</div>
							</div>
							<!------------------------------------------>
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Company email</label>
								<input type='email' class="form-control cdata"   rel='c_email' value="<?php echo $this->_company['c_email'] ?>"><span class="c_email"></span>
							</div>
							<!------------------------------------------>
							</div>
							<hr>
							<div class="col-md-6">
    							<div class="form-group">
    								<label class="control-label">Company phone</label>
    								<input type="tel" class="form-control cdata" rel='c_tel' value="<?php echo $this->_company['c_tel'] ?>"><span class="c_tel"></span>
    							</div>
							</div>
							<!------------------------------------------> 
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Company Address </label>
								<input type='text' class="form-control cdata"  rel='c_address' value="<?php echo $this->_company['c_address'] ?>"><span class="c_address"></span>
							</div>
							</div>
							<!------------------------------------------>  
							 
							<hr>
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Company Short description </label>
								<input type='text' class="form-control cdata"  rel='c_short_desc' value="<?php echo $this->_company['c_short_desc'] ?>"><span class="c_short_desc"></span>
							</div>
							</div>
							<!------------------------------------------> 
							<hr>
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Company Facebook link </label>
								<input type='url' class="form-control cdata"  rel='c_facebook' value="<?php echo $this->_company['c_facebook'] ?>"><span class="c_facebook"></span>
							</div>
							</div>
							<!------------------------------------------>
							<hr>
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Company Twitter link </label>
								<input type='url' class="form-control cdata"  rel='c_twitter' value="<?php echo $this->_company['c_twitter'] ?>"><span class="c_twitter"></span>
							</div>
							</div>
							<!------------------------------------------>
							<hr>
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Company Instagram link </label>
								<input type='url' class="form-control cdata"  rel='c_instagram' value="<?php echo $this->_company['c_instagram'] ?>"><span class="c_instagram"></span>
							</div>
							</div>
							<!------------------------------------------>
							<hr>
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Company Youtube link </label>
								<input type='url' class="form-control cdata"  rel='c_youtube' value="<?php echo $this->_company['c_youtube'] ?>"><span class="c_youtube"></span>
							</div>
						    </div> 
							<!------------------------------------------>
							<hr> 
						    <div class="col-md-6  ">     
                                <input type='hidden' value="<?php echo $this->_company['c_logo'] ?>" name='imageid' rel='c_logo' class='imageid cdata'>
                                <label >Change Company Logo <img class='previmgx' src='/public/assets/uploads/<?php echo $this->_company['image_name'] ?>' style='height:20px; width:40px;'> </label> <br>
                                <button type="button"  class="form-control form_control_sm upload_img_btn" style="min-width:100%;"   >Open File Center</button><span class="c_logo"></span>
                            </div>
							 
							<!------------------------------------------>
							<hr>
							<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">Change font <span title='Fonts are picked in multiples; if the first is not supported by the browser, the next is automatically picked.'>[hover for hint]</span> </label>
								<select class="form-control cdata"  rel='c_font' value="<?php echo $this->_company['c_font'] ?>">
								    
								    
		<option value='' disabled style='background:rgb(34, 168, 255);color:white;'>Below are 'sans-serif': normal fonts without serifs.</option>
		<hr style='color:grey;background:grey;border:2px solid grey;'>
		<option value='"Arial", sans-serif' <?php echo $this->_company['c_font'] == '"Arial", sans-serif' ? 'selected' : '' ?> >Arial, sans-serif</option>
		<option value='"Helvetica", sans-serif' <?php echo $this->_company['c_font'] == '"Helvetica", sans-serif' ? 'selected': '' ?> >Helvetica, sans-serif</option>
		<option value='"Verdana", sans-serif' <?php echo $this->_company['c_font'] == '"Verdana", sans-serif' ? 'selected': '' ?> >Verdana, sans-serif</option>
		<option value='"Trebuchet MS", sans-serif' <?php echo $this->_company['c_font'] == '"Trebuchet MS", sans-serif' ? 'selected': '' ?> >Trebuchet MS, sans-serif</option>
		<option value='"Gill Sans", sans-serif' <?php echo $this->_company['c_font'] == '"Gill Sans", sans-serif' ? 'selected': '' ?> >Gill Sans, sans-serif</option>
		<option value='"Noto Sans", sans-serif' <?php echo $this->_company['c_font'] == '"Noto Sans", sans-serif' ? 'selected': '' ?> >Noto Sans, sans-serif</option>
		<option value='"Avantgarde, TeX Gyre Adventor, URW Gothic L", sans-serif' <?php echo $this->_company['c_font'] == '"Avantgarde, TeX Gyre Adventor, URW Gothic L", sans-serif' ? 'selected': '' ?> >Avantgarde, TeX Gyre Adventor, URW Gothic L, sans-serif</option>
		<option value='"Optima", sans-serif' <?php echo $this->_company['c_font'] == '"Optima", sans-serif' ? 'selected': '' ?> >Optima, sans-serif</option>
		<option value='"Arial Narrow", sans-serif' <?php echo $this->_company['c_font'] == '"Arial Narrow", sans-serif' ? 'selected': '' ?> >Arial Narrow, sans-serif</option>
		
		
		<option value='' disabled style='background:rgb(34, 168, 255);color:white;'>Below are 'serif': normal fonts with serifs.</option>
		<hr style='color:grey;background:grey;border:2px solid grey;'>
		<option value='"Times, Times New Roman", serif' <?php echo $this->_company['c_font'] == '"Times, Times New Roman", serif' ? 'selected': '' ?> >Times, Times New Roman, serif</option>
		<option value='"Didot", serif' <?php echo $this->_company['c_font'] == '"Didot", serif' ? 'selected': '' ?> >Didot, serif</option>
		<option value='"Georgia", serif' <?php echo $this->_company['c_font'] == '"Georgia", serif' ? 'selected': '' ?> >Georgia, serif</option>
		<option value='"Palatino, URW Palladio L", serif' <?php echo $this->_company['c_font'] == '"Palatino, URW Palladio L", serif' ? 'selected': '' ?> >Palatino, URW Palladio L, serif</option>
		<option value='"Bookman, URW Bookman L", serif' <?php echo $this->_company['c_font'] == '"Bookman, URW Bookman L", serif' ? 'selected': '' ?> >Bookman, URW Bookman L, serif</option>
		<option value='"New Century Schoolbook, TeX Gyre Schola", serif' <?php echo $this->_company['c_font'] == '"New Century Schoolbook, TeX Gyre Schola", serif' ? 'selected': '' ?> >New Century Schoolbook, TeX Gyre Schola, serif</option>
		<option value='"American Typewriter", serif' <?php echo $this->_company['c_font'] == '"American Typewriter", serif' ? 'selected': '' ?> >American Typewriter, serif</option>
		
		
		
		<option value='' disabled style='background:rgb(34, 168, 255);color:white;'>Below are 'monospace': fixed-width fonts.</option>
		<hr style='color:grey;background:grey;border:2px solid grey;'>
		<option value='"Andale Mono", monospace' <?php echo $this->_company['c_font'] == '"Andale Mono", monospace' ? 'selected': '' ?> >Andale Mono, monospace</option>
		<option value='"Courier New", monospace' <?php echo $this->_company['c_font'] == '"Courier New", monospace' ? 'selected': '' ?> >Courier New, monospace</option>
		<option value='"Courier", monospace' <?php echo $this->_company['c_font'] == '"Courier", monospace' ? 'selected': '' ?> >Courier, monospace</option>
		<option value='"FreeMono", monospace' <?php echo $this->_company['c_font'] == '"FreeMono", monospace' ? 'selected': '' ?> >FreeMono, monospace</option>
		<option value='"OCR A Std", monospace' <?php echo $this->_company['c_font'] == '"OCR A Std", monospace' ? 'selected': '' ?> >OCR A Std, monospace</option>
		<option value='"DejaVu Sans Mono", monospace' <?php echo $this->_company['c_font'] == '"DejaVu Sans Mono", monospace' ? 'selected': '' ?> >DejaVu Sans Mono, monospace</option>
		
		
		<option value='' disabled style='background:rgb(34, 168, 255);color:white;'>Below are 'cursive': fonts that emulate handwriting.</option>
		<hr style='color:grey;background:grey;border:2px solid grey;'>
		
		<option value='"Comic Sans MS, Comic Sans", cursive' <?php echo $this->_company['c_font'] == '"Arial", cursive' ? 'selected': '' ?> >Comic Sans MS, Comic Sans, cursive</option>
		<option value='"Apple Chancery", cursive' <?php echo $this->_company['c_font'] == '"Apple Chancery", cursive' ? 'selected': '' ?> >Apple Chancery, cursive</option>
		<option value='"Bradley Hand", cursive' <?php echo $this->_company['c_font'] == '"Bradley Hand", cursive' ? 'selected': '' ?> >Bradley Hand, cursive</option>
		<option value='"Brush Script MT, Brush Script Std", cursive' <?php echo $this->_company['c_font'] == '"Brush Script MT, Brush Script Std", cursive' ? 'selected': '' ?> >Brush Script MT, Brush Script Std, cursive</option>
		<option value='"Snell Roundhand", cursive' <?php echo $this->_company['c_font'] == '"Snell Roundhand", cursive' ? 'selected': '' ?> >Snell Roundhand, cursive</option>
		<option value='"URW Chancery L", cursive' <?php echo $this->_company['c_font'] == '"URW Chancery L", cursive' ? 'selected': '' ?> >URW Chancery L, cursive</option>
	 
		<option value='' disabled style='background:rgb(34, 168, 255);color:white;'>Below are 'fantasy': decorative fonts, for titles, etc.</option>
		<hr style='color:grey;background:grey;border:2px solid grey;'>
		<option value='"Impact", fantasy' <?php echo $this->_company['c_font'] == '"Impact", fantasy' ? 'selected': '' ?> >Impact, fantasy</option>
		<option value='"Luminari", fantasy' <?php echo $this->_company['c_font'] == '"Luminari", fantasy' ? 'selected': '' ?> >Luminari, fantasy</option>
		<option value='"Chalkduster", fantasy' <?php echo $this->_company['c_font'] == '"Chalkduster", fantasy' ? 'selected': '' ?> >Chalkduster, fantasy</option>
		<option value='"Jazz LET", fantasy' <?php echo $this->_company['c_font'] == '"Jazz LET", fantasy' ? 'selected': '' ?> >Jazz LET, fantasy</option>
		<option value='"Blippo", fantasy' <?php echo $this->_company['c_font'] == '"Blippo", fantasy' ? 'selected': '' ?> >Blippo, fantasy</option>
		<option value='"Stencil Std", fantasy' <?php echo $this->_company['c_font'] == '"Stencil Std", fantasy' ? 'selected': '' ?> >Stencil Std, fantasy</option>
		<option value='"Marker Felt", fantasy' <?php echo $this->_company['c_font'] == '"Marker Felt", fantasy' ? 'selected': '' ?> >Marker Felt, fantasy</option>
		<option value='"Trattatello", fantasy' <?php echo $this->_company['c_font'] == '"Trattatello", fantasy' ? 'selected': '' ?> >Trattatello, fantasy</option>
		
		
		
								</select>
								<span class="c_font"></span>
							</div>
						    </div> 
							<!------------------------------------------>
							<hr>
							<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">Company About-Us </label>
								<textarea  class="form-control cdata"  rel='c_profile' ><?php echo $this->_company['c_profile'] ?></textarea><span class="c_profile"></span>
							</div>
						    </div> 
							<!------------------------------------------>
							<hr>
							<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">Ad click </label>
								<input  class="form-control cdata"  rel='c_clickad' ><?php echo $this->_company['c_clickad'] ?><span class="c_clickad"></span>
							</div>
						    </div> 
							<!------------------------------------------>
						 



						</div>
 
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

				const data = _data(formdata, 'edit-company-1');				
				$('.' + $(this).attr('rel')).html(data['msg']);
		        
		    });
		    
		  

    		"use strict"; 
        })(jQuery);

	 </script>

	 <!-- Custom JS -->
	 
    </body>
</html>