<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> ARCHITO   |   Home-1</title>

    <!-- fav icon -->
    <link rel="icon" href="{{asset('front/assets/images/fav-icon/fav-icon.png')}}">

    <!-- bootstarp -->
    <link rel="stylesheet" href="{{asset('front/css/vendors/bootstrap.min.css')}}">

    <!-- Fancybox -->
    <link rel="stylesheet" href="{{asset('front/css/vendors/jquery.fancybox.min.css')}}">

    <!-- animate.css file -->
    <link rel="stylesheet" href="{{asset('front/css/vendors/animate.css')}}">

    <!-- Swiper -->
    <link rel="stylesheet" href="{{asset('front/css/vendors/swiper.min.css')}}">

    <!-- Splitting -->
    <link rel="stylesheet" href="{{asset('front/css/vendors/splitting.css')}}">

    <!-- TwentyTwenty -->
    <link rel="stylesheet" href="{{asset('front/css/vendors/twentytwenty.css')}}">

    <!-- fontAwesome -->
    <link rel="stylesheet" href="{{asset('front/css/vendors/all.min.css')}}">

    <!-- Font Family -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;500;600;700;800;900&amp;family=Poppins:wght@400;500;600;700;800;900&amp;display=swap">

    <!-- main-LTR-1 -->
    <link rel="stylesheet" href="{{asset('front/css/main-LTR-1.css')}}">
</head>
<body class="dark-theme   overlay-is-grey hard-squared-btns ">
<!--Start Page Header-->
<header class=" page-header dark-header menu-on-end " id="page-header">
    <div class="header-search-box">
        <div class="close-search"></div>
        <form class="nav-search search-form" role="search" method="get" action="#">
            <div class="search-wraper">
                <label class="search-lbl">Search for:</label>
                <input class="search-input" type="search" placeholder="Search..." name="searchInput" autofocus="autofocus"/>
                <button class="search-btn" type="submit"><i class="fas fa-search icon"></i></button>
            </div>
        </form>
    </div>
    <!--start navbar-->
    <div class="container">
        <nav class="main-navbar " id="main-nav"><a class="navbar-brand " href="#"><img class="brand-logo light-logo img-fluid " src="{{asset(\App\Models\PhotoSetting::where('name', 'logo_' . app()->getLocale())->first()->image)}}" alt="site logo"/><img class="brand-logo dark-logo img-fluid " src="{{asset(\App\Models\PhotoSetting::where('name', 'logo_' . app()->getLocale())->first()->image)}}" alt="site logo"/></a>
            <div class="menu-toggler-btn"><span></span><span></span><span></span></div>
            <div class=" navbar-menu-wraper  " id="navbar-menu-wraper">
                <ul class="navbar-nav  mobile-menu ">
                    <li class="nav-item has-sub-menu"><a class="nav-link   active" href="#0">home<i class="fas fa-chevron-down down-Arrow-icon"> </i></a>
                        <ul class="sub-menu ">
                            <li class="nav-item sub-menu-item"><a class="nav-link sub-menu-link  " href="home-1_dark.html">home-1</a></li>
                            <li class="nav-item sub-menu-item"><a class="nav-link sub-menu-link  " href="home-2_dark.html">home-2</a></li>
                            <li class="nav-item sub-menu-item"><a class="nav-link sub-menu-link  " href="home-3_dark.html">home-3</a></li>
                            <li class="nav-item sub-menu-item"><a class="nav-link sub-menu-link  " href="home-4_dark.html">home-4</a></li>
                            <li class="nav-item sub-menu-item"><a class="nav-link sub-menu-link  " href="home-5_dark.html">home-5</a></li>
                            <li class="nav-item sub-menu-item"><a class="nav-link sub-menu-link  " href="home-6_dark.html">home-6</a></li>
                            <li class="nav-item sub-menu-item"><a class="nav-link sub-menu-link  " href="home-1-rtl_dark.html">home-1 RTL</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link  " href="about-us_dark.html">about us </a></li>
                    <li class="nav-item has-sub-menu"><a class="nav-link  " href="#0">services<i class="fas fa-chevron-down down-Arrow-icon"> </i></a>
                        <ul class="sub-menu ">
                            <li class="nav-item sub-menu-item"><a class="nav-link sub-menu-link  " href="services-1_dark.html">services-1 </a></li>
                            <li class="nav-item sub-menu-item"><a class="nav-link sub-menu-link  " href="services-2_dark.html">services-2 </a></li>
                        </ul>
                    </li>
                    <li class="nav-item has-sub-menu"><a class="nav-link  " href="#0">portfolio<i class="fas fa-chevron-down down-Arrow-icon"> </i></a>
                        <ul class="sub-menu ">
                            <li class="nav-item sub-menu-item"><a class="nav-link sub-menu-link  " href="portfolio-grid_dark.html">portfolio grid</a></li>
                            <li class="nav-item sub-menu-item"><a class="nav-link sub-menu-link  " href="portfolio-grid-rounded_dark.html">portfolio grid rounded </a></li>
                            <li class="nav-item sub-menu-item"><a class="nav-link sub-menu-link  " href="portfolio-slider_dark.html">portfolio slider</a></li>
                            <li class="nav-item sub-menu-item"><a class="nav-link sub-menu-link  " href="portfolio-single_dark.html">portfolio single</a></li>
                        </ul>
                    </li>
                    <li class="nav-item has-sub-menu"><a class="nav-link  " href="#0">blog<i class="fas fa-chevron-down down-Arrow-icon"> </i></a>
                        <ul class="sub-menu ">
                            <li class="nav-item sub-menu-item has-sub-menu"><a class="nav-link sub-menu-link " href="#0">blog home<i class="fas fa-chevron-down down-Arrow-icon"></i></a>
                                <ul class="sub-menu">
                                    <li class="nav-item sub-menu-item"><a class="nav-link sub-menu-link  " href="blog-home-1-col_dark.html">blog home 1</a></li>
                                    <li class="nav-item sub-menu-item"><a class="nav-link sub-menu-link  " href="blog-home-2-col_dark.html">blog home 2  </a></li>
                                    <li class="nav-item sub-menu-item"><a class="nav-link sub-menu-link  " href="blog-home-3-col_dark.html">blog home 3  </a></li>
                                </ul>
                            </li>
                            <li class="nav-item sub-menu-item"><a class="nav-link sub-menu-link  " href="post-single_dark.html">single post</a></li>
                        </ul>
                    </li>
                    <li class="nav-item has-sub-menu"><a class="nav-link  " href="#0">pages<i class="fas fa-chevron-down down-Arrow-icon"> </i></a>
                        <ul class="sub-menu ">
                            <li class="nav-item sub-menu-item"><a class="nav-link sub-menu-link  " href="testimonials_dark.html">testimonials</a></li>
                            <li class="nav-item sub-menu-item"><a class="nav-link sub-menu-link  " href="our-team_dark.html">our team</a></li>
                            <li class="nav-item sub-menu-item"><a class="nav-link sub-menu-link  " href="faq_dark.html">FAQ</a></li>
                            <li class="nav-item sub-menu-item"><a class="nav-link sub-menu-link  " href="404_dark.html">404</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link  " href="contact-us_dark.html">contact us </a></li>
                </ul>
            </div>
            <div class="header-search-btn">
                <svg class="search-icon" width="60" height="60" viewBox="0 0 60 60">
                    <g transform="translate(-1460 -905)">
                        <g transform="translate(1460 905)">
                            <g transform="translate(0 0)">
                                <path class="search-path" d="M59.634,56.1,42.2,38.669A23.8,23.8,0,1,0,38.669,42.2L56.1,59.634a1.25,1.25,0,0,0,1.768,0l1.767-1.767A1.25,1.25,0,0,0,59.634,56.1ZM23.75,42.5A18.75,18.75,0,1,1,42.5,23.75,18.771,18.771,0,0,1,23.75,42.5Z" transform="translate(0 0)"></path>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
        </nav>
    </div>
