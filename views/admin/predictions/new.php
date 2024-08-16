
<!DOCTYPE html>
<html lang="en">

    <head>
        <?php require 'views/admin/includes/header.php'; ?>
        <style> 
            datalist {
              position: absolute;
              background-color: white;
              border: 1px solid blue;
              border-radius: 0 0 5px 5px;
              border-top: none;
              font-family: sans-serif;
              /*width: 350px;*/
              padding: 5px;
              max-height: 10rem;
              overflow-y: auto;
              z-index:1;
              
            }
            
             .ll option {
              background-color: white;
              padding: 4px;
              color: blue;
              margin-bottom: 1px;
               font-size: 18px;
              cursor: pointer;
            }
            
             .ll option:hover,  .active{
              background-color: lightblue;
            }
            
        </style>
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
                    <h4 class="h6 text-center"> A new Prediction </h4>
    
                                <form action="" method="post" id="new_prediction">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label>Home Team</label>
                                                <input type="text" name="team1" class="title team1 form-control inputcl inputcl1" rel='1' list='' required >         
                                                <datalist class='ll datalistCl1' role="listbox">
                                                </datalist>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>Away Team</label>
                                                <input type="text" name="team2" class="title team2 form-control  inputcl inputcl2" rel='2' list='' required>  
                                                <datalist class='ll datalistCl2' role="listbox">
                                                </datalist>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>Compeition</label>
                                                <input type="text" name="competition" class="  form-control  " list='daatlxssergttyt' required> 
                                                 <datalist   id="daatlxssergttyt"  >  
                                                    <?php foreach($this->suggestions as $row) { ?>
                                                    <option value='<?php echo $row['com_name'] ?>'>
                                                        <?php } ?> 
                                                 </datalist>
                                            </div>
                                             
                                            <div class="col-md-6 mb-3">
                                                <label>Match date</label>
                                                <input type="datetime-local" name="date" class=" teamdate form-control" required>                                            
                                            </div> 
                                                         
                                            <div class="col-md-6 mb-3"> 
                                                <label>Jackpot</label>
                                                <select type="text" name="jp" class="  form-control">  
                                                    <option value=''>Empty</option>
                                                    <option value='jackpot-predictions/mega-jackpot-sportpesa'>SP Mega JP</option>
                                                    <option value='jackpot-predictions/midweek-jackpot-sportpesa'>SP Midweek</option>
                                                    <option value='jackpot-predictions/betika-grand-jackpot'>Betika Grand</option>
                                                    <option value='jackpot-predictions/betika-midweek-jackpot'>Betika Midweek</option>
                                                    <option value='jackpot-predictions/betika-sababisha-jackpot'>Betika Sababisha</option>
                                                    <option value='jackpot-predictions/mozzartbet-super-grand-jackpot'>Mozzartbet Super Grand</option>
                                                    <option value='jackpot-predictions/mozzartbet-daily-jackpot'>Mozzartbet Daily</option>
                                                    <option value='jackpot-predictions/odibets-jackpot'>Odibet JP</option>
                                                    <option value='jackpot-predictions/betpawa-jackpot'>Betpawa JP</option>
                                                    <option value='jackpot-predictions/shabiki-jackpot'>Shabiki Daily</option> 
                                                </select>
                                            </div>   
                                            
                                            <div class="col-md-6 mb-3">
                                                <label>Last 5 matches</label>
                                                <input type="text" name="pastmatches" class="  form-control  " required>                                           
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>Head2Head Stats</label>
                                                <input type="text" name="h2h" class=" form-control  " >                                           
                                            </div>
                                               
                                            
                                            <div class="col-md-6 mb-3">     
                                            <input type='hidden' value="" name='imageid' class='imageid'>
                                                <label >Image (Preferably min width:900px) <img class='previmgx' src='' style='height:20px; width:40px;'> </label> <br>
                                                <button type="button" class="form-control form_control_sm upload_img_btn" style="min-width:100%;"   >Open File Center</button>
                                            </div>
                                            
                                            <div class="col-md-12 mb-3">
                                                <label>Detailed analysis <a href='#uploadimg' data-toggle='modal' classs='uploadimg'>Upload Img</a>
                                                <span class='similarcopy'>[similarposts]</span></label>
                                                <textarea name="story_post1" class="form-control " id="editorck" required></textarea>
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

	 <!-- Custom JS -->
	 
    </body>
</html>
<script>
    $(function(){
        
        /********************************** should not repeat games *******************************************/
        $('.teamdate').change(function() { check_if_prediction_exist(); }); 
        //$('.team1').change(function() { check_if_prediction_exist(); });
       // $('.team2').change(function() { check_if_prediction_exist(); });
        
        function check_if_prediction_exist() {
            if ( ($('.team1').val() == '') || ($('.team2').val() == '') || ($('.teamdate').val() == '')  ) { }
            else {
              let form_data = new FormData();
              form_data.append('team1', $('.team1').val());
              form_data.append('team2', $('.team2').val());
              form_data.append('date', $('.teamdate').val());
              
              const response = _data(form_data, 'check_if_prediction_exist');
              if (response['error'] == 'true') alert( response['msg'] );
           
            }
        }
       
   /******************X**************** should not repeat games *****************X**************************/ 
        
        var datalistValues = $('datalist'); 
    
      var currentFocus = -1;
      $('.inputcl_removed').keyup(function(e) {
          
          //db
          getTeamOptions($(this).val());
          
          const relval = $(this).attr('rel');
          datalistValues = $('.datalistCl' +  relval );
          input = $('.inputcl' +  relval );
          datalistValues.css('display', 'block');
          input.css('border-radius', '5px 5px 0 0');
          
          
          datalistValues.find('option').click(function() {  
            input.val($(this).val());
            datalistValues.css('display', 'none');
            input.css('border-radius', '5px');
          });
          
          
          input.on('input', function() {
            var currentFocus = -1;
            var text = input.val().toUpperCase();
            datalistValues.find('option').each(function() {
              if ($(this).val().toUpperCase().indexOf(text) > -1) {
                $(this).css('display', 'block');
              } else {
                $(this).css('display', 'none');
              }
            });
          });
          
        if (e.keyCode == 40) {
          currentFocus++;
          addActive(datalistValues.find('option'));
        } else if (e.keyCode == 38) {
          currentFocus--;
          addActive(datalistValues.find('option'));
        } else if (e.keyCode == 13) {
          e.preventDefault();
          if (currentFocus > -1) {
            if (datalistValues.find('option').eq(currentFocus).length) datalistValues.find('option').eq(currentFocus).click();
          }
        }
      });
    
      function addActive(x) {
        if (!x) return false;
        removeActive(x);
        if (currentFocus >= x.length) currentFocus = 0;
        if (currentFocus < 0) currentFocus = (x.length - 1);
        x.eq(currentFocus).addClass('active');
      }
    
      function removeActive(x) {
        x.removeClass('active');
      }
        
          function getTeamOptions(suggestion) {
              let form_data = new FormData();
              form_data.append('search', suggestion);
              const response = _data(form_data, 'suggestions');
              for (let i = 0; i < response.length; i++) {
                   datalistValues.append('<option value="'+response[i]['ft_name']+'">'+response[i]['ft_name']+'</option>');  
                 } 
          }
  
        
        
		
        $('#categoriesSel').addClass('limitedNumbSelect2');
        
		      $(".limitedNumbSelect2").
		      select2({
                maximumSelectionLength: 2, 
              
            });
        
      $(window).click(function() {
          //Hide the menus if visible
          $('datalist').css('display', 'none');
        }); 
     
  
        
        
        
    })
</script>