<!DOCTYPE html>
<html lang="en">
<head>
      <?php require 'public/includes/header.inc.php'; ?>

</head>

<body style='background:var(--lightgrey)!important'>
    <header> 
      <?php $pageid = 'home'; require 'public/includes/navbar.inc.php'; ?>
    </header>
   
    <main class='container'  style='paddisng-left:100px'>
        
        
        <section class='mt-2 mb-2  matchresponsive '> 
            <div class='row '>  
                <div class='col-md-3 matchresponsive round-borders' style='border-radius:3px;'>
                    <?php require 'public/includes/left-sidebar.inc.php'; ?>
                </div> 
                <div class='col-md-8 matchresponsive     round-borders'>
                    <div class='card p-2 mb-2 ' > 
                      <h3>Education Details</h3>
                 
                    </div> 
                      <div class='card alert'>
                          <div class='educationdata designdata'></div>
                      </div>
                      <div class='card alert'>
                          <form id='neweducation'>
                                      <input class='form-control educ_action' value='new' type='hidden'>
                                      <input class='form-control ' name='csrf' value='' type='hidden'>
                                      <input class='form-control ' name='id' value='' type='hidden'>
                              <div class='row'>
                                  
                                  <div class='col-md-12 mb-2'>
                                      <label>Institution Name & City eg University of New York, New York</label>
                                      <input class='form-control ' value='' name='school' required > 
                                  </div> 
                                  <div class='col-md-12 mb-2'>
                                      <label>Degree type</label>
                                      <select class='form-control degree_type' value='' name='degree_type' required >
                                          <option hidden >Please Select</option>
                                          <?php foreach ($this->degs as $row) { ?>
                                            <option value='<?php echo $row['dt_ID'] ?>'><?php echo $row['dt_title'] ?></option>
                                          <?php } ?>
                                      </select>
                                  </div> 
                                  <div class='col-md-12 mb-2'>
                                      <label>Degree Name</label>
                                      <input class='form-control ' value='' name='degree_name' required > 
                                  </div> 
                                  
                                  <div class='col-md-12 mb-2'> 
                                      <label>Start Date</label>
                                      <input class='form-control ' type='month' value='' name='month' required > 
                                  </div> 
                                  <div class='col-md-12 mb-2'> 
                                      <label>End Date (Leave Blank if still here)</label>
                                      <input class='form-control ' type='month' value='' name='endmonth' > 
                                  </div> 
                                  <div class='col-md-12 mb-2'> 
                                      <label>Speciality eg Accounting</label>
                                      <input class='form-control ' value='' name='speciality' > 
                                  </div> 
                                  <div class='col-md-12 mb-2'> 
                                      <label>Score (Optional)</label>
                                      <input class='form-control ' value='' name='score' > 
                                  </div> 
                                  <div class='col-md-12 mb-2'> 
                                      <input type='submit' class='btn btn-primary loading' value='Submit Now'>
                                  </div> 
                                  <div class='info'></div>
                                     
                                
                                  
                              </div>
                          </form>
                      </div>
                      
                       
                       
                    
                    
                </div>
               
            </div>
                
        </section>
        
    </main>
    
    
    
    <footer> 
      <?php require 'public/includes/dashb-footer.inc.php'; ?> 
      <script>
          $(function() {
              get_education();
          });
      </script>
    </footer> 
</body>

</html>