</header>
<!--End Page Header-->
<!-- Start  Page hero-->
<section class="page-hero hero-swiper-slider slider-fade off-grid-text  d-flex align-items-center" id="page-hero">
    <div class="overlay-photo-image-bg "></div>
    <div class="overlay-color"></div>
    <div class="hero-social-icons center-position start-align  ">
        <div class="sc-wraper dir-col sc-flat ">
            <ul class="sc-list">
                <li class="sc-item " title="Facebook"><a class="sc-link" href="#0"><i class="fab fa-facebook-f sc-icon"></i></a></li>
                <li class="sc-item " title="youtube"><a class="sc-link" href="#0"><i class="fab fa-youtube sc-icon"></i></a></li>
                <li class="sc-item " title="instagram"><a class="sc-link" href="#0"><i class="fab fa-instagram sc-icon"></i></a></li>
                <li class="sc-item " title="twitter"><a class="sc-link" href="#0"><i class="fab fa-x-twitter sc-icon"></i></a></li>
            </ul>
        </div>
    </div>
    <!--Start  Swiper JS slider-->
    <div class="slider swiper-container">
        <div class="swiper-wrapper ">
            <!--first slider-->
            <div class="swiper-slide">
                <div class="slide-content">
                    <div class="slider-bg">
                        <div class="overlay-color"></div><img class="slider-bg-img" src="{{asset('front/assets/images/hero/hero-slider-bg-img-1-small.jpg')}}" alt="slider-bg 1">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12  offset-xl-1  col-lg-8   ">
                                <div class="hero-text-area   ">
                                    <div class="tag-line wow fadeInDown" data-wow-offset="0" data-wow-delay=".2s">interior             </div>
                                    <h1 class="slide-title " data-splitting="chars">Innovating stunning <br> interior designs</h1>
                                    <p class="slide-subtitle">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Sed
                                        architecto dolorum inventore totam adipisci provident placeat perspiciatis

                                    </p>
                                    <div class="cta-links-area wow  fadeInUp " data-wow-delay="0.8s"><a class=" ma-btn-primary cta-link cta-link-primary " href="#0">start now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--second slider-->
            <div class="swiper-slide">
                <div class="slide-content">
                    <div class="slider-bg">
                        <div class="overlay-color"></div><img class="slider-bg-img" src="{{asset('front/assets/images/hero/hero-slider-bg-img-2-small.jpg')}}" alt="slider-bg 2">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12  offset-xl-1 col-lg-8  ">
                                <div class="hero-text-area ">
                                    <div class="tag-line wow fadeInDown" data-wow-offset="0" data-wow-delay=".2s">architecture    </div>
                                    <h1 class="slide-title " data-splitting="chars">graet &amp; solid <br> architecture solutions</h1>
                                    <p class="slide-subtitle">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Sed
                                        architecto dolorum inventore totam adipisci provident placeat perspiciatis

                                    </p>
                                    <div class="cta-links-area wow  fadeInUp " data-wow-delay="0.8s"><a class=" ma-btn-primary cta-link cta-link-primary  " href="#0">start now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--third slider-->
            <div class="swiper-slide">
                <div class="slide-content">
                    <div class="slider-bg">
                        <div class="overlay-color"></div><img class="slider-bg-img" src="{{asset('front/assets/images/hero/hero-slider-bg-img-3-small.jpg')}}" alt="slider-bg 3">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12  offset-xl-1  col-lg-8  ">
                                <div class="hero-text-area  ">
                                    <div class="tag-line wow fadeInDown" data-wow-offset="0" data-wow-delay=".2s ">furniture             </div>
                                    <h1 class="slide-title " data-splitting="chars"> {{}}</h1>
                                    <p class="slide-subtitle">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Sed
                                        architecto dolorum inventore totam adipisci provident placeat perspiciatis
                                    </p>
                                    <div class="cta-links-area wow  fadeInUp " data-wow-delay="0.8s"><a class=" ma-btn-primary cta-link cta-link-primary  " href="#0">start now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Add Pagination-->
        <div class="swiper-pagination wow fadeInUp" data-wow-offset="0" data-wow-delay=".2s"></div>
        <!--Add Arrows -->
        <div class="slider-stacked-arrows">
            <div class="swiper-button-prev  wow fadeInRight" data-wow-offset="0" data-wow-delay=".2s">
                <div class="left-arrow"><i class="fas fa-arrow-left icon "></i>
                </div>
            </div>
            <div class="swiper-button-next wow fadeInRight" data-wow-offset="0" data-wow-delay=".4s">
                <div class="right-arrow"><i class="fas fa-arrow-right icon "></i>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End  Page hero-->
