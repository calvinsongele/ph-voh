

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
     <h4 class="alert text-center carl_welcome_h shadow">Add a new post</h4>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <?php //require 'views/includes/newarticlepost.inc.php'; ?>
                                <form id='FormLink' method='post'>
                                    <div class='form-group'>
                                        <input type='hidden' class='somedata' value='<?php echo $description ?? '' ?>'>
                                        <input type='text' name='link' class='linkname form-control form-control-sm'> <br>
                                        <button type='submit' name='submit-post' class='btn btn-block btn-primary b1' >Submit</button> <br>
                                        <button type='button' class='submit_single btn btn-block btn-danger b2' > Submit Single </button><br>
                                        <button type='button' class='submit_single_blog btn btn-block btn-success b3' > Submit Blog </button>
                                        <button type='button' class='submit_single_celeb btn btn-block btn-warning b4' > Scrape Celeb </button>
                                        <button type='button' class='submit_single_content btn btn-block btn-secondary b5' > Scrape Content </button>
                                        <button type='button' class='celeb_temp btn btn-block btn-primary b6'>Celeb Temp</button>
                                    </div>
                                </form>
                              
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                    
</div>
	  <!----------------------------->
 
				</main>

			</div>	<!--End layoutSidenav_content-->
		</div> <!--End layoutSidenav-->

	    <?php require ROOT . 'views/admin/includes/footer.php'; ?>
 
           
<script type="text/javascript">
  $(function() {
      
      
      $('#FormLink').submit(function(e) {
          e.preventDefault();
           if ($('.linkname').val() == '') {
              alert('Empty link name');return;
          }
          
           $.ajax({ 
              url: '/controllers/cron.php?local=1',
              contentType:false,
              processData:false,
              type: 'post', 
              beforeSend:function() {
                  $('.b1').text('Submitting...');
              },
              data: new FormData(this), // {description:desc, keywords:keywords, title:title, link: link } ,
              success: function(data) {
                  alert(data)
                  $('.b1').text('Submit');
              }
          });
      });
      
      $('.submit_single').click(function(e) {
          
          if ($('.linkname').val() == '') {
              alert('Empty link');return;
          }
         _post(1, 'b2');
      }); 
      
      $('.submit_single_blog').click(function(e) {
          if ($('.linkname').val() == '') {
              alert('Empty link');return;
          }
         _post('blog','b3', 'Submit Blog'); 
      }); 
      
     $('.submit_single_celeb').click(function(e) {
          if ($('.linkname').val() == '') {
              alert('Empty link');return;
          }
         _post('celeb','b4', 'Scrape Celeb'); 
      });
          
     $('.submit_single_content').click(function(e) {
          if ($('.linkname').val() == '') {
              alert('Empty link');return;
          }
         _post('content','b5', 'Scrape Content'); 
      });
      
      $('.celeb_temp').click(function(e) {
          if ($('.linkname').val() == '') {
              alert('Empty link');return;
          }
         _post2('content','b6', 'Scrape Content'); 
      });
      
    function _post(_local, or_bcl = 'b2', b_cl = 'Submit Single') { 
            $.ajax({ 
              url: '/controllers/cron.php?local=' + _local,
              type: 'post', 
              beforeSend:function() {
                  
                  $('.' + or_bcl).text('Submitting...');
              },
              data:  {single:'1', link: $('.linkname').val() } ,
              success: function(data) {
                  alert(data)
                  //let ms = b_cl=='b2' ? 'Submit Single' : 'Submit Blog';
                  $('.' + or_bcl).text(b_cl);
              }
          });
    }
    
    function _post2(_local, or_bcl = 'b2', b_cl = 'Submit Single') { 
            $.ajax({ 
              url: '/myapp/celeb_temp?local=' + _local,
              type: 'post', 
              beforeSend:function() {
                  
                  $('.' + or_bcl).text('Submitting...');
              },
              data:  {single:'1', name: $('.linkname').val() } ,
              success: function(data) {
                  alert(data)
                  //let ms = b_cl=='b2' ? 'Submit Single' : 'Submit Blog';
                  $('.' + or_bcl).text(b_cl);
              }
          });
    }
    
   
      
      
      
      
      
  })
</script>

	 <!-- Custom JS -->
	 
    </body>
</html>