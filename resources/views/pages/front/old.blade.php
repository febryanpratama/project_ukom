<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from validthemes.live/themeforest/softar/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Jul 2023 13:37:49 GMT -->
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Softar - Software Landing Page">

    <!-- ========== Page Title ========== -->
    <title>Softar - Software Landing Page</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('') }}front/assets/img/favicon.png" type="image/x-icon">

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
                            <a class="smooth-menu" href="#overview">Register</a>
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
                            Bagian Manajemen Pengadaan Barang/Jasa
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

    <!-- Start Choose Us Area 
    ============================================= -->
    <div class="choose-us-area default-padding padding-bottom-extra bg-gray left-border">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 thumb">
                    <img src="{{ asset('') }}front/assets/img/illustration/1.svg" alt="dashboard">
                </div>
                
                <div class="col-lg-6 info">
                    <div class="item-box">
                        <h4>Why Choose us</h4>
                        <h2>Create your app page <br> With expert developer</h2>
                        <p>
                            Journey greatly or garrets. Draw door kept do so come on open mean. Estimating stimulated how reasonably precaution diminution she simplicity sir but. Questions am sincerity zealously concluded consisted or no gentleman it. 
                        </p>
                        <ul>
                            <li>First Working Process</li>
                            <li>Satisfied Services</li>
                            <li>Dedicated Team Member</li>
                            <li>24/7 Hours Support</li>
                        </ul>
                        <div class="progress-box">
                            <h5>Success Rate</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-width="78">
                                     <span>78%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Choose Us Area -->

    <!-- Start Fun Factor Area
    ============================================= -->
    <div class="fun-factor-area text-light">
        <div class="container">
            <div class="fun-fact-items text-center">
                <div class="row">
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="timer" data-to="687" data-speed="5000">687</div>
                            <span class="medium">Projects Completed</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="timer" data-to="655" data-speed="5000">655</div>
                            <span class="medium">Active clients</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="timer" data-to="450" data-speed="5000">450</div>
                            <span class="medium">Cups of coffee</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="timer" data-to="1200" data-speed="5000">1200</div>
                            <span class="medium">Happy clients</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Factor Area -->


    <!-- Start Overview 
    ============================================= -->
    <div id="overview" class="overview-area relative default-padding-top carousel-shadow">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Quick Software Overview</h2>
                        <div class="devider"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-full">
            <div class="row">
                <div class="col-lg-12">
                    <div class="overview-carousel owl-carousel owl-theme">
                        <!-- Single item -->
                        <div class="item">
                            <img src="{{ asset('') }}front/assets/img/dashboard-2/dashboard-1.jpg" alt="Thumb">
                            <div class="content">
                                <h4><span>01</span> App Integration</h4>
                            </div>
                        </div>
                        <!-- End Single item -->
                        <!-- Single item -->
                        <div class="item">
                            <img src="{{ asset('') }}front/assets/img/dashboard-2/dashboard-2.jpg" alt="Thumb">
                            <div class="content">
                                <h4><span>02</span> App Customization</h4>
                            </div>
                        </div>
                        <!-- End Single item -->
                        <!-- Single item -->
                        <div class="item">
                            <img src="{{ asset('') }}front/assets/img/dashboard-2/dashboard-3.jpg" alt="Thumb">
                            <div class="content">
                                <h4><span>03</span> App Modification</h4>
                            </div>
                        </div>
                        <!-- End Single item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Overview -->

    <!-- Start Process Area 
    ============================================= -->
    <div class="process-area default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 thumb">
                    <img src="{{ asset('') }}front/assets/img/illustration/7.png" alt="Thumb">
                </div>
                <div class="col-lg-6 info ml-auto">
                    <h2>Three Simple Step To Started Working Process</h2>
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="flaticon-presentation"></i>
                            </div>
                            <div class="content wow fadeInUp" data-wow-delay="300ms">
                                <h4>Research Project <span>Step - 01</span></h4>
                                <p>
                                    Sometimes furnished collected add for resources attention. Norland an by minuter.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="flaticon-target"></i>
                            </div>
                            <div class="content wow fadeInUp" data-wow-delay="500ms">
                                <h4>Targeting <span>Step - 02</span></h4>
                                <p>
                                    Bumetimes furnished collected add for resources attention. Norland an minister.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="flaticon-report"></i>
                            </div>
                            <div class="content wow fadeInUp" data-wow-delay="700ms">
                                <h4>Result <span>Step - 03</span></h4>
                                <p>
                                    Sometimes furnished collected add for resources attention. Norland an by minuter. 
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Process Area -->

    <!-- Start Team 
    ============================================= -->
    <div id="team" class="team-area bg-gray default-padding bottom-less">
        <!-- Shape -->
        <div class="fixed-shape" style="background-image: url({{ asset('') }}front/assets/img/shape/5.png);"></div>
        <!-- End Shape -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Innovative Team</h2>
                        <div class="devider"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="team-items">
                <div class="row">
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('') }}front/assets/img/team/1.jpg" alt="Thumb">
                                <div class="social">
                                    <input type="checkbox" id="toggle" class="share-toggle" hidden>
                                    <label for="toggle" class="share-button">
                                        <i class="fas fa-plus"></i>
                                    </label>
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <h4>Ahem Natasha</h4>
                                <span>Operations officer</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('') }}front/assets/img/team/2.jpg" alt="Thumb">
                                <div class="social">
                                    <input type="checkbox" id="toggle2" class="share-toggle" hidden>
                                    <label for="toggle2" class="share-button">
                                        <i class="fas fa-plus"></i>
                                    </label>
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <h4>Devid mark</h4>
                                <span>Graphic designer</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('') }}front/assets/img/team/3.jpg" alt="Thumb">
                                <div class="social">
                                    <input type="checkbox" id="toggle3" class="share-toggle" hidden>
                                    <label for="toggle3" class="share-button">
                                        <i class="fas fa-plus"></i>
                                    </label>
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <h4>Brave Hammam</h4>
                                <span>Web developer</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Area -->

    <!-- Start Testimonials 
    ============================================= -->
    <div class="testimonials-area carousel-shadow default-padding-top">
        <!-- Shape -->
        <div class="fixed-shape-left">
            <img src="{{ asset('') }}front/assets/img/shape/9.png" alt="Shape">
        </div>
        <!-- End Shape -->
        <div class="container">
            <div class="testimonial-items">
                <div class="row align-center">
                    <div class="col-lg-7 review">
                        <h2>What people say about us</h2>
                        <div class="testimonial-carousel owl-carousel owl-theme">
                            <!-- Single Item -->
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('') }}front/assets/img/teams/1.jpg" alt="Author">
                                </div>
                                <div class="info">
                                    <p>
                                        Otherwise concealed favourite frankness on be at dashwoods defective at. Sympathize interested simplicity at do projecting increasing terminated. As edward settle limits at in. Chamber reached do he nothing be. 
                                    </p>
                                    <h4>Ahel Natasha</h4>
                                    <span> Managing Director</span>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('') }}front/assets/img/teams/2.jpg" alt="Author">
                                </div>
                                <div class="info">
                                    <p>
                                        Otherwise concealed favourite frankness on be at dashwoods defective at. Sympathize interested simplicity at do projecting increasing terminated. As edward settle limits at in. Chamber reached do he nothing be. 
                                    </p>
                                    <h4>Ahel Natasha</h4>
                                    <span> Managing Director</span>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                    <div class="col-lg-5 thum">
                        <img src="{{ asset('') }}front/assets/img/illustration/12.png" alt="illustration">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials Area -->

    <!-- Start Pricing 
    ============================================= -->
    <div id="pricing" class="pricing-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Our Packages</h2>
                        <div class="devider"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="pricing-items">
                <div class="row">
                    <!-- Single Itme -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="pricing-item">
                            <div class="pricing-header">
                                <h4>Trial Version</h4>
                                <span>Save 25%</span>
                                <h2><sup>$</sup>0 <sub>/ Monthly</sub></h2>
                            </div>
                            <ul>
                                <li>Demo file</li>
                                <li>Update</li>
                                <li>File compressed</li>
                                <li>Commercial use</li>
                                <li>Support</li>
                            </ul>
                            <div class="footer">
                                <a class="btn circle btn-theme-border btn-sm" href="#">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->

                    <!-- Single Itme -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="pricing-item">
                            <div class="pricing-header">
                                <h4>Regular</h4>
                                <span>Save 35%</span>
                                <h2><sup>$</sup>29 <sub>/ Monthly</sub></h2>
                            </div>
                            <ul>
                                <li>Demo file</li>
                                <li>Update</li>
                                <li>File compressed</li>
                                <li>Commercial use</li>
                                <li>Support</li>
                            </ul>
                            <div class="footer">
                                <a class="btn circle btn-theme-effect btn-sm" href="#">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->

                    <!-- Single Itme -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="pricing-item">
                            <div class="pricing-header">
                                <h4>Extended</h4>
                                <span>Save 49%</span>
                                <h2><sup>$</sup>59 <sub>/ Monthly</sub></h2>
                            </div>
                            <ul>
                                <li>Demo file</li>
                                <li>Update</li>
                                <li>File compressed</li>
                                <li>Commercial use</li>
                                <li>Support</li>
                            </ul>
                            <div class="footer">
                                <a class="btn circle btn-theme-border btn-sm" href="#">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Pricing Area -->

    <!-- Start Blog 
    ============================================= -->
    <div id="blog" class="blog-area default-padding-top bg-gray bottom-less">
        <!-- Shape -->
        <div class="fixed-shape-bottom">
            <img src="{{ asset('') }}front/assets/img/shape/6.png" alt="Shape">
        </div>
        <!-- End Shape -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Latest News</h2>
                        <div class="devider"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <!-- Single item -->
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item">
                        <div class="thumb">
                            <a href="blog-single-with-sidebar.html"><img src="{{ asset('') }}front/assets/img/blog/1.jpg" alt="Thumb"></a>
                            <div class="date"><strong>18</strong> <span>Apr</span></div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-user"></i> User</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-comments"></i> 26 Comments</a>
                                    </li>
                                </ul>
                            </div>
                            <h4>
                                <a href="blog-single-with-sidebar.html">Overcame breeding or my concerns removing desirous.</a>
                            </h4>
                            <p>
                                Possession ye no mr unaffected remarkably at. Wrote house in never fruit up. Pasture imagine my garrets.  
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Single item -->

                <!-- Single item -->
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item">
                        <div class="thumb">
                            <a href="blog-single-with-sidebar.html"><img src="{{ asset('') }}front/assets/img/blog/2.jpg" alt="Thumb"></a>
                            <div class="date"><strong>25</strong> <span>Aug</span></div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-user"></i> Admin</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-comments"></i> 35 Comments</a>
                                    </li>
                                </ul>
                            </div>
                            <h4>
                                <a href="blog-single-with-sidebar.html">Considered imprudence of he friendship boisterous.</a>
                            </h4>
                            <p>
                                Possession ye no mr unaffected remarkably at. Wrote house in never fruit up. Pasture imagine my garrets.  
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Single item -->

                <!-- Single item -->
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item">
                        <div class="thumb">
                            <a href="blog-single-with-sidebar.html"><img src="{{ asset('') }}front/assets/img/blog/3.jpg" alt="Thumb"></a>
                            <div class="date"><strong>05</strong> <span>Jul</span></div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-user"></i> user</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-comments"></i> 12 Comments</a>
                                    </li>
                                </ul>
                            </div>
                            <h4>
                                <a href="blog-single-with-sidebar.html">Overcame breeding or my concerns removing desirous.</a>
                            </h4>
                            <p>
                                Possession ye no mr unaffected remarkably at. Wrote house in never fruit up. Pasture imagine my garrets.  
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Single item -->

            </div>
        </div>
    </div>
    <!-- End Blog -->

    <!-- Start Contact Area 
    ============================================= -->
    <div id="contact" class="contact-area default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-5 info">
                    <h2>Let's talk?</h2>
                    <p>
                        It's all about the humans behind a brand and those experiencing it, we're right there. In the middle.
                    </p>
                    <ul>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <p>
                                22 Baker Street, <br> London, United Kingdom, <br> W1U 3BW
                            </p>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <p>
                                +44-20-7328-4499 <br> +99-34-8878-9989
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 offset-lg-1 contact-form-box">
                    <div class="form-box">
                        <form action="https://validthemes.live/themeforest/softar/{{ asset('') }}front/assets/mail/contact.php" method="POST" class="contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        Send Message <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->

    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="f-items default-padding">
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
            </div>
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