<!-- Start  about Section-->
<section class="about mega-section" id="about">
    <div class="container">
        <!-- Start first about div-->
        <div class="content-block  ">
            <div class="row">
                <div class="col-12 col-lg-6 d-flex align-items-center about-col wow fadeInUp" data-wow-delay="0.4s">
                    <div class="img-area framed show-video  ">
                        <div class="overlay-color"></div><img class="img-fluid about-img  video-thumb " src="{{asset('front/assets/images/about/3.jpg')}}" alt="Our vision">
                        <div class="video-wraper">
                            <div class="play-btn-col-dir"><a class="video-link" href="https://www.youtube.com/watch?v=3mKUjHLg_z4" role="button" data-fancybox="data-fancybox">
                                    <div class="play-video-btn">
                                        <div class="play-btn"> <img class="img-fluid play-icon" src="{{asset('front/assets/images/icons/play-icon.svg')}}" alt=""/></div>
                                    </div></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 d-flex align-items-center about-col pad-start wow fadeInUp" data-wow-delay="0.6s">
                    <div class="text-area "><span class="tag-line">about Us</span>
                        <div class="section-heading side-heading  light-title">
                            <h2 class="section-title wow" data-splitting="chars">we can get your dreams came true </h2>
                        </div>
                        <p class=" first-p">
                            Lorem ipsum dolor, sit amet consectetur
                            adipisicing elit.
                            Distinctio,
                            aliquam est!
                            rerum inventore animi at iusto
                            totam sunt accusamus quia

                        </p>
                        <div class="info-items-grid ">
                            <div class="row ">
                                <div class="col-12 col-md-6">
                                    <div class="info-item wow fadeInUp" data-wow-delay=".2s">
                                        <h5 class="item-title"><i class="fas fa-chess-rook item-icon"></i>Planning </h5>
                                        <p class="item-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.       </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="info-item wow fadeInUp" data-wow-delay=".4s">
                                        <h5 class="item-title"><i class="fas fa-database item-icon"></i>designing </h5>
                                        <p class="item-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.       </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="info-item wow fadeInUp" data-wow-delay=".6s">
                                        <h5 class="item-title"><i class="fas fa-chart-line item-icon"></i>building </h5>
                                        <p class="item-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.       </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="info-item wow fadeInUp" data-wow-delay=".8s">
                                        <h5 class="item-title"><i class="fas fa-layer-group item-icon"></i>deliver </h5>
                                        <p class="item-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.       </p>
                                    </div>
                                </div>
                            </div>
                        </div><a class=" ma-btn-primary " href="about-us_dark.html">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
        <!--End first about div-->
    </div>
</section>
<!-- End  about Section-->
<!-- Start  services Section-->
<section class="services-bg-img text-center mega-section half-bg-img  " id="services">
    <div class="overlay-photo-image-bg   parallax"></div>
    <div class="overlay-color"></div>
    <div class="container">
        <div class="section-heading center-heading">
            <h2 class="section-title wow" data-splitting="chars">services we offer</h2>
            <div class="line-on-center wow fadeIn" data-wow-delay=".6s"></div>
        </div>
        <div class="row  g-0  services-row">
            <div class="col-12 col-md-9  col-lg-4 mx-auto">
                <!--Start First service box-->
                <div class="service-box  wow fadeInUp" data-wow-offset="0" data-wow-delay=".2s">
                    <div class="bg-img">
                        <div class="overlay-color"></div><img class="service-bg-img" src="{{asset('front/assets/images/services/service-bg-1.jpg')}}" alt="service-bg"/>
                    </div>
                    <div class="service-icon"><i class="fas fa-pencil-ruler font-icon"></i></div>
                    <div class="service-content">
                        <h3 class="service-title">Creative Solutions</h3>
                        <p class="service-text">
                            Lorem ipsum dolor sit amet consecltetur adipisicing elit. Omnis tempore
                            perferendis
                            explicabo.
                        </p>
                    </div><a class="read-more" href="#0">read more<i class="fas fa-arrow-right icon ">           </i></a>
                </div>
                <!-- End First service box                    -->
            </div>
            <div class="col-12 col-md-9  col-lg-4 mx-auto">
                <!--Start Second service box-->
                <div class="service-box  wow fadeInUp" data-wow-offset="0" data-wow-delay=".4s">
                    <div class="bg-img">
                        <div class="overlay-color"></div><img class="service-bg-img" src="{{asset('front/assets/images/services/service-bg-2.jpg')}}" alt="service-bg"/>
                    </div>
                    <div class="service-icon"><i class="fas fa-drafting-compass font-icon"></i></div>
                    <div class="service-content">
                        <h3 class="service-title">Solid Development</h3>
                        <p class="service-text">
                            Lorem ipsum dolor sit amet consecltetur adipisicing elit. Omnis tempore
                            perferendis
                            explicabo.
                        </p>
                    </div><a class="read-more" href="#0">read more<i class="fas fa-arrow-right icon ">           </i></a>
                </div>
                <!-- End Second service box-->
            </div>
            <div class="col-12 col-md-9  col-lg-4 mx-auto">
                <!--Start Third service box-->
                <div class="service-box  wow fadeInUp" data-wow-offset="0" data-wow-delay=".6s">
                    <div class="bg-img">
                        <div class="overlay-color"></div><img class="service-bg-img" src="{{asset('front/assets/images/services/service-bg-3.jpg')}}" alt="service-bg"/>
                    </div>
                    <div class="service-icon"><i class="fas fa-layer-group font-icon"></i></div>
                    <div class="service-content">
                        <h3 class="service-title">awesome Designs</h3>
                        <p class="service-text">
                            Lorem ipsum dolor sit amet consecltetur adipisicing elit. Omnis tempore
                            perferendis
                            explicabo.
                        </p>
                    </div><a class="read-more" href="#0">read more<i class="fas fa-arrow-right icon ">           </i></a>
                </div>
                <!-- End Third service box-->
            </div>
        </div>
    </div>
