
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
                    <h4 class="h6 text-center"> A new Celeb </h4>
    
                                <form action="" method="post" id="new_celeb">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label>Celeb real name</label>
                                                <input type="text" name="realname" class="title form-control " required >                                            
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>Celeb stage name</label>
                                                <input type="text" name="stagename" class="title form-control celebstagename" required>                                            
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>Celeb gender</label>
                                                <select type="text" name="gender" class="title form-control" required> 
                                                    <option value="" hidden>Select gender</option>
                                                    <option value="Male" >Male</option>
                                                    <option value="Female" >Female</option>
                                                    <option value="Group" >Group</option>
                                                </select>                                          
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>Celeb youtube channel</label>
                                                <input type="text" name="ytchannel" class="title form-control">                                            
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>Socials| <span style='font-size:10px!important;' class='alert-danger'>Coma seperated links in this order IG,FB,TW,Tiktok</span></label>
                                                <input type="text" name="socials" class="title form-control" maxlength="900" value='null,null,null,null'>                                            
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>Celeb website</label>
                                                <input type="text" name="website" class="title form-control">                                            
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>Celeb date of birth</label>
                                                <input type="date" name="dob" class="title form-control" required>                                            
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class='row'>
                                                    
                                                    <div class="col-md-6 mb-3">
                                                        <label>Country</label>
                                                        <select type="text" name="country" class="country form-control limitedNumbSelect2" required> 
                                                            <option value="" hidden>Select Country</option>
                                                            <?php
                                                                $countries = json_decode(file_get_contents('public/assets/countries.json'), true);
                                                                foreach ($countries as $row) { 
                                                                    echo "  <option value='{$row['name']}' >{$row['name']}</option>";
                                                                } 
                                                            ?>
                                                        </select>                                           
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label>Nationality ie British</label>
                                                        <input type="text" name="nationality" class="title form-control" required>                                              
                                                    </div>
                                                </div>                                         
                                            </div>
                                            <!---------------------------------------------------->
                                            <div class="col-md-6 mb-3">
                                                <label>Education</label>
                                                <input type="text" name="education" class="education form-control">                                            
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>Celeb Tribe</label>
                                                <input type="text" name="tribe" class="tribe form-control" required>                                            
                                            </div>
                                            <!---------------------------------------------------->
                                              <!---------------------------------------------------->
                                            <div class="col-md-6 mb-3">
                                                <label>Religion</label>
                                                <select type="text" name="religion" class="religion form-control" required>
                                                    <option value='Christianity'> Christianity </option>
                                                    <option value='Islam'> Islam </option>
                                                    <option value='Hindu'> Hindu </option>
                                                    <option value='Budhism'> Budhism </option>
                                                    <option value='Other'> Other </option>
                                                </select>                                           
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>Celeb Networth</label>
                                                <input type="text" name="networth" class="networth form-control" required>                                            
                                            </div>
                                            <!---------------------------------------------------->                                 
                                            
                                            <div class="col-md-6 mb-3">     
                                                <input type='hidden' value="" name='imageid' class='imageid'>
                                                <label >Image (Preferably min width:900px) <img class='previmgx' src='' style='height:20px; width:40px;'> </label> <br>
                                                <button type="button" class="form-control form_control_sm upload_img_btn" style="min-width:100%;"   >Open File Center</button>
                                            </div>
                                            
                                            <div class="col-md-6 mb-3">
                                                <label>Celeb Category (<a href="#addNewCelebCategory" data-toggle="modal">add new</a>) <span title='Copy this tag to get read more within your article'></span> </label>                                               
                                                <select type="text" name="category" class="category form-control" id="categoriesSel" required>  
                                                    <option value="" hidden>Select category</option>
                                                    <?php 
                                                        foreach($this->getCategories as $cat) {
                                                            echo "<option value='".$cat['type_ID'] ."'>". $cat['type_name'] ."</option>";
                                                        }
                                                    ?>                                                    
                                                </select>                                          
                                            </div> 
                                            <div id="addnewpost_reply"></div>
                                            <div class="col-md-12 mb-3">
                                                <label>Description  
                                                <span class='similarcopy'>[more_celebs]</span>
                                                </label>
                                                <textarea name="story_post1" class="form-control " id="editorck" required></textarea>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class='row'>
                                                    <div class='col-md-12'>
                                                        <label>A short summary |  <span class='btn-danger'><small class='counter'></small> Chars</span> (maximum 165 chars)</label>
                                                        <textarea name="cont_description" maxlength='165' class="cont_description form-control " required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class='row'>
                                                    <div class='col-md-12'>
                                                        <label>Keywords  (comma seperated keywords)</label>
                                                        <input name="c_keywords"   class=" form-control " > 
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                Send mass email? <input type='checkbox' name='sendmails' value='send' > <br>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="submit" value="Submit" name='submit' class="form-control btn btn-primary">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                 <div class='m-3'>
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

	 <!-- Custom JS -->
	 
    </body>
</html>
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