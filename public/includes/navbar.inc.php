 <header class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-xxl nav-shadow" id="#navbar">
                        <a class="navbar-brand px-0" href="/"><img src="/public/assets/system/logo.png" class="logo" alt="logo"></a>
                        <a class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <span class="material-symbols-outlined"> apps </span>
                        </a>
                        
                        <div class="collapse navbar-collapse ms-auto" id="navbar-content">
                            <div class="main-menu">
                                <ul class="navbar-nav  mb-lg-0 mx-auto">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="/">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/services">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/about-us">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/contact-us">Contact us</a>
                                    </li> 
                                    
                                    <!--<li class="nav-item dropdown">-->
                                    <!--    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Blog </a>-->
                                    <!--    <ul class="dropdown-menu">-->
                                    <!--        <li><a class="dropdown-item" href="blog.html">Blog</a></li>-->
                                    <!--        <li><a class="dropdown-item" href="blog-details.html">Blog Details</a></li>-->
                                    <!--    </ul>-->
                                    <!--</li>-->
                                </ul>
                                
                                <div class="nav-right">
                                    <a href="/login" class="btn_theme">Register now</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!--header section end-->

    <!-- Offcanvas More info-->
    <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight">
        <div class="offcanvas-body custom-nevbar">
            <div class="row">
                <div class="col-md-7 col-xl-8">
                    <div class="custom-nevbar__left">
                        <button type="button" class="close-icon d-md-none ms-auto" data-bs-dismiss="offcanvas"
                            aria-label="Close"><span class="material-symbols-outlined">close </span></button>
                        <ul class="custom-nevbar__nav mb-lg-0">
                            <li class="menu_item">
                                <a class="menu_link" href="/">Home</a>
                            </li>
                            <li class="menu_item">
                                <a class="menu_link" href="/services">Services</a>
                            </li>
                            <li class="menu_item">
                                <a class="menu_link" href="/about-us">About</a>
                            </li>
                            <li class="menu_item">
                                <a class="menu_link" href="/contact-us">Contact</a>
                            </li>
                            <li class="menu_item">
                                <a class="menu_link" href="/login">Login</a>
                            </li>
                            <!--<li class="menu_item dropdown">-->
                            <!--    <a class="menu_link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Service </a>-->
                            <!--    <ul class="dropdown-menu">-->
                            <!--        <li><a class="dropdown-item" href="service.html">Service</a></li>-->
                            <!--        <li><a class="dropdown-item" href="service-details.html">Service Details</a></li>-->
                            <!--    </ul>-->
                            <!--</li>-->
                         
                            
                           
                        </ul> 
                    </div>
                    
                </div>
                <div class="col-md-5 col-xl-4">
                    <div class="custom-nevbar__right">
                        <div class="custom-nevbar__top d-none d-md-block">
                            <button type="button" class="close-icon ms-auto"
                                data-bs-dismiss="offcanvas" aria-label="Close"><span
                                    class="material-symbols-outlined">close </span></button>
                            <div class="custom-nevbar__right-thumb mb-auto">
                                <img src="/public/assets/system/logo.png" alt="logo">
                            </div>
                        </div>
                        <ul class="custom-nevbar__right-location">
                            <li>
                                <p class="mb-2">Phone: </p>
                                <a href="tel:<?php echo $this->_company['c_tel'] ?>" class="fs-4 contact"><?php echo $this->_company['c_tel'] ?></a>
                            </li>
                            <li class="location">
                                <p class="mb-2">Email: </p>
                                <a href="mailto:<?php echo $this->_company['c_email'] ?>" class="fs-4 contact"><?php echo $this->_company['c_email'] ?></a>
                            </li>
                            <li class="location">
                                <p class="mb-2">Location: </p>
                                <p class="fs-4 contact"><?php echo $this->_company['c_address'] ?></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>