</section>
<!-- End  services Section-->
<!-- Start  compare-before-after-->
<section class="compare mega-section section-bg-shade" id="compare">
    <div class="container">
        <div class="section-heading center-heading">
            <h2 class="section-title wow" data-splitting="chars">amazing  Transformation</h2>
            <p class="section-subtitle wow fadeInUp" data-wow-delay=".5s"> Drag the slider handel to See the diffrences after project completed</p>
            <div class="line-on-center wow fadeIn" data-wow-delay=".6s"></div>
        </div>
        <div class="before-after" id="before-after">
            <!-- The before image is first--><img src="{{asset('front/assets/images/portfolio/before.jpg')}}" alt="before">
            <!--  The after image is last--><img src="{{asset('front/assets/images/portfolio/after.jpg')}}" alt="after">
        </div>
    </div>
</section>
<!-- End  compare-before-after-->
<!-- Start  portfolio Section-->
<section class="portfolio mega-section section-bg-shade  " id="portfolio">
    <div class="overlay-photo-image-bg"></div>
    <div class="container">
        <div class="section-heading center-heading">
            <h2 class="section-title wow" data-splitting="chars">a portfolio of our work</h2>
            <div class="line-on-center wow fadeIn" data-wow-delay=".6s"></div>
        </div>
        <div class="portfolio-wraper  ">
            <!--a menu of links to show the photos users needs   -->
            <ul class="portfolio-btn-list ">
                <li class="portfolio-btn active " data-filter="*">all</li>
                <li class="portfolio-btn        " data-filter=".exterior">exterior</li>
                <li class="portfolio-btn        " data-filter=".interior">interior</li>
                <li class="portfolio-btn        " data-filter=".furniture">furniture</li>
                <li class="portfolio-btn        " data-filter=".residential">residential</li>
            </ul>
            <div class="portfolio-group wow fadeIn" data-wow-delay=".2s">
                <div class="row  g-0 ">
                    <div class="col-12  col-sm-6  col-lg-4  portfolio-item exterior ">
                        <div class="item"><a class="portfolio-img-link " href="{{asset('front/assets/images/portfolio/1.jpg')}}" data-fancybox=".filter">
                                <div class="overlay overlay-color"></div><img class="portfolio-img  img-fluid " src="{{asset('front/assets/images/portfolio/1.jpg')}}" alt="portfolio item photo"><i class="fas fa-arrow-right icon"></i></a>
                            <div class="item-info "><span class="info-title">exterior   </span>
                                <ul class="tags-list">
                                    <li class="tag-item"> <a class="tag-link" href="#">lights</a></li>
                                    <li class="tag-item"> <a class="tag-link" href="#">decoration </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12  col-sm-6  col-lg-4  portfolio-item interior  ">
                        <div class="item"><a class="portfolio-img-link " href="{{asset('front/assets/images/portfolio/2.jpg')}}" data-fancybox=".filter">
                                <div class="overlay overlay-color"></div><img class="portfolio-img  img-fluid " src="{{asset('front/assets/images/portfolio/2.jpg')}}" alt="portfolio item photo"><i class="fas fa-arrow-right icon"></i></a>
                            <div class="item-info "><span class="info-title">interior   </span>
                                <ul class="tags-list">
                                    <li class="tag-item"> <a class="tag-link" href="#">simple</a></li>
                                    <li class="tag-item"> <a class="tag-link" href="#">fancy  </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12  col-sm-6  col-lg-4  portfolio-item furniture ">
                        <div class="item"><a class="portfolio-img-link " href="{{asset('front/assets/images/portfolio/3.jpg')}}" data-fancybox=".filter">
                                <div class="overlay overlay-color"></div><img class="portfolio-img  img-fluid " src="{{asset('front/assets/images/portfolio/3.jpg')}}" alt="portfolio item photo"><i class="fas fa-arrow-right icon"></i></a>
                            <div class="item-info "><span class="info-title">furniture  </span>
                                <ul class="tags-list">
                                    <li class="tag-item"> <a class="tag-link" href="#">classic</a></li>
                                    <li class="tag-item"> <a class="tag-link" href="#">modern  </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12  col-sm-6  col-lg-4  portfolio-item exterior ">
                        <div class="item"><a class="portfolio-img-link " href="{{asset('front/assets/images/portfolio/4.jpg')}}" data-fancybox=".filter">
                                <div class="overlay overlay-color"></div><img class="portfolio-img  img-fluid " src="{{asset('front/assets/images/portfolio/4.jpg')}}" alt="portfolio item photo"><i class="fas fa-arrow-right icon"></i></a>
                            <div class="item-info "><span class="info-title">exterior</span>
                                <ul class="tags-list">
                                    <li class="tag-item"> <a class="tag-link" href="#">modern</a></li>
                                    <li class="tag-item"> <a class="tag-link" href="#">luxery</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12  col-sm-6  col-lg-4  portfolio-item residential ">
                        <div class="item"><a class="portfolio-img-link " href="{{asset('front/assets/images/portfolio/5.jpg')}}" data-fancybox=".filter">
                                <div class="overlay overlay-color"></div><img class="portfolio-img  img-fluid " src="{{asset('front/assets/images/portfolio/5.jpg')}}" alt="portfolio item photo"><i class="fas fa-arrow-right icon"></i></a>
                            <div class="item-info "><span class="info-title">residential</span>
                                <ul class="tags-list">
                                    <li class="tag-item"> <a class="tag-link" href="#">simple</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12  col-sm-6  col-lg-4  portfolio-item exterior">
                        <div class="item"><a class="portfolio-img-link " href="{{asset('front/assets/images/portfolio/6.jpg')}}" data-fancybox=".filter">
                                <div class="overlay overlay-color"></div><img class="portfolio-img  img-fluid " src="{{asset('front/assets/images/portfolio/6.jpg')}}" alt="portfolio item photo"><i class="fas fa-arrow-right icon"></i></a>
                            <div class="item-info "><span class="info-title">exterior</span>
                                <ul class="tags-list">
                                    <li class="tag-item"> <a class="tag-link" href="#">luxery</a></li>
                                    <li class="tag-item"> <a class="tag-link" href="#">high class </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Start .see-more-area-->
        <div class=" see-more-area   wow fadeInUp" data-wow-delay="0s"> <a class=" ma-btn-primary " href="#0">see our portfolio</a></div>
        <!--End .see-more-area-->
    </div>
