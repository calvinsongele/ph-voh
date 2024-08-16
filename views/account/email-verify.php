<!DOCTYPE html>
<html lang="en">
<head> 
    <?php include 'public/includes/header.inc.php'; ?>
</head>
<body>
    <?php $page_id = 'forgotpass'; require 'public/includes/navbar.inc.php'; ?>
    <!-------------------------body----------------------------->
    <!-----------------------about------------------------------->
    <section class="container-fluid fluid-about mt-2"> <br>
        <div class='container'>
            <div class='row '>    
                <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="card alert shadow">
                            <div class="d" id="forgotresponse"></div>
                            <div class="page-header">
                                <h6>Message</h6>
                            </div>
                           <div class="div alert">
                               <?php
                                 echo $this->feedback;
                               ?>
                           </div>
                        </div>
                    </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>
</body>
</html>
<?php require 'public/includes/footer.inc.php'; ?> 
