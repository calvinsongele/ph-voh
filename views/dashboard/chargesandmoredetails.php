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
                <div class='col-md-7 matchresponsive     round-borders'>
                    <div class='card p-2 mb-2 ' > 
                      <h3>Charges and Other Important Details</h3>
                 
                    </div> 
                      <div class='card alert'>
                          <form class=''>
                                      <input class='form-control ' name='csrf' value='' type='hidden'>
                              <div class='row'>
                                  <div class='col-md-12  '>
                                  <h5>Fee in USD</h5>
                                  </div>
                                  <div class='col-md-4 mb-0'>
                                      <label>I charge</label>
                                      <select class='form-control cdata' value='<?php echo $this->more['cm_type'] ?>' rel='cm_type' >
                                            <option value='' hidden >Please select </option>
                                            <option value='Hourly' <?php echo $this->more['cm_type']=='Hourly'?'selected':'' ?> >Hourly</option>
                                            <option value='Daily' <?php echo $this->more['cm_type']=='Daily'?'selected':'' ?> >Daily</option>
                                            <option value='Weekly' <?php echo $this->more['cm_type']=='Weekly'?'selected':'' ?> >Weekly</option>
                                            <option value='Monthly' <?php echo $this->more['cm_type']=='Monthly'?'selected':'' ?> >Monthly</option>
                                      </select>
                                      <span class='cm_type'></span>
                                  </div>
                                  <div class='col-md-4 mb-2'>
                                      <label>Minimum fee</label>
                                      <input class='form-control cdata' value='<?php echo $this->more['cm_min'] ?>' rel='cm_min' >
                                      <span class='cm_min'></span>
                                  </div>
                                  <div class='col-md-4 mb-2'>
                                      <label>Maximum fee</label>
                                      <input class='form-control cdata' value='<?php echo $this->more['cm_max'] ?>' rel='cm_max' >
                                      <span class='cm_max'></span>
                                  </div>
                                  
                                  <div class='col-md-12 mb-2'>
                                      <label>Fee Details (Details of how fee can vary)</label>
                                      <textarea class='form-control cdata format-text valid'  rel='cm_fee_vary' ><?php echo $this->more['cm_fee_vary'] ?></textarea>
                                      <span class='cm_fee_vary'></span>
                                  </div> 
                                  <div class='col-md-12 mb-2'>
                                      <label>Total Years of Experience</label>
                                      <input class='form-control cdata' value='<?php echo $this->more['cm_total_experience'] ?>' rel='cm_total_experience' >
                                      <span class='cm_total_experience'></span>
                                  </div>
                                  <div class='col-md-12 mb-2'>
                                      <label>Online Years of Experience</label>
                                      <input class='form-control cdata' value='<?php echo $this->more['cm_online_experience'] ?>' rel='cm_online_experience' >
                                      <span class='cm_online_experience'></span>
                                  </div> 
                                  <div class='col-md-12 mb-2'>
			                            <label class="label asterisk_required">  Are you willing to travel to Client? </label>
			                            <div class="inline-group radiotypes">
											  <label class="radio"><input class='cdata' rel='cm_willing_to_travel' type="radio" <?php echo $this->more['cm_willing_to_travel']=='Yes'?'checked':'' ?> value="Yes" name="willingToTravel"><i class="rounded-x"></i> Yes</label>
				                              <label class="radio"><input class='cdata' rel='cm_willing_to_travel'  type="radio"<?php echo $this->more['cm_willing_to_travel']=='No'?'checked':'' ?> value="No" name="willingToTravel"><i class="rounded-x"></i> No</label>
					                    </div>
					                    <span class='cm_willing_to_travel'></span>
    	                        	</div>
                                  <div class='col-md-12 mb-2'>
                                      <label>How far can you travel? (kms.) [Currently <b class='max-travel text-danger text-bold'><?php echo $this->more['cm_max_travel'] ?> kms</b>]</label>
                                      <input type='range' class='form-control cdata' min='1' max='200' value='<?php echo $this->more['cm_max_travel'] ?>' rel='cm_max_travel' >
                                      <span class='cm_max_travel'></span>
                                  </div> 
			                        	
                                  <div class='col-md-12 mb-2'>  
			                            <label class="label asterisk_required">  Are you willing to work online? </label>
			                            <div class="inline-group radiotypes">
											  <label class="radio"><input class='cdata' rel='cm_can_work_online'  type="radio" <?php echo $this->more['cm_can_work_online']=='Yes'?'checked':'' ?> value="Yes" name="workonline"><i class="rounded-x"></i> Yes</label>
				                              <label class="radio"><input class='cdata' rel='cm_can_work_online'   type="radio"<?php echo $this->more['cm_can_work_online']=='No'?'checked':'' ?> value="No" name="workonline"><i class="rounded-x"></i> No</label>
					                    </div>
					                    <span class='cm_can_work_online'></span>
    	                        	</div>	
                                  <div class='col-md-12 mb-2'>  
			                            <label class="label asterisk_required">  Are you currently a full time employment elsewhere? </label>
			                            <div class="inline-group radiotypes">
											  <label class="radio"><input class='cdata' type="radio" rel='cm_currently_full_time' <?php echo $this->more['cm_currently_full_time']=='Yes'?'checked':'' ?> value="Yes" name="emp"><i class="rounded-x"></i> Yes</label>
				                              <label class="radio"><input class='cdata'  type="radio" rel='cm_currently_full_time' <?php echo $this->more['cm_currently_full_time']=='No'?'checked':'' ?> value="No" name="emp"><i class="rounded-x"></i> No</label>
					                    </div>
					                    <span class='cm_currently_full_time'></span>
    	                        	</div>	
                                  <div class='col-md-12 mb-2'>
                                      <label>Opportunities you are interested in</label>
                                      <select class='form-control cdata'   rel='cm_opportunities' >
                                            <option value='' hidden >Please select </option>
                                            <option value='Full Time' <?php echo $this->more['cm_opportunities']=='Full Time'?'selected':'' ?> >Full Time</option>
                                            <option value='Part Time' <?php echo $this->more['cm_opportunities']=='Part Time'?'selected':'' ?> >Part Time</option>
                                            <option value='Both Full & Part Time' <?php echo $this->more['cm_opportunities']=='Both Full & Part Time'?'selected':'' ?> >Both Full & Part Time</option>
                                      </select>
                                      <span class='cm_opportunities'></span>
                                  </div>
                                   
                                  
                              </div>
                          </form>
                      </div>
                      
                      
                    
                    
                </div>
               
            </div>
                
        </section>
        
    </main>
    
    
    
    <footer> 
      <?php require 'public/includes/dashb-footer.inc.php'; ?> 
    </footer> 
</body>

</html>