</section>
<!-- End  portfolio Section-->
<!-- Start  our-clients Section-->
<section class="our-clients our-clients-blocks  mega-section " id="our-clients">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 align-self-center">
                <div class="tag-line wow fadeInDown" data-wow-delay="0s">our clients</div>
                <div class="section-heading side-heading light-title ">
                    <h2 class="section-title wow" data-splitting="chars">meet our satisfied clients </h2>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="row blocks-row">
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="client-block wow fadeInUp" data-wow-delay="0.2s"><a href="#0"><img class="img-fluid logo " src="{{asset('front/assets/images/clients-logos/1-white.png')}}" alt="client logo "></a></div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="client-block wow fadeInUp" data-wow-delay="0.2s"><a href="#0"><img class="img-fluid logo " src="{{asset('front/assets/images/clients-logos/2-white.png')}}" alt="client logo "></a></div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="client-block wow fadeInUp" data-wow-delay="0.2s"><a href="#0"><img class="img-fluid logo " src="{{asset('front/assets/images/clients-logos/3-white.png')}}" alt="client logo "></a></div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="client-block wow fadeInUp" data-wow-delay="0.2s"><a href="#0"><img class="img-fluid logo " src="{{asset('front/assets/images/clients-logos/4-white.png')}}" alt="client logo "></a></div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="client-block wow fadeInUp" data-wow-delay="0.2s"><a href="#0"><img class="img-fluid logo " src="{{asset('front/assets/images/clients-logos/5-white.png')}}" alt="client logo "></a></div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="client-block wow fadeInUp" data-wow-delay="0.2s"><a href="#0"><img class="img-fluid logo " src="{{asset('front/assets/images/clients-logos/6-white.png')}}" alt="client logo "></a></div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="client-block wow fadeInUp" data-wow-delay="0.2s"><a href="#0"><img class="img-fluid logo " src="{{asset('front/assets/images/clients-logos/7-white.png')}}" alt="client logo "></a></div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="client-block wow fadeInUp" data-wow-delay="0.2s"><a href="#0"><img class="img-fluid logo " src="{{asset('front/assets/images/clients-logos/8-white.png')}}" alt="client logo "></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End  our-clients Section-->
<!-- Start  testimonials Section-->
<section class="testimonials  testimonials-1-col off-grid bg-img-section d-flex align-items-center mega-section section-bg-shade " id="testimonials-off-grid-1-col">
    <div class="overlay-photo-image-bg parallax"></div>
    <div class="overlay-color"></div>
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-12 col-lg-4 ">
                <div class="tag-line wow fadeInDown" data-wow-delay="0s">testmonials</div>
                <div class="section-heading side-heading light-title ">
                    <h2 class="section-title wow" data-splitting="chars">our clients Feedback about their experience with us </h2>
                </div>
                <!--Start .see-more-area-->
                <div class=" see-more-area d-none  d-lg-flex justify-content-start wow fadeInUp " data-wow-delay="0.4s"><a class=" ma-btn-secondary " href="testimonials_dark.html">see all testimonials</a></div>
                <!--End Of .see-more-area               -->
            </div>
            <div class="col-12 col-lg-8">
                <div class="swiper-container  wow fadeIn  " data-wow-delay="0s">
                    <div class="swiper-wrapper">
                        <!--First Slide-->
                        <div class="swiper-slide">
                            <div class="testmonial-box d-flex align-items-center justify-content-center">
                                <div class="testimonial-content">
                                    <div class="customer-info "><img class="img-fluid " src="{{asset('front/assets/images/testimonials/1.jpg')}}" alt="First Slide ">
                                        <div class="customer-details">
                                            <p class="customer-name">aly ahmed</p>
                                            <p class="customer-role">manager</p>
                                        </div>
                                    </div>
                                    <div class="customer-testimonial"><i class="fas fa-quote-left   icon"></i>
                                        <div class="rating-stars"><i class="fas fa-star star-icon"></i><i class="fas fa-star star-icon"></i><i class="fas fa-star star-icon"></i><i class="fas fa-star star-icon"></i><i class="fas fa-star star-icon off"></i></div>
                                        <div class="content">
                                            <p class="testimonial-text ">
                                                ipsum
                                                dolor sit amet consectetur adipisicing elit. Quod, id sequi aut qui est
                                                ab,
                                                corporis quis maiores reiciendis explicabo odio tenetur nulla sint vel.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Second Slide-->
                        <div class="swiper-slide">
                            <div class="testmonial-box d-flex align-items-center justify-content-center">
                                <div class="testimonial-content">
                                    <div class="customer-info "><img class="img-fluid " src="{{asset('front/assets/images/testimonials/2.jpg')}}" alt="First Slide ">
                                        <div class="customer-details">
                                            <p class="customer-name">allan smith</p>
                                            <p class="customer-role">manager</p>
                                        </div>
                                    </div>
                                    <div class="customer-testimonial"><i class="fas fa-quote-left   icon"></i>
                                        <div class="rating-stars"><i class="fas fa-star star-icon"></i><i class="fas fa-star star-icon"></i><i class="fas fa-star star-icon"></i><i class="fas fa-star star-icon"></i><i class="fas fa-star star-icon off"></i></div>
                                        <div class="content">
                                            <p class="testimonial-text ">
                                                ipsum
                                                dolor sit amet consectetur adipisicing elit. Quod, id sequi aut qui est
                                                ab,
                                                corporis quis maiores reiciendis explicabo odio tenetur nulla sint vel.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--third Slide-->
                        <div class="swiper-slide">
                            <div class="testmonial-box d-flex align-items-center justify-content-center">
                                <div class="testimonial-content">
                                    <div class="customer-info "><img class="img-fluid " src="{{asset('front/assets/images/testimonials/3.jpg')}}" alt="First Slide ">
                                        <div class="customer-details">
                                            <p class="customer-name">maya Ahmed</p>
                                            <p class="customer-role">manager</p>
                                        </div>
                                    </div>
                                    <div class="customer-testimonial"><i class="fas fa-quote-left   icon"></i>
                                        <div class="rating-stars"><i class="fas fa-star star-icon"></i><i class="fas fa-star star-icon"></i><i class="fas fa-star star-icon"></i><i class="fas fa-star star-icon"></i><i class="fas fa-star star-icon off"></i></div>
                                        <div class="content">
                                            <p class="testimonial-text ">
                                                ipsum
                                                dolor sit amet consectetur adipisicing elit. Quod, id sequi aut qui est
                                                ab,
                                                corporis quis maiores reiciendis explicabo odio tenetur nulla sint vel.




                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--navigation buttons-->
                    <div class="swiper-button-prev">
                        <div class="left-arrow"><i class="fas fa-arrow-left icon "></i>
                        </div>
                    </div>
                    <div class="swiper-button-next">
                        <div class="right-arrow"><i class="fas fa-arrow-right icon "></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Start .see-more-area-->
        <div class=" see-more-area d-block d-lg-none wow fadeInUp text-center" data-wow-delay="0.4s"><a class=" ma-btn-secondary " href="testimonials_dark.html">see all testimonials</a></div>
        <!--End Of .see-more-area           -->
    </div>
