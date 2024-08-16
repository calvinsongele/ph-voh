
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
                        <h1 class="banner__title wow fadeInLeft display-3" data-wow-duration="0.8s">Sign Up</h1> 
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Create Account</li>
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
            <h1 class='text-center'>Create an account instantly</h1>
             <div class='row'> 
                <div class='col-md-3'></div>
                <div class='col-md-6'>
                    <div> 
                       <form id='signupform' class='shadow alert'>
                           <input name='pid' type='hidden' value='<?php echo $_GET['pid'] ?? '' ?>'   >
                            <div class='form-group mb-3'>
                                <label>Name</label>
                                <input type='text' name='name' class='form-control' required style='border:1px solid grey; border-radius:0!important'  >
                            </div>
                            <div class='form-group mb-3'>
                                <label>Email</label>
                                <input type='email' name='email' class='form-control' required style='border:1px solid grey; border-radius:0!important'  >
                            </div>
                            <div class='form-group mb-3'>
                                
                                <div class='viewpass'>
                                    <label>Password</label>
                                    <label class='eye' title='toggle password view'><i class='ri-eye-line'></i></label>
                                </div>
                                <input type='password' name='pass' class='pass form-control' required style='border:1px solid grey; border-radius:0!important'  >
                            </div>
                            <div class='form-group mb-3'> 
                                <div class='mb-3'>
                                    <small>
                                        By clicking Agree & Join or Continue, you agree to our terms & policy
                                    </small>
                                </div>
                                <input type='submit'  class='btn_theme active_btn' value='Create Now'>
                               <div class='mb-3 mt-3'>
                                    <small>
                                        <a href='/login<?php if (isset($_POST['pid'])){ ?><?php echo '?pid='.$_GET['pid'] ?? ''; } ?>'>Have an account? <u>Login</u></a>
                                    </small>
                               </div>
                                <div class='feedback mb-3'></div>
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