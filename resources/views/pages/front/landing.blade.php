<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from validthemes.live/themeforest/softar/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Jul 2023 13:37:49 GMT -->
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SIUKOM - Sistem Informasi Uji Kompetensi">

    <!-- ========== Page Title ========== -->
    <title>SIUKOM - Sistem Informasi Uji Kompetensi</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('') }}front/assets/img/logo-scrool.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('') }}front/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}front/assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}front/assets/css/themify-icons.css" rel="stylesheet" />
    <link href="{{ asset('') }}front/assets/css/elegant-icons.css" rel="stylesheet" />
    <link href="{{ asset('') }}front/assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="{{ asset('') }}front/assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="{{ asset('') }}front/assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}front/assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}front/assets/css/animate.css" rel="stylesheet" />
    <link href="{{ asset('') }}front/assets/css/bootsnav.css" rel="stylesheet" />
    <link href="{{ asseT('') }}front/style.css" rel="stylesheet">
    <link href="{{ asset('') }}front/assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{ asset('') }}front/assets/js/html5/html5shiv.min.js"></script>
      <script src="{{ asset('') }}front/assets/js/html5/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background-color: rgba(238,238,238,0.2);">

  <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header 
    ============================================= -->
    <header id="home" >

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-bg navbar-fixed white no-background bootsnav">

            <div class="container">

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('') }}front/assets/img/logo-siukom.png" class="logo logo-display" alt="Logo">
                        <img src="{{ asset('') }}front/assets/img/logo-scroll.png" class="logo logo-scrolled" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        {{-- <li class="dropdown active dropdown-right">
                            <a href="#home" class="dropdown-toggle smooth-menu active" data-toggle="dropdown" >Home</a>
                            <ul class="dropdown-menu">
                                <li><a href="index-5.html">Home Version Five <span class="badge">New</span></a></li>
                                <li><a href="index-1.html">Home Version One</a></li>
                                <li><a href="index-2.html">Home Version Two</a></li>
                                <li><a href="index-3.html">Home Version Three</a></li>
                                <li><a href="index-4.html">Home Version Four</a></li>
                            </ul>
                        </li> --}}
                        <li>
                            <a class="smooth-menu" href="#about">Beranda</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="{{ url('login') }}">Login</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="{{ url('auth/register') }}">Register</a>
                        </li>
                        {{-- <li>
                            <a class="smooth-menu" href="#team">Team</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#pricing">Pricing</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#blog">Blog</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#contact">Contact</a>
                        </li> --}}
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area text-capitalized bg-bottom text-light text-default" style="background-image: url({{ asset('') }}front/assets/img/shape/shape11.png);">
        <div class="container">
            <div class="double-items">
                <div class="row align-center">

                    <div class="col-lg-6 info">
                        <img src="https://siadapresisi.polri.go.id/images/presisi.png" alt="">
                        <p class="wow fadeInLeft mt-2 font-16" data-wow-delay="500ms">
                            Bagian Manajemen Pengadaan Barang/Jasa POLRI
                        </p>
                        <h2 class="wow fadeInRight" data-wow-defaul="300ms"><strong><b>Aplikasi Assesment Uji Kompetensi</b></strong></h2>
                        <a class="btn btn-md btn-light effect wow fadeInUp" data-wow-delay="700ms" href="{{ url('login') }}">Buka Aplikasi <i class="fas fa-angle-right"></i></a>
                    </div>

                     <div class="col-lg-5 offset-lg-1 thumb wow fadeInRight animation-duration-one" data-wow-delay="900ms">
                        <img src="{{ asset('') }}front/assets/img/illustration/11.png"  alt="Thumb">
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Star About Area
    ============================================= -->
    <div id="about" class="about-area default-padding" style="background-color: #EEEEEE">
        <!-- Shape -->
        <div class="fixed-shape-left">
            <img src="{{ asset('') }}front/assets/img/shape/9.png" alt="Shape">
        </div>
        <!-- End Shape -->
        <div class="container">
            <div class="about-items">
                <div class="row align-center">
                    <div class="col-lg-6">
                        <div class="thumb">
                            <img class="wow fadeInLeft" data-wow-delay="300ms" src="{{ asset('') }}front/assets/img/dashboard/pc.png" alt="Thumb">
                            <img class="wow fadeInUp" data-wow-delay="500ms" src="{{ asset('') }}front/assets/img/dashboard/ss3.png" width="300rem" alt="Thumb">
                        </div>
                    </div>
                    <div class="col-lg-6 info wow fadeInRight">
                        <h4>Tentang Aplikasi</h4>
                        <h2>Apa itu SIUKOM Presisi</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa quidem non similique iusto neque, placeat magni pariatur esse consectetur blanditiis eligendi quis facilis exercitationem laborum fuga soluta in! Reiciendis, a!</p>
                        <ul>
                            <li>
                                <h5>First Working Process</h5>
                                <p>
                                    Fruit defer in party me built under first. Forbade him but savings sending ham general. So play do in near park that pain. 
                                </p>
                            </li>
                            <li>
                                <h5>24/7 Hours Support</h5>
                                <p>
                                    Fruit defer in party me built under first. Forbade him but savings sending ham general. So play do in near park that pain. 
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area -->

    <!-- Star Subscribe Area
    ============================================= -->
    <div class="subscribe-area text-center text-light relative">
        <div class="container">
            <div class="subscribe-items" style="background-color: #2e1faa">
                <i class="flaticon-email"></i>
                <!-- Shape -->
                <div class="fixed-shape-bottom">
                    <img src="{{ asset('') }}front/assets/img/shape/14.png" alt="Shape">
                </div>
                <!-- End Shape -->
                <div class="row align-center">
                    <div class="col-lg-8 offset-lg-2">
                        <h2>Signup for a trial</h2>
                        <p>
                            Create your free account now and get 30 days free trial <br> No credit card required
                        </p>
                        <form action="#">
                            <input type="email" placeholder="Your Email" class="form-control" name="email">
                            <button type="submit"> Subscribe <i class="arrow_right"></i></button>  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Subscribe Area -->

    <!-- Start Features
    ============================================= -->
    <div id="features" class="our-features-area text-center default-padding">
        <!-- Fixed BG -->
        <div class="fixed-bg" style="background-image: url({{ asset('') }}front/assets/img/shape/17.png);"></div>
        <!-- Fixed BG -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2 class="area-title">Our Features</h2>
                        <div class="devider"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="feature-items">
                <div class="row">
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="icon">
                               <i class="flaticon-website"></i>
                           </div>
                           <div class="info">
                               <h4>Fully Customizable</h4>
                               <p>
                                   Passage weather as up am exposed. And natural related man subject eagerness.
                               </p>
                           </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                           <div class="icon">
                               <i class="flaticon-integration"></i>
                           </div>
                           <div class="info">
                               <h4>App Integration</h4>
                               <p>
                                   Passage weather as up am exposed. And natural related man subject eagerness.
                               </p>
                           </div>
                       </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                           <div class="icon">
                               <i class="flaticon-rgb-1"></i>
                           </div>
                           <div class="info">
                               <h4>Color Schemes</h4>
                               <p>
                                   Passage weather as up am exposed. And natural related man subject eagerness.
                               </p>
                           </div>
                       </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                           <div class="icon">
                               <i class="flaticon-resolution-1"></i>
                           </div>
                           <div class="info">
                               <h4>High Resolution</h4>
                               <p>
                                   Passage weather as up am exposed. And natural related man subject eagerness.
                               </p>
                           </div>
                       </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="icon">
                               <i class="flaticon-drag"></i>
                           </div>
                           <div class="info">
                               <h4>Drag And Drop</h4>
                               <p>
                                   Passage weather as up am exposed. And natural related man subject eagerness.
                               </p>
                           </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="icon">
                               <i class="flaticon-showcase"></i>
                           </div>
                           <div class="info">
                               <h4>Perfect Showcase</h4>
                               <p>
                                   Passage weather as up am exposed. And natural related man subject eagerness.
                               </p>
                           </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Features -->

    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            {{-- <div class="f-items default-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item about">
                            <img src="{{ asset('') }}front/assets/img/logo-light.png" alt="Logo">
                            <p>
                                Excellence decisively nay man yet impression for contrasted remarkably. There spoke happy for you are out. Fertile how old address did showing.
                            </p>
                            <form action="#">
                                <input type="email" placeholder="Your Email" class="form-control" name="email">
                                <button type="submit"> <i class="arrow_right"></i></button>  
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Quick LInk</h4>
                            <ul>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Home</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> About us</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Compnay History</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Features</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Blog Page</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Community</h4>
                            <ul>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Career</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Leadership</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Strategy</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Services</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> History</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Components</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item contact-widget">
                            <h4 class="widget-title">Contact Info</h4>
                            <div class="address">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-home"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Address:</strong>
                                            5919 Trussville Crossings Pkwy, Birmingham
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Email:</strong>
                                            <a href="mailto:info@validtheme.com">info@validtheme.com</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Phone:</strong>
                                            <a href="tel:2151234567">+123 34598768</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright 2021. All Rights Reserved by <a href="#">validthemes</a></p>
                    </div>
                    <div class="col-lg-6 text-right link">
                        <ul>
                            <li>
                                <a href="#">Terms</a>
                            </li>
                            <li>
                                <a href="#">Privacy</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('') }}front/assets/js/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('') }}front/assets/js/popper.min.js"></script>
    <script src="{{ asset('') }}front/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('') }}front/assets/js/jquery.appear.js"></script>
    <script src="{{ asset('') }}front/assets/js/jquery.easing.min.js"></script>
    <script src="{{ asset('') }}front/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('') }}front/assets/js/modernizr.custom.13711.js"></script>
    <script src="{{ asset('') }}front/assets/js/owl.carousel.min.js"></script>
    <script src="{{ asset('') }}front/assets/js/wow.min.js"></script>
    <script src="{{ asset('') }}front/assets/js/progress-bar.min.js"></script>
    <script src="{{ asset('') }}front/assets/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('') }}front/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('') }}front/assets/js/count-to.js"></script>
    <script src="{{ asset('') }}front/assets/js/YTPlayer.min.js"></script>
    <script src="{{ asset('') }}front/assets/js/bootsnav.js"></script>
    <script src="{{ asset('') }}front/assets/js/main.js"></script>

</body>

<!-- Mirrored from validthemes.live/themeforest/softar/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Jul 2023 13:38:09 GMT -->
</html>