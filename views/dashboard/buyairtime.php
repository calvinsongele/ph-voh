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
                     <?php //require 'public/includes/left-sidebar.inc.php'; ?>
                </div> 
                <div class='col-md-6 matchresponsive     round-borders'>
                    <div class='card p-2 mb-2 ' > 
                        <div class='introfeed'>
                            <div class='img'> <img src="<?php echo CustomFunctions::profileImg($this->me['image_name']) ?>" class="avatar" alt="Avatar"></div>
                            <div class='post'><a class='btn btn-block btn-outline-primary round-btn'  
                               >Buy Airtime to any line</a> 
                               </div>
                        </div>
                
                       <div class='  mt-1'>  
                       
                            <form id='newairtime'>
                                      <input class='form-control ' name='csrf' value='' type='hidden'>
                                      <input class='form-control ' name='email' value='<?php echo $this->me['user_email'] ?>' type='hidden'> 
                                <div class='form-group mb-3'>
                                    <label>Phone <span>[Required]</span></label>
                                    <div class='phonecall'>
                                    <select class='form-control' required name='phonecode'  >
                                        <?php foreach(json_decode(file_get_contents('public/assets/countries.json'),1 ) as $row ) { ?>
                                            <option value='<?php echo $row['dial_code'] ?>'><?php echo "{$row['name']} - {$row['dial_code']}" ?></option>
                                        <?php } ?>
                                    </select>
                                    <input class='form-control' required name='tel' placeholder='Omit the first 0 eg 712345678' > 
                                    </div>
                                </div>
                                <div class='form-group mb-3'>
                                    <label>Airtime Amount <span>[Required]</span></label>
                                    <input class='form-control' required name='airtime'  > 
                                </div>
                                <div class='form-group mb-3'>
                                    <label>Operator <span>[Required]</span></label>
                                    <div class='currencycode'>
                                        <select class='form-control' required name='currency'  >
                                            <?php foreach(json_decode(file_get_contents('public/assets/currencies.json'),1 ) as $row ) { ?>
                                                <option value='<?php echo $row['code'] ?>'><?php echo "{$row['name']}" ?></option>
                                            <?php } ?>
                                        </select>
                                        <select class='form-control' required name='operator'  >
                                            <option value='Safaricom' >Safaricom</option>
                                            <option value='Airtel'>Airtel</option>
                                            <option value='Telkom'>Telkom</option>
                                            <option value='MTN'>MTN</option>
                                            <option value='TNM'>TNM</option>
                                            <option value='Orange'>Orange</option>
                                            <option value='Zamtel'>Zamtel</option>
                                            <option value='Tigo'>Tigo</option>
                                            <option value='Ethio Telecom'>Ethio Telecom</option> 
                                        </select>
                                    </div>
                                </div>
                                
                                <div class='row'>
                                    <div class='col-md-5'>
                                        <div class='form-groupd mb-3'> 
                                            <input class='btn btn-primary loading' type='submit' value='Purchase Now'   > 
                                        </div>
                                    </div>
                                    <div class='col-md-7'>  </div>
                                </div>
                                
                            </form>
                           
                       </div>
                    </div>
                  
                    
                </div>
                <div class='col-md-3 round-borders matchresponsive'  >
                    
                    <?php //require 'public/includes/right-sidebar.inc.php' ?>
                    
                    
                    
                </div>
            </div>
                
        </section>
        
    </main>
    
    
    
    <footer> 
      <?php require 'views/dashboard/includes/footer.inc.php'; ?>  
    </footer> 
</body>

</html>