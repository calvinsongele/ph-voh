
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
                    <h4 class="h6 text-center"> A new Job Posting </h4>
    
                                <form action="" method="post" id="new_job">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label>Job Title</label>
                                                <input type="text" name="title" class="title form-control " required >                                            
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
                                                        <label>Town ie Nakuru</label>
                                                        <input type="text" name="town" class="town form-control" required>                                              
                                                    </div>
                                                </div>                                         
                                            </div>
                                            
                                            <div class="col-md-6 mb-3">
                                                <label>Job Category</label>
                                                <select type="text" name="category" class="category form-control" required>  
<option value="accounting-auditing-finance">Accounting, Auditing & Finance</option>
<option value="admin-office">Admin & Office</option>
<option value="building-architecture">Building & Architecture</option>
<option value="community-social-services">Community & Social Services</option>
<option value="consulting-strategy">Consulting & Strategy</option>
<option value="creative-design">Creative & Design</option>
<option value="customer-service-support">Customer Service & Support</option>
<option value="driver-transport-services">Driver & Transport Services</option>
<option value="engineering-technology">Engineering & Technology</option>
<option value="estate-agent-property-management">Estate Agents & Property Management</option>
<option value="farming-agriculture">Farming & Agriculture</option>
<option value="food-services-catering">Food Services & Catering</option>
<option value="health-safety">Health & Safety</option>
<option value="hospitality-leisure">Hospitality & Leisure</option>
<option value="human-resources">Human Resources</option>
<option value="legal-services">Legal Services</option>
<option value="management-business-development">Management & Business Development</option>
<option value="marketing-communications">Marketing & Communications</option>
<option value="medical-pharmaceutical">Medical & Pharmaceutical</option>
<option value="product-project-management">Product & Project Management</option>
<option value="quality-control-assurance">Quality Control & Assurance</option>
<option value="research-teaching-training">Research, Teaching & Training</option>
<option value="sales">Sales</option>
<option value="software-data">Software & Data</option>
<option value="supply-chain-procurement">Supply Chain & Procurement</option>
<option value="trades-services">Trades & Services</option>
                                                </select>                                          
                                            </div>
                                            
                                            <div class="col-md-6 mb-3">
                                                <label>Job Experience Level</label>
                                                <select type="text" name="experience" class="experience form-control" required>  
<option value='Any'>Any Experience Levels</option>
<option value="graduatetrainee">Internship & Graduate</option>
<option value="entrylevel">Entry level</option>
<option value="midlevel">Mid level</option>
<option value="seniorlevel">Senior level</option>
<option value="executivelevel">Executive level</option>
                                                </select>                                          
                                            </div>
                                            <!---------------------------------------------------->
                                            <div class="col-md-6 mb-3">
                                                <label>Education Qualification</label>
                                                <select type="text" name="education" class="education form-control" required>  
<option value='highschool'>High School</option>
<option value="diploma">Diploma</option>
<option value="bachelors">Bachelors</option>
<option value="masters">Masters</option>
<option value="phd">PhD</option> 
                                                </select>                                        
                                            </div>
                                            
                                            <!---------------------------------------------------->
                                            
                                            <div class="col-md-6 mb-3">
                                                <label>Salary Range</label>
                                                <input type="text" name="salary" class="salary form-control" required>                                            
                                            </div>
                                            <!---------------------------------------------------->                                 
                                            
                                            <div class="col-md-6 mb-3">     
                                                <input type='hidden' value="" name='imageid' class='imageid'>
                                                <label >Image (Preferably min width:900px) <img class='previmgx' src='' style='height:20px; width:40px;'> </label> <br>
                                                <button type="button" class="form-control form_control_sm upload_img_btn" style="min-width:100%;"   >Open File Center</button>
                                            </div>
                                             
                                            <!---------------------------------------------------->
                                            
                                            <div class="col-md-6 mb-3">
                                                <label>Application link</label>
                                                <input type="text" name="link" class="link form-control" >                                            
                                            </div>
                                            <div id="addnewpost_reply"></div>
                                            <div class="col-md-12 mb-3">
                                                <label>Description  
                                                <span class='similarcopy'>[more_jobs]</span>
                                                </label>
                                                <textarea name="story_post1" class="form-control " id="editorck" required></textarea>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class='row'>
                                                    <div class='col-md-12'>
                                                        <label>A short summary |  <span class='btn-danger'><small class='counter'></small> Chars</span> (maximum 165 chars)</label>
                                                        <textarea name="summary" maxlength='165' class="summary form-control " required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class='row'>
                                                    <div class='col-md-12'>
                                                        <label>Keywords  (comma seperated keywords)</label>
                                                        <input name="keywords"   class=" form-control " > 
                                                    </div>
                                                </div>
                                            </div>
                                             
                                            <div class="col-md-12">
                                                <input type="submit" value="Submit" name='submit' class="submit_btn form-control btn btn-primary">
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