</section>
<!-- End  testimonials Section-->
<!-- Start  our-team Section-->
<section class="our-team mega-section " id="our-team">
    <div class="container">
        <div class="section-heading center-heading">
            <h2 class="section-title wow" data-splitting="chars">Talanted team members</h2>
            <div class="line-on-center wow fadeIn" data-wow-delay=".6s"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <!--first Team Member-->
            <div class="col-12 col-md-8  col-lg-4 mx-md-auto ">
                <div class="tm-member-card   wow   fadeInUp" data-wow-delay="0.2s">
                    <div class="tm-image ">
                        <div class="overlay overlay-color"> </div><img class="img-fluid " src="{{asset('front/assets/images/our-team/1.jpg')}}" alt="Team Member 1">
                        <div class="tm-desc">
                            <div class="sc-wraper dir-row sc-size-40">
                                <ul class="sc-list">
                                    <li class="sc-item " title="Facebook"><a class="sc-link" href="#0"><i class="fab fa-facebook-f sc-icon"></i></a></li>
                                    <li class="sc-item " title="youtube"><a class="sc-link" href="#0"><i class="fab fa-youtube sc-icon"></i></a></li>
                                    <li class="sc-item " title="instagram"><a class="sc-link" href="#0"><i class="fab fa-instagram sc-icon"></i></a></li>
                                    <li class="sc-item " title="twitter"><a class="sc-link" href="#0"><i class="fab fa-x-twitter sc-icon"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tm-details">
                        <h6 class="tm-name">ahmed Aly</h6><span class="tm-role">Founder</span>
                    </div>
                </div>
            </div>
            <!--Second Team Member-->
            <div class="col-12 col-md-8  col-lg-4 mx-md-auto ">
                <div class="tm-member-card   wow   fadeInUp" data-wow-delay="0.4s">
                    <div class="tm-image ">
                        <div class="overlay overlay-color"> </div><img class="img-fluid " src="{{asset('front/assets/images/our-team/2.jpg')}}" alt="Team Member 2">
                        <div class="tm-desc">
                            <div class="sc-wraper dir-row sc-size-40">
                                <ul class="sc-list">
                                    <li class="sc-item " title="Facebook"><a class="sc-link" href="#0"><i class="fab fa-facebook-f sc-icon"></i></a></li>
                                    <li class="sc-item " title="youtube"><a class="sc-link" href="#0"><i class="fab fa-youtube sc-icon"></i></a></li>
                                    <li class="sc-item " title="instagram"><a class="sc-link" href="#0"><i class="fab fa-instagram sc-icon"></i></a></li>
                                    <li class="sc-item " title="twitter"><a class="sc-link" href="#0"><i class="fab fa-x-twitter sc-icon"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tm-details">
                        <h6 class="tm-name ">fairouz amin</h6><span class="tm-role">designer</span>
                    </div>
                </div>
            </div>
            <!--Third Team Member-->
            <div class="col-12 col-md-8  col-lg-4 mx-md-auto ">
                <div class="tm-member-card   wow   fadeInUp" data-wow-delay="0.6s">
                    <div class="tm-image ">
                        <div class="overlay overlay-color"> </div><img class="img-fluid " src="{{asset('front/assets/images/our-team/3.jpg')}}" alt="Team Member 3">
                        <div class="tm-desc">
                            <div class="sc-wraper dir-row sc-size-40">
                                <ul class="sc-list">
                                    <li class="sc-item " title="Facebook"><a class="sc-link" href="#0"><i class="fab fa-facebook-f sc-icon"></i></a></li>
                                    <li class="sc-item " title="youtube"><a class="sc-link" href="#0"><i class="fab fa-youtube sc-icon"></i></a></li>
                                    <li class="sc-item " title="instagram"><a class="sc-link" href="#0"><i class="fab fa-instagram sc-icon"></i></a></li>
                                    <li class="sc-item " title="twitter"><a class="sc-link" href="#0"><i class="fab fa-x-twitter sc-icon"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tm-details">
                        <h6 class="tm-name">Allan Smith</h6><span class="tm-role">manager</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Start see-more-area-->
    <div class="see-more-area   wow fadeInUp" data-wow-delay="0.8s"><a class=" ma-btn-primary" href="#0">see all team members </a></div>
