
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
                    <h4 class="h6 text-center"> A new Prediction </h4>
    
                                <form action="" method="post" id="new_jp">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label>Games</label>
                                                <input type="text" name="game" class="gamesr form-control inputcl inputcl1" rel='1' list='' required >         
                                                
                                            </div>
                                          
                                            <div class="col-md-6 mb-3"> 
                                                <label>Jackpot</label>
                                                <select type="text" name="jp" class=" gamesrt form-control" required>  
                                                    <option value=''>Empty</option>
                                                    <option value='abc_jackpot'>SP Mega JP</option>
                                                    <option value='abc_13'>SP Midweek</option>
                                                    <option value='betika_midweek'>Betika Midweek</option>
                                                    <option value='betpawa_jackpot'>Betpawa JP</option>
                                                    <option value='mozzart_daily'>Mozzartbet Daily</option>
                                                    <option value=''>Mozzartbet Super Grand</option>
                                                    <option value=''>Betika Grand</option>
                                                    <option value=''>Betika Sababisha</option>
                                                    <option value=''>Odibet JP</option>
                                                    <option value=''>Shabiki Daily</option> 
                                                </select>
                                            </div>   
                                            
                                           
                                             
                                           
                                             
                                            <div class="col-md-12">
                                                <input type="submit" value="Submit" name='submit' class="form-control btn btn-primary">
                                            </div>
                                            <div class="col-md-12 mt-3">
                                                <input type="button" value="Submit Predictions"  class="form-control btn btn-secondary btnsubmt-sec-pred">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                
                                <div class='alert shadow'>
                                    <table class='table table-striped'>
                                        <thead>
                                            <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Games</th> 
                                            <th>Clear</th> 
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=0;  foreach($this->jps as $row) { $i++; ?>
                                            <tr>
                                                <td><?php echo $i ?></td>
                                                <td><?php echo $row['abc_type'] ?></td>
                                                <td style='font-size:13px; overflow:auto'><?php echo $row['abc_games'] ?></td>
                                                <td > <a href='#' rel='<?php echo $row['abc_ID'] ?>' class='cleargames'>Clear</a> </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
</div>
	  <!----------------------------->
	  
 

 
				</main>

			</div>	<!--End layoutSidenav_content-->
		</div> <!--End layoutSidenav-->

	    <?php require ROOT . 'views/admin/includes/footer.php'; ?>
  

	 <!-- Custom JS -->
	 
    </body>
</html>
 