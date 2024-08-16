
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
                                <form action="" method="post" id="editcelebform">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label>Celeb real name</label>
                                                <input type="text" name="realname" class="title form-control realname" value='<?php echo $this->celeb['c_officialname'] ?>'>   
                                                <input type="hidden" name="c_editid" class="title form-control c_editid" value='<?php echo $this->celeb['c_ID'] ?>'> 
                                                <input type="hidden" name="edittype" value='<?php echo $_GET['type'] ?? '' ?>' class=" form-control ">                                           
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>Celeb stage name</label>
                                                <input type="text" name="stagename" class="title form-control celebstagename stagename" value="<?php echo $this->celeb['c_stagename'] ?>"> 
                                                <input type="hidden" name="current_url" class="title form-control current_url" value='<?php echo $this->celeb['c_url'] ?>'>                                            
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>Celeb gender</label>
                                                <select type="text" name="gender" class="title form-control cgender"> 
                                                    <option value="" hidden>Select gender</option>
                                                    <option value="Male"  <?php echo $this->celeb['c_gender'] == 'Male'?'selected':'' ?> >Male</option>
                                                    <option value="Female" <?php echo $this->celeb['c_gender'] == 'Female'?'selected':'' ?> >Female</option>
                                                    <option value="Group" <?php echo $this->celeb['c_gender'] == 'Group'?'selected':'' ?> >Group</option>
                                                </select>                                          
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>Celeb youtube channel</label>
                                                <input type="text" name="ytchannel" class="title form-control ytchannel" value='<?php echo $this->celeb['c_youtubechannel'] ?>'>                                            
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>Socials| <span style='font-size:9px!important;color:red;'>Coma seperated links in this order IG,FB,TW,Tiktok</span></label>
                                                <input  value='<?php echo $this->celeb['c_ig_page'] ?? 'null';echo','; echo $this->celeb['c_facebook'] ?? 'null';echo',';echo $this->celeb['c_twitter']??'null';echo','; echo $this->celeb['c_tiktok']??'null';  ?>' type="text" name="socials" class="title form-control ig_page" maxlength="900">                                             
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>Celeb website</label>
                                                <input type="text" name="website" class="title form-control website" value='<?php echo $this->celeb['c_website'] ?>'>                                            
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>Celeb date of birth</label>
                                                <input type="date" name="dob" class="title form-control dob" value='<?php echo  $this->celeb['c_yearofbirth'] ?>'>                                            
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
                                                                    if ($this->celeb['c_nationality'] == $row['name']) $s = 'selected'; else $s = '';
                                                                    echo "  <option value='{$row['name']}' $s >{$row['name']}</option>";
                                                                } 
                                                            ?>
                                                        </select>                                           
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label>Nationality ie British</label>
                                                        <input type="text" name="nationality" class="title form-control" required value='<?php echo  $this->celeb['c_realnationality'] ?>'>                                              
                                                    </div>
                                                </div>                                         
                                            </div>
                                                <!---------------------------------------------------->
                                            <div class="col-md-6 mb-3">
                                                <label>Education</label>
                                                <input type="text" name="education" class="education form-control" value='<?php echo $this->celeb['c_education'] ?>'>                                            
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>Celeb Tribe</label>
                                                <input type="text" name="tribe" class="tribe form-control" value='<?php echo $this->celeb['c_tribe'] ?>'>                                            
                                            </div>
                                            <!---------------------------------------------------->
                                              <!---------------------------------------------------->
                                            <div class="col-md-6 mb-3">
                                                <label>Religion</label>
                                                <select type="text" name="religion" class="religion form-control">
                                                    <option value='Christianity' <?php echo $this->celeb['c_religion']=='Christianity' ? 'selected':'' ?> > Christianity </option>
                                                    <option value='Islam' <?php echo $this->celeb['c_religion']=='Islam' ? 'selected':'' ?>> Islam </option>
                                                    <option value='Hindu' <?php echo $this->celeb['c_religion']=='Hindu' ? 'selected':'' ?>> Hindu </option>
                                                    <option value='Budhism' <?php echo $this->celeb['c_religion']=='Budhism' ? 'selected':'' ?>> Budhism </option>
                                                    <option value='Other' <?php echo $this->celeb['c_religion']=='Other' ? 'selected':'' ?>> Other </option>
                                                </select>                                         
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>Celeb Networth</label>
                                                <input type="text" name="networth" class="networth form-control" value='<?php echo $this->celeb['c_networth'] ?>'>                                            
                                            </div>
                                            <!---------------------------------------------------->
                                            <div class="col-md-6 mb-3">
                                                <label>Celeb Category </label>                                               
                                                <select type="text" name="category" class="category form-control ccategory" >  
                                                    <option value="" hidden>Select category</option>
                                                    <?php if (isset($this->getCategories)) 
                                                        foreach($this->getCategories as $cat) {
                                                            $selected = $this->celeb['c_type_id_fk'] == $cat['type_ID'] ? 'selected':'';
                                                            echo "<option value='".$cat['type_ID'] ."'  $selected   >". $cat['type_name'] ."</option>";
                                                        }
                                                    ?>                                                    
                                                </select>                                          
                                            </div>     
                                            <div class="col-md-6 mb-3">     
                                                <input type='hidden' value="<?php echo $this->celeb['c_dp'] ?>" name='imageid' class='imageid'>
                                                <label >Image (Preferably min width:900px) <img class='previmgx' src='/public/assets/uploads/<?php echo $this->celeb['image_name'] ?>' style='height:20px; width:40px;'> </label> <br>
                                                <button type="button" class="form-control form_control_sm upload_img_btn" style="min-width:100%;"   >Open File Center</button>
                                            </div> 
                                             <div class="col-md-6 mb-3">
                                                <label>Post update to facebook</label>
                                                <select  class=" form-control" name='posttofb' type='text' >
                                                    <option value='no' selected>No</option>
                                                    <option value='yes'>Yes</option>
                                                    
                                                </select>
                                            </div>
                                             <div class="col-md-3 mb-3">
                                                <label>Edit Url</label>
                                                <select  class=" form-control" name='editurl' type='text' >
                                                    <option value='yes' selected>Yes</option>
                                                    <option value='no' >No</option>
                                                    
                                                </select>
                                            </div>
                                             <div class="col-md-3 mb-3">
                                                <label>Is Alive? <?php echo $this->celeb['c_alive'] ?></label>
                                                <select  class="alive form-control" name='alive' type='text' >
                                                    <option value='yes' <?php echo $this->celeb['c_alive'] =='yes'?'selected':'' ?> >Yes</option>
                                                    <option value='no' <?php echo $this->celeb['c_alive'] =='no'?'selected':'' ?>>No</option>
                                                    
                                                </select>
                                            </div>
                                             <div class="col-md-3 mb-3">
                                                <label>Death date</label>
                                                <input  class=" form-control deathdate " name='deathdate' type='date' value='<?php echo $this->celeb['c_deathdate']   ?>' > 
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label>Description <span class='similarcopy'>[more_celebs]</span> </label>
                                                <textarea name="story_post1" class="form-control story_post1" id="editorck" ><?php echo $this->celeb['c_bio'] ?></textarea>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class='row'>
                                                    <div class='col-md-12'>
                                                        <label>A short summary |  <span class='btn-danger'><small class='counter'></small> Chars</span> (maximum 165 chars)</label>
                                                        <textarea name="cont_description" maxlength='165' class="cont_description form-control " required><?php echo $this->celeb['c_short_desc'] ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class='row'>
                                                    <div class='col-md-12'>
                                                        <label>Keywords  (comma seperated keywords)</label>
                                                        <input name="c_keywords"   class="c_keywords form-control " value='<?php echo $this->celeb['c_keywords'] ?>' > 
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <input type="submit" value="Submit" name='submit' class="form-control btn btn-primary submit_btn">
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