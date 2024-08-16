 <section class="section footer section--space-top">
        <div class="container">
            <div class="footer__newsletter wow fadeInUp" data-wow-duration="0.8s">
                <div class="row align-items-center gy-5">
                    <div class="col-12 col-lg-8 col-xl-4">
                        <h2 class=" wow fadeInDown" data-wow-duration="0.8s">Subscribe Our Newsletter</h2>
                    </div>
                    <div class="col-12 col-lg-8 col-xl-5">
                        <form method="POST" autocomplete="off" id="frmSubscribee" class="newsletter__content-form wow fadeInUp" data-wow-duration="0.8s">
                            <input type='hidden' name='csrf' class='form-control'   >
                            <div class="d-flex gap-6">
                                <input type="email" class="form-control" id="sMail" name="email" placeholder="Email Address" required>
                                <button type="submit" class="btn_theme active_btn" name="emailSubscribe" id="emailSubscribe">Submit</button>
                            </div>
                            <div class='mb-2 mt-2'>
                                 <div class='info'></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row footer-top">
                <div class="col-12">
                    <div class="space_between wow fadeInDown" data-wow-duration="0.8s">
                        <div class="d-flex flex-wrap align-items-center row-gap-4 gap-5 gap-md-4 gap-lg-5">
                            <div class="footer__logo">
                                <a href="/"><img src="/public/assets/system/logo.png" alt="Logo"></a>
                            </div>
                            <div class="footer__social">
                                <a href="#" class="social_icon"> <i class="ri-facebook-line"></i></a>
                                <a href="#" class="social_icon"> <i class="ri-twitter-line"></i></a>
                                <a href="#" class="social_icon"> <i class="ri-instagram-line"></i></a>
                                <a href="#" class="social_icon"> <i class="ri-linkedin-line"></i></a>
                            </div>
                        </div>
                        <a href="/login/signup" class="btn_theme active_btn">Open Account</a>
                    </div>
                </div>
            </div>
            <div class="row footer-center justify-content-between gy-5">
                <div class="col-12 col-sm-7 col-lg-5 col-xxl-4">
                    <div class="footer-content">
                        <h5 class="footer-content__title">Page</h5>
                        <ul class="footer-content__menu gap-7">
                            <li><a href="/" class="active">Home</a></li>
                            <li><a href="/about-us">About</a></li>
                            <li><a href="/services">Services</a></li>
                            <li><a href="/contact-us">Contact us</a></li>
                            <li><a href="/login">Login</a></li> 
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xxl-4">
                    <div class="footer-content  ms-xxl-5">
                        <h5 class="footer-content__title">Address</h5>
                        <p class="footer-content__text"><?php echo $this->_company['c_address'] ?></p>
                        <p class="footer-content__text"><?php echo $this->_company['c_address'] ?></p>
                    </div>
                </div>
                <div class="col-12 col-sm-5 col-lg-3 col-xxl-3">
                    <div class="footer-content">
                        <h5 class="footer-content__title">Contact</h5>
                        <p class="footer-content__text"><a href="tel:<?php echo $this->_company['c_tel'] ?>"><?php echo $this->_company['c_tel'] ?></a></p>
                        <p class="footer-content__text"><a href="mailto:<?php echo $this->_company['c_email'] ?>"><?php echo $this->_company['c_email'] ?></a></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="footer_copyright">
                       <div class="space_between flex-wrap row-gap-3 column-gap-5">
                            <p class="copyright">Copyright © <span id="copyYear"></span> by <a href="#" class="gap-0 text-white">Mizizi<span class="secondary_color">Pay</span></a> . All Rights Reserved</p>
                            <p>Designed by <a href="https://elightmarket.com/portfolio"><span class="text-white">Elight</span></a></p>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Area End -->

    <!-- scroll to top -->
    <a href="#" class="scrollToTop"><i class="ri-arrow-up-line"></i></a>

    <!--  js dependencies start  -->
 
    <script src="/public/js/jquery-3.6.3.min.js"></script>
    <!-- bootstrap five js -->
    <script src="/public/js/bootstrap.bundle.min.js"></script>
    <!-- magnific popup js -->
    <script src="/public/js/jquery.magnific-popup.min.js"></script>
    <!-- circular-progress-bar -->
    <script src="/public/js/circularProgressBar.min.js"></script>
    <!-- slick js -->
    <script src="/public/js/slick.min.js"></script>
    <!-- odometer js -->
    <script src="/public/js/odometer.min.js"></script>
    <!-- viewport js -->
    <script src="/public/js/viewport.jquery.js"></script>
    <!-- jquery ui js -->
    <script src="/public/js/jquery-ui.min.js"></script>
    <!-- wow js -->
    <script src="/public/js/wow.min.js"></script> 
    <script src="/public/js/jquery.validate.min.js"></script> 
    <script src="/public/js/plugins.js"></script>
    <!-- main js -->
    <script src="/public/js/script.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
<script src="/public/js/main.js"></script> 
   