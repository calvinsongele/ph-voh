
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
                    <h4 class="h6 text-center"> Edit a Job Posting </h4>
    
                                <form action="" method="post" id="edit_job">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label>Job Title</label>
                                                <input type="hidden" name="id" class="  form-control " value="<?php echo $this->job['job_ID'] ?>" required >  
                                                <input type="text" name="title" class="title form-control " value="<?php echo $this->job['job_title'] ?>" required >                                            
                                            </div> 
                                            <div class="col-md-6 mb-3">
                                                <div class='row'>
                                                    
                                                    <div class="col-md-6 mb-3">
                                                        <label>Country</label>
                                                        <select type="text" name="country" class="country form-control limitedNumbSelect2" required> 
                                                            <option value="" hidden>Select Country</option>
                                                            <?php
                                                                $countries = json_decode(file_get_contents('public/assets/countries.json'), true);
                                                                
                                                                $selected = '';
                                                                if ($this->job['job_country'] == 'remote' )
                                                                    $selected = 'selected';
                                                                        
                                                                echo "  <option value='remote' $selected >Remote</option>";
                                                                
                                                                foreach ($countries as $row) { 
                                                                    $selected = '';
                                                                    if ($this->job['job_country'] == $row['name'] )
                                                                        $selected = 'selected';
                                                                        
                                                                    echo "  <option value='{$row['name']}' $selected >{$row['name']}</option>";
                                                                } 
                                                            ?>
                                                        </select>                                           
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label>Town ie Nakuru</label>
                                                        <input type="text" name="town" class="town form-control" value="<?php echo $this->job['job_town'] ?>"  >                                              
                                                    </div>
                                                </div>                                         
                                            </div>
                                            
                                            <div class="col-md-6 mb-3">
                                                <label>Job Category</label>
                                                <select type="text" name="category" class="category form-control" required> 
                                                
<option value="accounting-auditing-finance" <?php echo ($this->job['job_category'] == 'accounting-auditing-finance') ? 'selected':'' ?>>Accounting, Auditing & Finance</option>
<option value="admin-office" <?php echo ($this->job['job_category'] == 'admin-office') ? 'selected':'' ?>>Admin & Office</option>
<option value="building-architecture" <?php echo ($this->job['job_category'] == 'building-architecture') ? 'selected':'' ?>>Building & Architecture</option>
<option value="community-social-services" <?php echo ($this->job['job_category'] == 'community-social-services') ? 'selected':'' ?>>Community & Social Services</option>
<option value="consulting-strategy" <?php echo ($this->job['job_category'] == 'consulting-strategy') ? 'selected':'' ?>>Consulting & Strategy</option>
<option value="creative-design" <?php echo ($this->job['job_category'] == 'creative-design') ? 'selected':'' ?>>Creative & Design</option>
<option value="customer-service-support" <?php echo ($this->job['job_category'] == 'customer-service-support') ? 'selected':'' ?>>Customer Service & Support</option>
<option value="driver-transport-services" <?php echo ($this->job['job_category'] == 'driver-transport-services') ? 'selected':'' ?>>Driver & Transport Services</option>
<option value="engineering-technology" <?php echo ($this->job['job_category'] == 'engineering-technology') ? 'selected':'' ?>>Engineering & Technology</option>
<option value="estate-agent-property-management" <?php echo ($this->job['job_category'] == 'estate-agent-property-management') ? 'selected':'' ?>>Estate Agents & Property Management</option>
<option value="farming-agriculture" <?php echo ($this->job['job_category'] == 'farming-agriculture') ? 'selected':'' ?>>Farming & Agriculture</option>
<option value="food-services-catering" <?php echo ($this->job['job_category'] == 'food-services-catering') ? 'selected':'' ?>>Food Services & Catering</option>
<option value="health-safety" <?php echo ($this->job['job_category'] == 'health-safety') ? 'selected':'' ?>>Health & Safety</option>
<option value="hospitality-leisure" <?php echo ($this->job['job_category'] == 'hospitality-leisure') ? 'selected':'' ?>>Hospitality & Leisure</option>
<option value="human-resources" <?php echo ($this->job['job_category'] == 'human-resources') ? 'selected':'' ?>>Human Resources</option>
<option value="legal-services" <?php echo ($this->job['job_category'] == 'legal-services') ? 'selected':'' ?>>Legal Services</option>
<option value="management-business-development" <?php echo ($this->job['job_category'] == 'management-business-development') ? 'selected':'' ?>>Management & Business Development</option>
<option value="marketing-communications" <?php echo ($this->job['job_category'] == 'marketing-communications') ? 'selected':'' ?>>Marketing & Communications</option>
<option value="medical-pharmaceutical" <?php echo ($this->job['job_category'] == 'medical-pharmaceutical') ? 'selected':'' ?>>Medical & Pharmaceutical</option>
<option value="product-project-management" <?php echo ($this->job['job_category'] == 'product-project-management') ? 'selected':'' ?>>Product & Project Management</option>
<option value="quality-control-assurance" <?php echo ($this->job['job_category'] == 'quality-control-assurance') ? 'selected':'' ?>>Quality Control & Assurance</option>
<option value="research-teaching-training" <?php echo ($this->job['job_category'] == 'research-teaching-training') ? 'selected':'' ?>>Research, Teaching & Training</option>
<option value="sales" <?php echo ($this->job['job_category'] == 'job_category') ? 'selected':'' ?>>Sales</option>
<option value="software-data" <?php echo ($this->job['job_category'] == 'software-data') ? 'selected':'' ?>>Software & Data</option>
<option value="supply-chain-procurement" <?php echo ($this->job['job_category'] == 'supply-chain-procurement') ? 'selected':'' ?>>Supply Chain & Procurement</option>
<option value="trades-services" <?php echo ($this->job['job_category'] == 'trades-services') ? 'selected':'' ?>>Trades & Services</option>
                                                </select>                                          
                                            </div>
                                            
                                            <div class="col-md-6 mb-3">
                                                <label>Job Experience Level</label>
                                                <select type="text" name="experience" class="experience form-control" required>  