</section>
<!-- End  our-team Section-->
<!-- Start  blog Section-->
<section class="blog blog-home mega-section section-bg-shade" id="blog">
    <div class="container ">
        <div class="section-heading center-heading">
            <h2 class="section-title wow" data-splitting="chars">latest news</h2>
            <div class="line-on-center wow fadeIn" data-wow-delay=".6s"></div>
        </div>
        <div class="row ">
            <div class="col-12 ">
                <div class="posts-grid">
                    <div class="row">
                        <div class="col-12 col-lg-6  ">
                            <div class="post-box">     <a class="post-link" href="post-single_dark.html">
                                    <div class="post-img-wraper">
                                        <div class="overlay-color"></div><i class="fas fa-arrow-right icon ">             </i><img class="post-img" src="{{asset('front/assets/images/blog/post-images/1.jpg')}}" alt=""/>
                                        <h4 class="post-date"><span class="day">05 </span>march, 2023      </h4>
                                    </div></a>
                                <div class="post-summary">
                                    <div class="post-info"><a class="info post-cat" href="#"> <i class=" fas fa-list-alt icon"></i>cloud</a><a class="info post-author" href="#"> <i class=" fas fa-user icon"></i>Allan Moore</a></div>
                                    <div class="post-text"><a class="post-link" href="post-single_dark.html">
                                            <h2 class="post-title"> love what you do to do what you love?</h2></a>
                                        <p class="post-excerpt">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                            Iure nulla dolorem, voluptates molestiae
                                        </p><a class="read-more" href="post-single_dark.html">read more<i class="fas fa-arrow-right icon "></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 ">
                            <div class="post-box">     <a class="post-link" href="post-single_dark.html">
                                    <div class="post-img-wraper">
                                        <div class="overlay-color"></div><i class="fas fa-arrow-right icon ">             </i><img class="post-img" src="{{asset('front/assets/images/blog/post-images/2.jpg')}}" alt=""/>
                                        <h4 class="post-date"><span class="day">15 </span>feb, 2023      </h4>
                                    </div></a>
                                <div class="post-summary">
                                    <div class="post-info"><a class="info post-cat" href="#"> <i class=" fas fa-list-alt icon"></i>design</a><a class="info post-author" href="#"> <i class=" fas fa-user icon"></i>mhmd amin</a></div>
                                    <div class="post-text"><a class="post-link" href="post-single_dark.html">
                                            <h2 class="post-title">  the stroy of our great fathers</h2></a>
                                        <p class="post-excerpt">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                            Iure nulla dolorem, voluptates molestiae
                                        </p><a class="read-more" href="post-single_dark.html">read more<i class="fas fa-arrow-right icon "></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End  blog Section-->
<!-- Start  take-action Section-->
<section class="subscribe stacked mega-section " id="subscribe">
    <div class="overlay-photo-image-bg "></div>
    <div class="overlay-color "></div>
    <div class="cta-wrapper">
        <div class="container">
            <div class="section-heading center-heading">
                <h2 class="section-title wow" data-splitting="chars">Subscribe to get updates</h2>
                <div class="line-on-center wow fadeIn" data-wow-delay=".6s"></div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="mc-form-wraper" id="mc_embed_signup">
                        <form class="validate mc-form" action="https://gmail.us7.list-manage.com/subscribe/post?u=7e1ce4a24acd782fd92fbd6f4&amp;amp;id=e0e553155e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">
                                <div class="mc-field-group form-group wow fadeInUp" data-wow-delay="0.4s">
                                    <label class="d-none" for="mce-EMAIL">Subscribe</label>
                                    <input class="required email input-email " type="email" value="" name="EMAIL" id="mce-EMAIL" placeholder="Email address">
                                    <!--real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                        <input type="text" name="b_59442f002934450af13bdfe82_f85a400e6a" tabindex="-1" value="">
                                    </div>
                                    <div class="clear">
                                        <input class="button ma-btn-primary subscribe-btn" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="mailchimp-alerts">
                            <div class="mc-msg mc-submitting"> </div>
                            <!-- mailchimp-submitting end -->
                            <div class="mc-msg mc-success"> </div>
                            <!-- mailchimp-success end	-->
                            <div class="mc-msg mc-error"> </div>
                            <!--mailchimp-error end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End  take-action Section-->
