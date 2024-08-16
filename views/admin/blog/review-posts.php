
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
    <h4 class="h6 text-center">Review</h4>
    
                                <form action="" method="post" id="reviewposts">
                                     <input type="hidden" name="randid" class="randid form-control" value=''>  
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <input type="hidden" name="b_ID" value='<?php echo $this->article['b_ID']; ?>'>         
                                                <label>Title</label>
                                                <input type="text" name="title" class="title form-control" value='<?php echo $this->article['b_title']; ?>'>                                            
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>Blog Category (<a href="#addNewCategory" data-toggle="modal">add new</a>)</label>                                               
                                                <select type="text" name="category" class="category form-control" id="categoriesSel">  
                                                    <option value="" hidden>Select category</option>
                                                    <?php 
                                                        foreach($this->getCategories as $cat) {
                                                            
                                                            if ( 28 == $cat['bc_ID'] ) {
                                                                echo " <option value='".$cat['bc_ID'] ."' selected>". $cat['bc_name'] ."</option> ";
                                                            } else echo " <option value='".$cat['bc_ID'] ."'>". $cat['bc_name'] ."</option> ";
                                                        }
                                                    ?>                                                    
                                                </select>                                          
                                            </div>                                    
                                            <div class="col-md-6 mb-3">
                                                <label>Leave empty if you dont need to change the existing image</label>
                                                <input type="file" name="event_img" accept="image/*"  class="event_img form-control" >
                                            </div>
                                            <div id="addnewpost_reply"></div>
                                            <div class="col-md-12 mb-3">
                                                <label>Your story | <span class='similarcopy' title='Copy this tag to get read more within your article'>[similarposts]</span> </label>
                                                <textarea name="story_post1" class="form-control " id="editorck" required><?php echo $this->article['b_content']; ?></textarea>
                                            </div>
                                            <div class="col-md-12 mb-3"> 
                                                <div class='row'>
                                                    <div class='col-md-12'>
                                                        <label>A short summary |  <span class='btn-danger'><small class='counter'></small> Chars</span> (maximum 165 chars)</label>
                                                        <textarea name="cont_description" maxlength='165' class="cont_description form-control " required><?php echo $this->article['b_content']; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                Delete this? Yes<input type='radio' name='del' value='yes' > No:<input type='radio' name='del' value='no' checked >                        <br>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="submit" value="Submit" name='submit' class="form-control btn btn-primary">
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
         
            //<![CDATA[
            CKEDITOR.replace( 'editorck');
            //]]>
        </script>

	 <!-- Custom JS -->
	 
    </body>
</html>