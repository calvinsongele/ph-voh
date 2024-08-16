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
                      <h3>Your Areas of Expertise</h3>
                      <p>These can mean your disciplines, fields or topics you're good at and can teach or complete a task for someone.</p>
                 
                    </div> 
                      <div class='card alert'>
                          <div class='subjectsdata designdata'></div>
                      </div>
                      <div class='card alert'>
                          <form id='necompetencies'>
                                      <input class='form-control action' value='new' type='hidden'>
                                      <input class='form-control ' name='csrf' value='' type='hidden'>
                                      <input class='form-control ' name='id' value='' type='hidden'>
                              <div class='row'>
                                  
                                  <div class='col-md-12 mb-2'>
                                      <label>Proficiency Title eg Robotics, English, or Algebra</label>
                                      <input class='form-control ' value='' name='title' required > 
                                  </div> 
                                  <div class='col-md-12 mb-2'>
                                      <label>Expertise Level from</label>
                                      <select class='form-control ' value='' name='from' required > 
                                          <option value="" hidden> -- Select Lowest Level -- </option>
                                          <optgroup data-group-name="1" label="-- Skill Level --">
                                              <?php foreach ($this->levels[0] as $row) { ?>
                                                <option value='<?php echo $row['level_ID'] ?>' data-group-name="<?php echo $row['level_type'] ?>" ><?php echo $row['level_name'] ?></option>
                                              <?php } ?>
                                          </optgroup>
                                          <optgroup data-group-name="2" label="-- Grades --">
                                              <?php foreach ($this->levels[1] as $row) { ?>
                                                <option value='<?php echo $row['level_ID'] ?>' data-group-name="<?php echo $row['level_type'] ?>" ><?php echo $row['level_name'] ?></option>
                                              <?php } ?>
                                          </optgroup>
                                          <optgroup data-group-name="3" label="-- Others -- ">
                                              <?php foreach ($this->levels[2] as $row) { ?>
                                                <option value='<?php echo $row['level_ID'] ?>' data-group-name="<?php echo $row['level_type'] ?>" ><?php echo $row['level_name'] ?></option>
                                              <?php } ?>
                                          </optgroup>
                                      </select>
                                  </div>  
                                  
                                  <div class='col-md-12 mb-2'>
                                      <label>Expertise Level to</label>
                                      <select class='form-control ' value='' name='to' required >
                                          <option value=""> -- Select Highest Level -- </option>
                                          <optgroup data-group-name="1" label="-- Skill Level --">
                                              <?php foreach ($this->levels[0] as $row) { ?>
                                                <option value='<?php echo $row['level_ID'] ?>' data-group-name="<?php echo $row['level_type'] ?>" ><?php echo $row['level_name'] ?></option>
                                              <?php } ?>
                                          </optgroup>
                                          <optgroup data-group-name="2" label="-- Grades --">
                                              <?php foreach ($this->levels[1] as $row) { ?>
                                                <option value='<?php echo $row['level_ID'] ?>' data-group-name="<?php echo $row['level_type'] ?>" ><?php echo $row['level_name'] ?></option>
                                              <?php } ?>
                                          </optgroup>
                                          <optgroup data-group-name="3" label="-- Others -- ">
                                              <?php foreach ($this->levels[2] as $row) { ?>
                                                <option value='<?php echo $row['level_ID'] ?>' data-group-name="<?php echo $row['level_type'] ?>" ><?php echo $row['level_name'] ?></option>
                                              <?php } ?>
                                          </optgroup>
                                      </select>
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
              get_competency();
          });
      </script>
    </footer> 
</body>

</html>