<option value='Any' <?php echo ($this->job['job_experience'] == 'Any') ? 'selected':'' ?>>Any Experience Levels</option>
<option value="graduatetrainee" <?php echo ($this->job['job_experience'] == 'graduatetrainee') ? 'selected':'' ?>>Internship & Graduate</option>
<option value="entrylevel" <?php echo ($this->job['job_experience'] == 'entrylevel') ? 'selected':'' ?>>Entry level</option>
<option value="midlevel" <?php echo ($this->job['job_experience'] == 'midlevel') ? 'selected':'' ?>>Mid level</option>
<option value="seniorlevel" <?php echo ($this->job['job_experience'] == 'seniorlevel') ? 'selected':'' ?>>Senior level</option>
<option value="executivelevel" <?php echo ($this->job['job_experience'] == 'executivelevel') ? 'selected':'' ?>>Executive level</option>
                                                </select>                                          
                                            </div>
                                            <!---------------------------------------------------->
                                            <div class="col-md-6 mb-3">
                                                <label>Education Qualification</label>
                                                <select type="text" name="education" class="education form-control" required>  
<option value='highschool <?php echo ($this->job['job_min_education'] == 'highschool') ? 'selected':'' ?>'>High School</option>
<option value="diploma" <?php echo ($this->job['job_min_education'] == 'diploma') ? 'selected':'' ?>>Diploma</option>
<option value="bachelors" <?php echo ($this->job['job_min_education'] == 'bachelors') ? 'selected':'' ?>>Bachelors</option>
<option value="masters" <?php echo ($this->job['job_min_education'] == 'masters') ? 'selected':'' ?>>Masters</option>
<option value="phd" <?php echo ($this->job['job_min_education'] == 'phd') ? 'selected':'' ?>>PhD</option> 
                                                </select>                                        
                                            </div>
                                            
                                            <!---------------------------------------------------->
                                            
                                            <div class="col-md-6 mb-3">
                                                <label>Salary Range</label>
                                                <input type="text" name="salary" class="salary form-control" value="<?php echo $this->job['job_salary_range'] ?>" required>                                            
                                            </div>
                                            <!---------------------------------------------------->                                 
                                            
                                            <div class="col-md-6 mb-3">     
                                                <input type='hidden' value="<?php echo $this->job['job_pic'] ?>" name='imageid' class='imageid'>
                                                <label >Image (Preferably min width:900px) <img class='previmgx' src='/public/assets/uploads/<?php echo $this->job['image_name'] ?>' style='height:20px; width:40px;'> </label> <br>
                                                <button type="button" class="form-control form_control_sm upload_img_btn" style="min-width:100%;"   >Open File Center</button>
                                            </div>
                                             
                                            <div id="addnewpost_reply"></div>
                                            <div class="col-md-12 mb-3">
                                                <label>Description  
                                                <span class='similarcopy'>[more_jobs]</span>
                                                </label>
                                                <textarea name="story_post1" class="form-control " id="editorck" required><?php echo $this->job['job_desc'] ?></textarea>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class='row'>
                                                    <div class='col-md-12'>
                                                        <label>A short summary |  <span class='btn-danger'><small class='counter'></small> Chars</span> (maximum 165 chars)</label>
                                                        <textarea name="summary" maxlength='165' class="summary form-control " required ><?php echo $this->job['job_summary'] ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class='row'>
                                                    <div class='col-md-12'>
                                                        <label>Keywords  (comma seperated keywords)</label>
                                                        <input name="keywords"   class=" form-control " value="<?php echo $this->job['job_keywords'] ?>" > 
                                                    </div>
                                                </div>
                                            </div>
                                             
                                            <div class="col-md-12">
                                                <input type="submit" value="Submit" name='submit' class="submit_btn form-control btn btn-primary">
                                            </div>
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
              
         
          
    })
</script>