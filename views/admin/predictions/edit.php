
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
                                <h4 class="h6 text-center"> Edit Predictions  </h4>
                                <form action="" method="post" id="edit_predictions">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label>Home Team</label>
                                                <input type="hidden" name="id"  value="<?php echo $this->prediction['comp_ID'] ?>" > 
                                                <input type="text" name="team1" class="title form-control " required value="<?php echo $this->prediction['comp_team_a'] ?>" >                                            
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>Away Team</label>
                                                <input type="text" name="team2" class="title form-control celebstagename" value="<?php echo $this->prediction['comp_team_b'] ?>"  required>                                            
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>Compeition</label>
                                                <input type="text" name="competition" class="  form-control  " required value="<?php echo $this->prediction['com_name'] ?>" >                                           
                                            </div>
                                             
                                            <div class="col-md-6 mb-3">
                                                <label>Match date</label>
                                                <input type="date" name="date" class="  form-control" required  value="<?php echo $this->prediction['comp_date'] ?>" >                                            
                                            </div>
                                         
                                           
                                            <!---------------------------------------------------->
                                                  
                                            
                                            <div class="col-md-12 mb-3">
                                                <label>Detailed analysis <a href='#uploadimg' data-toggle='modal' classs='uploadimg'>Upload Img</a>
                                                <span class='similarcopy'>[similarposts]</span></label>
                                                <textarea name="story_post1" class="form-control " id="editorck" required><?php echo $this->prediction['comp_narration'] ?></textarea>
                                            </div>
                                           
                                             
                                            <div class="col-md-12">
                                                <input type="submit" value="Submit" name='submit' class="form-control btn btn-primary">
                                            </div>
                                        </div>
                                    </div>
                                </form> <div class='m-3'>
                         <button class='btn btn-primary btn_xml'>Regenerate XML</button>
                     </div>
</div>
	  <!----------------------------->
	  
 

 
				</main>

			</div>	<!--End layoutSidenav_content-->
		</div> <!--End layoutSidenav-->

	    <?php require ROOT . 'views/admin/includes/footer.php'; ?>
 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.8.0/ckeditor.js"></script> 
        <script type="text/javascript">
         
            
            $(function() {
                CKEDITOR.instances.editorck.on('key', function(e) {
                    const editortext = this.getData().split(' ');
                    $('.wordcount').text(editortext.length);
                });
            });
            
            
         
            //<![CDATA[
            CKEDITOR.replace( 'editorck');
            //]]>
        </script>
        <script>
    $(function(){ 
        
         
		
        $('#categoriesSel').addClass('limitedNumbSelect2');
        
		      $(".limitedNumbSelect2").
		      select2({
                maximumSelectionLength: 2, 
                //placeholder: "Start typing name to select"
              
            });
        
       
      
    })
</script>

	 <!-- Custom JS -->
	 
    </body>
</html>