<!-- Header Area Start Here -->
<header class="main-header-area">

    <!-- Main Header Area Start -->
    <div class="main-header">
        <div class="container container-default custom-area">
            <div class="row">
                <div class="col-lg-12 col-custom">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-xl-2 col-sm-6 col-6 col-custom">
                            <div class="header-logo d-flex align-items-center">
                                <a href="{{ route('home') }}">
                                    <img class="img-full" src="{{ asset('/') }}front/assets/images/logo/logo.png"
                                        alt="Header Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-xl-7 position-static d-none d-lg-block col-custom">
                            <nav class="main-nav d-flex justify-content-center">
                                <ul class="nav">
                                    <li>
                                        <a class="active" href="{{ url('/') }}">
                                            <span class="menu-text">Home</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('blog') }}">
                                            <span class="menu-text"> Blog</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('about-us') }}">
                                            <span class="menu-text"> About</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/contact-us') }}">
                                            <span class="menu-text">Contact</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div class="col-lg-2 col-xl-3 col-sm-6 col-6 col-custom">
                            <div class="header-right-area main-nav">
                                <ul class="nav">
                                    <li class="login-register-wrap d-none d-xl-flex">
                                        <span><a href="{{ url('user/login') }}">Login</a></span>
                                        <span><a href="{{ url('user/signup') }}">Register</a></span>
                                    </li>

                                    <li class="mobile-menu-btn d-lg-none">
                                        <a class="off-canvas-btn" href="#">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Header Area End -->

    <!-- Sticky Header Start Here-->
    <div class="main-header header-sticky">
        <div class="container container-default custom-area">
            <div class="row">
                <div class="col-lg-12 col-custom">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-xl-2 col-sm-6 col-6 col-custom">
                            <div class="header-logo">
                                <a href="index.html">
                                    <img class="img-full" src="{{ asset('/') }}front/assets/images/logo/logo.png"
                                        alt="Header Logo">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-8 col-xl-7 position-static d-none d-lg-block col-custom">
                            <nav class="main-nav d-flex justify-content-center">
                                <ul class="nav">
                                    <li>
                                        <a class="active" href="{{ url('/') }}">
                                            <span class="menu-text"> Home</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('blog') }}">
                                            <span class="menu-text"> Blog</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('about-us') }}">
                                            <span class="menu-text"> About</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('contact-us') }}">
                                            <span class="menu-text">Contact</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div class="col-lg-2 col-xl-3 col-sm-6 col-6 col-custom">
                            <div class="header-right-area main-nav">
                                <ul class="nav">
                                    <li class="login-register-wrap d-none d-xl-flex">
                                        <span><a href="{{ url('user/login') }}">Login</a></span>
                                        <span><a href="{{ url('user/signup') }}">Register</a></span>
                                    </li>

                                    <li class="mobile-menu-btn d-lg-none">
                                        <a class="off-canvas-btn" href="#mobileMenu">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sticky Header End Here -->

    <!-- off-canvas menu start -->
    <aside class="off-canvas-wrapper" id="mobileMenu">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="btn-close-off-canvas">
                <i class="fa fa-times"></i>
            </div>
            <div class="off-canvas-inner">

                <div class="search-box-offcanvas">
                    <form>
                        <input type="text" placeholder="Search product...">
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- mobile menu start -->
                <div class="mobile-navigation">

                    <!-- mobile menu navigation start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><a href="#">Home</a>
                            </li>
                            
                            <li class="menu-item-has-children "><a href="#">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="blog.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                    <li><a href="blog-list-fullwidth.html">Blog List Fullwidth</a></li>
                                    <li><a href="blog-grid.html">Blog Grid Page</a></li>
                                    <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                    <li><a href="blog-grid-fullwidth.html">Blog Grid Fullwidth</a></li>
                                    <li><a href="blog-details-sidebar.html">Blog Details Sidebar Page</a></li>
                                    <li><a href="blog-details-fullwidth.html">Blog Details Fullwidth Page</a></li>
                                </ul>
                            </li>

                            <li><a href="about-us.html">About</a></li>
                            <li><a href="contact-us.html">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->

                <div class="header-top-settings offcanvas-curreny-lang-support">
                    <!-- mobile menu navigation start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><a href="#">My Account</a>
                                <ul class="dropdown">
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="Register-2.html">Register</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>

                <!-- offcanvas widget area start -->
                <div class="offcanvas-widget-area">
                    <div class="top-info-wrap text-left text-black">
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                <a href="info%40yourdomain.html">(1245) 2456 012</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <a href="info%40yourdomain.html">info@yourdomain.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="off-canvas-widget-social">
                        <a title="Facebook-f" href="#"><i class="fa fa-facebook-f"></i></a>
                        <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                        <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                        <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                    </div>
                </div>
                <!-- offcanvas widget area end -->
            </div>
        </div>
    </aside>
    <!-- off-canvas menu end -->

</header>
<!-- Header Area End Here -->
