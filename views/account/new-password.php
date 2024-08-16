
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- required meta -->
   <?php require 'public/includes/header.inc.php' ?>

</head>

<body>

    <!--  Preloader  -->
    <div id="pre_loader"></div>

    <!--header-section start-->
   <?php require 'public/includes/navbar.inc.php' ?>
    <!-- header-section end -->

        <!-- Banner Start -->
    <section class="banner about">
        <div class="container ">
            <div class="row gy-4 gy-sm-0 align-items-center">
                <div class="col-12 col-sm-6">
                    <div class="banner__content">
                        <h1 class="banner__title wow fadeInLeft display-3" data-wow-duration="0.8s">Password Reset</h1> 
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Password Reset</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="banner__thumb text-end">
                        <img src="/public/assets/system/about_banner.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->
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
                                <h3>Enter New Password</h3>
                            </div>
                            <form class="form-group" action="" method="post" id="passwordresetform">       
                                <div class="form-group mb-3">
                                    
                                    <div class='viewpass'>
                                        <label>Password</label>
                                        <label class='eye' title='toggle password view'><i class='ri-eye-line'></i></label>
                                    </div>
                                    <input class="form-control pass" type='password' name="pass1" placeholder='Enter new password'  style='border:1px solid grey; border-radius:0!important' ><br>
                                    </div>
                                    
                                    <div class='form-group mb-3'>
                                       <div class='viewpass'>
                                            <label>Repeat Password</label>
                                            <label class='eye' title='toggle password view'><i class='ri-eye-line'></i></label>
                                        </div>
                                    <input class="form-control pass" type='password' name="pass2" placeholder='Repeat new password'  style='border:1px solid grey; border-radius:0!important'  >
                                    <input class="form-control" type='hidden' name="selector" value='<?php echo $this->selector; ?>'>
                                    <input class="form-control" type='hidden' name="validator" value='<?php echo $this->validator; ?>'>
                                </div>        
                                <div class="form-group mb-3">
                                    <input type="submit" class="btn_theme active_btn" value='Submit'>
                                </div>
                                <div class='m-3  info'></div>
                            </form>
                        </div>
                    </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>
<?php require 'public/includes/footer.inc.php' ?>
</body>

</html>