<!-- Start  page-footer Section-->
<footer class="page-footer dark-color-footer" id="page-footer">
    <div class="container">
        <div class="row footer-cols">
            <div class="col-12 col-md-8 col-lg-4  footer-col wow fadeInUp " data-wow-delay="0.3s">
                <h2 class=" footer-col-title  ">About archito</h2>
                <div class="footer-col-content-wrapper">
                    <p class="footer-text-about-us ">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.Voluptatibus facere modi possimus dignissimos,
                        aliquam nobis eaque? Voluptatem magnam quisquam rem.
                    </p>
                    <div class="social-icons">
                        <div class="sc-wraper dir-row sc-size-32">
                            <ul class="sc-list">
                                <li class="sc-item " title="Facebook"><a class="sc-link" href="#0"><i class="fab fa-facebook-f sc-icon"></i></a></li>
                                <li class="sc-item " title="youtube"><a class="sc-link" href="#0"><i class="fab fa-youtube sc-icon"></i></a></li>
                                <li class="sc-item " title="instagram"><a class="sc-link" href="#0"><i class="fab fa-instagram sc-icon"></i></a></li>
                                <li class="sc-item " title="twitter"><a class="sc-link" href="#0"><i class="fab fa-x-twitter sc-icon"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-2  footer-col wow fadeInUp " data-wow-delay="0.5s">
                <h2 class=" footer-col-title    ">useful links</h2>
                <div class="footer-col-content-wrapper">
                    <ul class="footer-menu ">
                        <li class="footer-menu-item"><a class="footer-menu-link" href="#0">Google</a></li>
                        <li class="footer-menu-item"><a class="footer-menu-link" href="#0">Dribbble</a></li>
                        <li class="footer-menu-item"><a class="footer-menu-link" href="#0">linkedIn</a></li>
                        <li class="footer-menu-item"><a class="footer-menu-link" href="#0">Wikipiddia</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-2 footer-col wow fadeInUp " data-wow-delay=".7s">
                <h2 class=" footer-col-title    ">Resources</h2>
                <div class="footer-col-content-wrapper">
                    <ul class="footer-menu">
                        <li class="footer-menu-item"><a class="footer-menu-link" href="#0">support</a></li>
                        <li class="footer-menu-item"><a class="footer-menu-link" href="#0">dashboard</a></li>
                        <li class="footer-menu-item"><a class="footer-menu-link" href="#0">drivers</a></li>
                        <li class="footer-menu-item"><a class="footer-menu-link" href="#0">projects</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-8   col-lg-4 footer-col wow fadeInUp " data-wow-delay=".9s">
                <h2 class=" footer-col-title    ">contact information</h2>
                <div class="footer-col-content-wrapper">
                    <div class="contact-info-card"><i class="fas fa-envelope icon"></i><a class="text-lowercase  info" href="mailto:example@support.com">example@support.com</a></div>
                    <div class="contact-info-card"><i class="fas fa-globe-africa icon"></i><a class="text-lowercase  info" href="#0">www.yoursite.com</a></div>
                    <div class="contact-info-card"><i class="fas fa-map-marker-alt icon"></i><span class="text-lowercase  info">5 Xyz st., Abc, alexandria, egypt.</span></div>
                    <div class="contact-info-card"><i class="fas fa-mobile-alt icon"></i><a class="info" href="tel:+20123456789">+20123456789      </a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyrights ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <p class="creadits">


                        &copy; 2024
                        Created by:

                        <a class="link" target="_blank" href="https://finalsolution.co/">finalsolution</a>
                    </p>
                </div>
{{--                <div class="col-12 col-md-6">--}}
{{--                    <div class="terms-links"><a href="#0">Terms of Use </a>--}}
{{--                        | <a href="#0">Privacy Policy</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</footer>
<!-- End  page-footer Section-->
<!-- Start loading-screen Component-->
<div class="loading-screen" id="loading-screen">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<!-- End loading-screen Component-->
<!-- Start back-to-top Component-->
<div class="back-to-top" id="back-to-top"><i class="fas fa-arrow-up icon"></i></div>
<!-- End back-to-top Component-->

<!--     JQuery     -->
<script src="{{asset('front/js/vendors/jquery-3.4.1.min.js')}}"></script>

<!--     bootstrap     -->
<script src="{{asset('front/js/vendors/bootstrap.bundle.min.js')}}"></script>

<!--     fancybox     -->
<script src="{{asset('front/js/vendors/jquery.fancybox.min.js')}}"></script>

<!--     countTo     -->
<script src="{{asset('front/js/vendors/jquery.countTo.js')}}"></script>

<!--     wow     -->
<script src="{{asset('front/js/vendors/wow.min.js')}}"></script>

<!--     swiper     -->
<script src="{{asset('front/js/vendors/swiper.min.js')}}"></script>

<!--     event.move     -->
<script src="{{asset('front/js/vendors/jquery.event.move.js')}}"></script>

<!--     TwentyTwenty     -->
<script src="{{asset('front/js/vendors/jquery.twentytwenty.js')}}"></script>

<!--     Splitting     -->
<script src="{{asset('front/js/vendors/splitting.min.js')}}"></script>

<!--     isotope     -->
<script src="{{asset('front/js/vendors/isotope-min.js')}}"></script>

<!--     ajaxchimp     -->
<script src="{{asset('front/js/vendors/jquery.ajaxchimp.min.js')}}"></script>

<!--     main     -->
<script src="{{asset('front/js/main.js')}}"></script>
</body>
</html>
