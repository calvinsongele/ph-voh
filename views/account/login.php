
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
                        <h1 class="banner__title wow fadeInLeft display-3" data-wow-duration="0.8s">Login</h1> 
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Login</li>
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
        <section class='container'> 
             <div class='row'> 
                <div class='col-md-3'></div>
                <div class='col-md-6'>
                    <div> 
                       <form id='loginform' class='shadow alert mb-3'> 
                       <input name='pid' type='hidden' value='<?php echo $_GET['pid'] ?? '' ?>'   >
                            <div class='form-group mb-3'>
                                <label>Email</label>
                                <input type='text' name='username' class='form-control' style='border:1px solid grey; border-radius:0!important'  required >
                            </div>
                            <div class='form-group mb-3'>
                                <div class='viewpass'>
                                    <label>Password</label>
                                    <label class='eye' title='toggle password view'><i class='ri-eye-line'></i></label>
                                </div>
                                <input type='password' name='pass' class='pass form-control' required style='border:1px solid grey; border-radius:0!important' >
                            </div>
                            <div class='form-group mb-3'> 
                                <div class='mb-2'>
                                    <small>
                                        <a href='/login/forgot-password'>Forgot password? <u>Reset</u></a>
                                    </small> 
                                </div>
                                <input type='submit'  class='btn_theme active_btn' value='Sign In' > <br>
                               
                               <div class='mb-2 mt-2'>
                                    <small>
                                        <a href='/login/signup<?php if (isset($_POST['pid'])){ ?><?php echo '?pid='.$_GET['pid'] ?? ''; } ?>'>Don't have an account? <u>Signup</u></a>
                                    </small>
                               </div>
                                <div class='feedback mt-3 mb-3'>
                                    <?php if (isset($_GET['loginRequired'])) echo "<div class='alert alert-danger'><p>Login needed to get you back to your previous page.</p> </div>"; ?>
                                </div>
                                <br><br>
                            </div>
                        </form>  
                    </div> 
                </div>
                <div class='col-md-4'></div>
                </div>
        </section>
     
<?php require 'public/includes/footer.inc.php' ?>
</body>

</html>