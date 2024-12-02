@extends('layouts.front')

@section('content')

    <link rel="stylesheet" href="{{asset('front/css/vendors/vegas.min.css')}}">

    <section class="d-flex align-items-center page-hero hero-vegas-slider inner-page-hero " id="page-hero">
        <div class="overlay-color"></div>
        <div class="vegas-slider-content" data-vegas-slide-1="{{asset($about->banner1)}}" data-vegas-slide-2="{{ asset($about->banner2)}}">
            <div class="container">
                <div class="row">
                    <div class="col-12 hero-text-area ">
                        <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">{{ __('layout.about_us') }}</h1>
                        <nav aria-label="breadcrumb ">
{{--                            <ul class="breadcrumb wow fadeInUp" data-wow-delay="1s">--}}
{{--                                <li class="breadcrumb-item"><a class="breadcrumb-link" href="#0"><i class="fas fa-home icon "></i>home</a></li>--}}
{{--                                <li class="breadcrumb-item active">about us</li>--}}
{{--                            </ul>--}}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End inner Page hero-->
    <!-- Start  about Section-->
    <!-- Start  about Section-->
    <section class="about mega-section" id="about">
        <div class="container">
            <!-- Start first about div-->
            <div class="content-block  ">
                <div class="row">
                    @php $about = \App\Models\Page::where('title_en', 'About Us')->first() @endphp
                    <div class="col-12 col-lg-6 d-flex align-items-center about-col wow fadeInUp" data-wow-delay="0.4s">
                        <div class="img-area framed show-video  ">
                            <div class="overlay-color"></div><img class="img-fluid about-img  video-thumb " src="{{asset($about->image)}}" alt="Our vision">
                            <div class="video-wraper">
                                <div class="play-btn-col-dir"><a class="video-link" href="{{ $about->video_url }}" role="button" data-fancybox="data-fancybox">
                                        <div class="play-video-btn">
                                            <div class="play-btn"> <img class="img-fluid play-icon" src="{{asset('front/assets/images/icons/play-icon.svg')}}" alt=""/></div>
                                        </div></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 d-flex align-items-center about-col pad-start wow fadeInUp" data-wow-delay="0.6s">
                        <div class="text-area "><span class="tag-line">{{ $about->{'title_'.app()->getLocale()} }}</span>
                            <div class="section-heading side-heading  light-title">
                                <h2 class="section-title wow" data-splitting="words">{{ $about->{'title_'.app()->getLocale()} }} </h2>
                            </div>
                            <p class=" first-p">
                                {{ $about->{'summary_'.app()->getLocale()} }}
                            </p>
                            <div class="about-stats stats-counter wow animated" data-wow-offset="0" data-wow-delay="0s">
                                <div class="row  g-0 ">
                                    <!--Info One-->
                                    <div class="col-4 ">
                                        <div class="stat-box  wow fadeInUp" data-wow-delay=".2s">
                                            <p class="stat-num "><span class="sign" style="margin-right: 40px">+</span><span class="counter" data-from="10" data-to="{{ $yOfExperienceCount }}" data-speed="3000" data-refresh-interval="50"></span></p>
                                            <h5 class="stat-desc">{{ __('layout.years_of_experience') }}</h5>
                                        </div>
                                    </div>
                                    <!--Info Two-->
                                    <div class="col-4 ">
                                        <div class="stat-box wow fadeInUp" data-wow-delay=".4s">
                                            <p class="stat-num "><span class="sign" style="margin-right: 60px">+</span><span class="counter" data-from="25" data-to="{{ $typesOfNaturalStoneCount }}" data-speed="3000" data-refresh-interval="50"></span></p>
                                            <h5 class="stat-desc">{{ __('layout.types_of_natural_stone') }}</h5>
                                        </div>
                                    </div>
                                    <!--Info Three-->
                                    <div class="col-4 ">
                                        <div class="stat-box wow fadeInUp" data-wow-delay=".6s">
                                            <p class="stat-num "><span class="sign" style="margin-right: 115px">+</span><span class="counter" data-from="0" data-to="{{ $m2ofnaturalstoneinstockCount }}" data-speed="3000" data-refresh-interval="50"></span></p>
                                            <h5 class="stat-desc">{{ __('layout.m2_of_natural_stone_in_stock') }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--End first about div-->
        </div>
    </section>
    <!-- End  about Section-->

    <!-- End  about Section-->
    <!-- Start  our-clients Section-->
{{--    <section class="our-clients   elf-section" id="our-clients">--}}
{{--        <div class="container">--}}
{{--            <div class="section-heading d-none ">--}}
{{--                <h4 class="section-title ">our great clients</h4>--}}
{{--                <p class="section-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, architecto cupiditate odio rerum est</p>--}}
{{--                <div class="line-gradient-color">       </div>--}}
{{--            </div>--}}
{{--            <div class=" clients-logos d-flex align-items-center justify-content-around flex-wrap">--}}
{{--                <!--Swiper-->--}}
{{--                <div class="swiper-container">--}}
{{--                    <div class="swiper-wrapper clients-logo-wraper wow fadeIn " data-wow-delay=".02s">--}}
{{--                        <!-- every client logo is located inside div  with clss name "swiper-slide ".--}}
{{--                        if you want to add more logos please keep the strcture of the swiper-slide as showen below--}}


{{--                        -->--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="client-logo  "><a href="#0"><img class="img-fluid logo " src="{{asset('front/assets/images/clients-logos/1-white.png')}}" alt=" "></a></div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="client-logo "><a href="#0"><img class="img-fluid logo " src="{{asset('front/assets/images/clients-logos/2-white.png')}}" alt=" "></a></div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="client-logo "><a href="#0"><img class="img-fluid logo " src="{{asset('front/assets/images/clients-logos/3-white.png')}}" alt=" "></a></div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="client-logo "><a href="#0"><img class="img-fluid logo " src="{{asset('front/assets/images/clients-logos/4-white.png')}}" alt=" "></a></div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="client-logo "><a href="#0"><img class="img-fluid logo " src="{{asset('front/assets/images/clients-logos/5-white.png')}}" alt=" "></a></div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="client-logo "><a href="#0"><img class="img-fluid logo " src="{{asset('front/assets/images/clients-logos/6-white.png')}}" alt=" "></a></div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="client-logo "><a href="#0"><img class="img-fluid logo " src="{{asset('front/assets/images/clients-logos/7-white.png')}}" alt=" "></a></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- End  our-clients Section-->
    <!-- Start  our-team Section-->
    <section class="our-team mega-section " id="our-team">
        <div class="container">
            <div class="section-heading center-heading">
                <h2 class="section-title wow" data-splitting="words">{{ __('layout.team_members') }}</h2>
                <div class="line-on-center wow fadeIn" data-wow-delay=".6s"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($members as $member)

                    <!--first Team Member-->
                    <div class="col-12 col-md-8  col-lg-4 mx-md-auto ">
                        <div class="tm-member-card   wow   fadeInUp" data-wow-delay="0.2s">
                            <div class="tm-image ">
                                <div class="overlay overlay-color"> </div><img class="img-fluid " src="{{asset($member->image)}}" alt="{{ $member->{'name_'.app()->getLocale()} }}">
                                <div class="tm-desc">
                                    <div class="sc-wraper dir-row sc-size-40">
                                    </div>
                                </div>
                            </div>
                            <div class="tm-details">
                                <h6 class="tm-name">{{ $member->{'name_'.app()->getLocale()} }}</h6><span class="tm-role">{{ $member->{'role_'.app()->getLocale()} }}</span>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
        <!--Start see-more-area-->
{{--        <div class="see-more-area   wow fadeInUp" data-wow-delay="0.8s"><a class=" ma-btn-primary" href="#0">see all team members </a></div>--}}
    </section>
    <!-- End  our-team Section-->
    <!-- Start  benefits Section-->
{{--    <section class="benefits section-bg-shade" id="benefits">--}}
{{--        <div class="row  g-0 ">--}}
{{--            <div class="col-12 col-lg-6 order-1 order-lg-0 ">--}}
{{--                <div class="benefits-boxes-area  wow fadeIn" data-wow-delay="0.6s">--}}
{{--                    <div class="row  g-0 ">--}}
{{--                        <div class="col-12 col-sm-6 benefit-box "><i class="fas fa-bullhorn benefit-icon "></i>--}}
{{--                            <h3 class="benefit-title">business boost</h3>--}}
{{--                            <p class="benefit-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo dolorum sit aliquam</p><a class="read-more" href="#0">read more<i class="fas fa-arrow-right icon ">       </i></a>--}}
{{--                        </div>--}}
{{--                        <div class="col-12 col-sm-6 benefit-box "><i class="fas fa-anchor benefit-icon "></i>--}}
{{--                            <h3 class="benefit-title">value guarantee</h3>--}}
{{--                            <p class="benefit-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo dolorum sit aliquam</p><a class="read-more" href="#0">read more<i class="fas fa-arrow-right icon ">       </i></a>--}}
{{--                        </div>--}}
{{--                        <div class="col-12 col-sm-6 benefit-box "><i class="fas fa-chess benefit-icon "></i>--}}
{{--                            <h3 class="benefit-title">solid plans</h3>--}}
{{--                            <p class="benefit-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo dolorum sit aliquam</p><a class="read-more" href="#0">read more<i class="fas fa-arrow-right icon ">       </i></a>--}}
{{--                        </div>--}}
{{--                        <div class="col-12 col-sm-6 benefit-box"><i class="fas fa-desktop benefit-icon "></i>--}}
{{--                            <h3 class="benefit-title">get more attention</h3>--}}
{{--                            <p class="benefit-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo dolorum sit aliquam</p><a class="read-more" href="#0">read more<i class="fas fa-arrow-right icon ">       </i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-12  col-lg-6 order-0 oredr-lg-1 position-relative">--}}
{{--                <div class="benefits-image-area wow fadeIn" data-wow-delay="0.3s">--}}
{{--                    <div class="overlay overlay-color"></div><img src="{{$about->image}}" alt="benefit image">--}}
{{--                    <div class="video-wraper">--}}
{{--                        <div class="play-btn-col-dir"><a class="video-link" href="{{$about->video_url}}" role="button" data-fancybox="data-fancybox">--}}
{{--                                <div class="play-video-btn">--}}
{{--                                    <div class="play-btn"> <img class="img-fluid play-icon" src="{{asset('front/assets/images/icons/play-icon.svg')}}" alt=""/></div>--}}
{{--                                </div></a></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- End  benefits Section-->
    <!-- Start  blog Section-->
{{--    <section class="blog blog-home mega-section section-bg-shade" id="blog">--}}
{{--        <div class="container ">--}}
{{--            <div class="section-heading center-heading">--}}
{{--                <h2 class="section-title wow" data-splitting="chars">latest news</h2>--}}
{{--                <div class="line-on-center wow fadeIn" data-wow-delay=".6s"></div>--}}
{{--            </div>--}}
{{--            <div class="row ">--}}
{{--                <div class="col-12 ">--}}
{{--                    <div class="posts-grid ">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-12 col-lg-4 ">--}}
{{--                                <div class="post-box">     <a class="post-link" href="post-single_dark.html">--}}
{{--                                        <div class="post-img-wraper">--}}
{{--                                            <div class="overlay-color"></div><i class="fas fa-arrow-right icon ">             </i><img class="post-img" src="{{asset('front/assets/images/blog/post-images/1.jpg')}}" alt=""/>--}}
{{--                                            <h4 class="post-date"><span class="day">05 </span>march, 2023      </h4>--}}
{{--                                        </div></a>--}}
{{--                                    <div class="post-summary">--}}
{{--                                        <div class="post-info"><a class="info post-cat" href="#"> <i class=" fas fa-list-alt icon"></i>cloud</a><a class="info post-author" href="#"> <i class=" fas fa-user icon"></i>Allan Moore</a></div>--}}
{{--                                        <div class="post-text"><a class="post-link" href="post-single_dark.html">--}}
{{--                                                <h2 class="post-title"> love what you do to do what you love?</h2></a>--}}
{{--                                            <p class="post-excerpt">--}}
{{--                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.--}}
{{--                                                Iure nulla dolorem, voluptates molestiae--}}
{{--                                            </p><a class="read-more" href="post-single_dark.html">read more<i class="fas fa-arrow-right icon "></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-12 col-lg-4 ">--}}
{{--                                <div class="post-box">     <a class="post-link" href="post-single_dark.html">--}}
{{--                                        <div class="post-img-wraper">--}}
{{--                                            <div class="overlay-color"></div><i class="fas fa-arrow-right icon ">             </i><img class="post-img" src="{{asset('front/assets/images/blog/post-images/2.jpg')}}" alt=""/>--}}
{{--                                            <h4 class="post-date"><span class="day">15 </span>feb, 2023      </h4>--}}
{{--                                        </div></a>--}}
{{--                                    <div class="post-summary">--}}
{{--                                        <div class="post-info"><a class="info post-cat" href="#"> <i class=" fas fa-list-alt icon"></i>design</a><a class="info post-author" href="#"> <i class=" fas fa-user icon"></i>mhmd amin</a></div>--}}
{{--                                        <div class="post-text"><a class="post-link" href="post-single_dark.html">--}}
{{--                                                <h2 class="post-title">  the stroy of our great fathers</h2></a>--}}
{{--                                            <p class="post-excerpt">--}}
{{--                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.--}}
{{--                                                Iure nulla dolorem, voluptates molestiae--}}
{{--                                            </p><a class="read-more" href="post-single_dark.html">read more<i class="fas fa-arrow-right icon "></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-12 col-lg-4 ">--}}
{{--                                <div class="post-box">     <a class="post-link" href="post-single_dark.html">--}}
{{--                                        <div class="post-img-wraper">--}}
{{--                                            <div class="overlay-color"></div><i class="fas fa-arrow-right icon ">             </i><img class="post-img" src="{{asset('front/assets/images/blog/post-images/3.jpg')}}" alt=""/>--}}
{{--                                            <h4 class="post-date"><span class="day">27 </span>aug, 2023      </h4>--}}
{{--                                        </div></a>--}}
{{--                                    <div class="post-summary">--}}
{{--                                        <div class="post-info"><a class="info post-cat" href="#"> <i class=" fas fa-list-alt icon"></i>life style</a><a class="info post-author" href="#"> <i class=" fas fa-user icon"></i>yusuf amin</a></div>--}}
{{--                                        <div class="post-text"><a class="post-link" href="post-single_dark.html">--}}
{{--                                                <h2 class="post-title"> making your fancy thoughts exist</h2></a>--}}
{{--                                            <p class="post-excerpt">--}}
{{--                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.--}}
{{--                                                Iure nulla dolorem, voluptates molestiae--}}
{{--                                            </p><a class="read-more" href="post-single_dark.html">read more<i class="fas fa-arrow-right icon "></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- End  blog Section-->
    <!-- Start  faq Section-->
{{--    <section class="faq mega-section" id="faq">--}}
{{--        <div class="shape-top-left"></div>--}}
{{--        <div class="shape-bottom-right"></div>--}}
{{--        <div class="pattern-top-end-dir"></div>--}}
{{--        <div class="pattern-bottom-start-dir"></div>--}}
{{--        <div class="container">--}}
{{--            <div class="section-heading center-heading">--}}
{{--                <h2 class="section-title wow" data-splitting="chars">frequently asked questions</h2>--}}
{{--                <div class="line-on-center wow fadeIn" data-wow-delay=".6s"></div>--}}
{{--            </div>--}}
{{--            <!--Start Accordion List For FAQ-->--}}
{{--            <div class="faq-accordion wow fadeIn " id="accordion" data-wow-delay="0.4s">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12 col-lg-6">--}}
{{--                        <!-- 1st FAQ-->--}}
{{--                        <div class="card mb-2">--}}
{{--                            <div class="card-header " id="heading-1">--}}
{{--                                <h5 class="mb-0 faq-title">--}}
{{--                                    <button class="btn btn-link  faq-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1"> are your service easy to use?</button>--}}
{{--                                </h5>--}}
{{--                            </div>--}}
{{--                            <div class="collapse  " id="collapse-1" aria-labelledby="heading-1" data-bs-parent="#accordion">--}}
{{--                                <div class="card-body">--}}
{{--                                    <p class="faq-answer">--}}
{{--                                        Anim pariatur cliche reprehenderit, enim eiusmod high life--}}
{{--                                        accusamus terry richardson ad squid. 3 wolf moon officia--}}
{{--                                        aute,--}}
{{--                                        eiusmod. Brunch 3 wolf moon tempor, iunt you probably--}}
{{--                                        haven't--}}
{{--                                        heard of them accusamus labore sustainable VHS.--}}

{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- 2nd FAQ-->--}}
{{--                        <div class="card mb-2">--}}
{{--                            <div class="card-header " id="heading-2">--}}
{{--                                <h5 class="mb-0 faq-title">--}}
{{--                                    <button class="btn btn-link  faq-btn  collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2"> is this services work in my country?</button>--}}
{{--                                </h5>--}}
{{--                            </div>--}}
{{--                            <div class="collapse  " id="collapse-2" aria-labelledby="heading-2" data-bs-parent="#accordion">--}}
{{--                                <div class="card-body">--}}
{{--                                    <p class="faq-answer">--}}
{{--                                        Anim pariatur cliche reprehenderit, enim eiusmod high life--}}
{{--                                        accusamus terry richardson ad squid. 3 wolf moon officia--}}
{{--                                        aute,--}}
{{--                                        non cupidatat skateboard dolor brunch. Food truck quinoa--}}
{{--                                        nesciunt--}}
{{--                                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put--}}
{{--                                        a--}}
{{--                                        bird on it squid single-origin coffee nulla assumenda--}}
{{--                                        shoreditch--}}
{{--                                        et. Nihil anim keffiyeh helvetica, craft beer labore wes--}}
{{--                                        anderson--}}
{{--                                        cred nesciunt sapiente ea proident. Ad vegan excepteur--}}
{{--                                        butcher--}}
{{--                                        vice lomo. Leggings occaecat craft beer farm-to-table.--}}

{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- 3rd FAQ-->--}}
{{--                        <div class="card mb-2">--}}
{{--                            <div class="card-header " id="heading-3">--}}
{{--                                <h5 class="mb-0 faq-title">--}}
{{--                                    <button class="btn btn-link  faq-btn  collapsed " data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="true" aria-controls="collapse-3"> will i receive future updates?</button>--}}
{{--                                </h5>--}}
{{--                            </div>--}}
{{--                            <div class="collapse " id="collapse-3" aria-labelledby="heading-3" data-bs-parent="#accordion">--}}
{{--                                <div class="card-body">--}}
{{--                                    <p class="faq-answer">--}}
{{--                                        Anim pariatur cliche reprehenderit, enim eiusmod high life--}}
{{--                                        accusamus terry richardson ad squid. 3 wolf moon officia--}}
{{--                                        aute,--}}
{{--                                        non cupidatat skateboard dolor brunch. Food truck quinoa--}}
{{--                                        nesciunt--}}
{{--                                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put--}}
{{--                                        a--}}
{{--                                        bird on it squid single-origin coffee nulla assumenda--}}
{{--                                        shoreditch--}}
{{--                                        et.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 col-lg-6">--}}
{{--                        <!-- 4th FAQ-->--}}
{{--                        <div class="card mb-2">--}}
{{--                            <div class="card-header " id="heading-4">--}}
{{--                                <h5 class="mb-0 faq-title">--}}
{{--                                    <button class="btn btn-link  faq-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="true" aria-controls="collapse-4"> How much I will pay?</button>--}}
{{--                                </h5>--}}
{{--                            </div>--}}
{{--                            <div class="collapse  " id="collapse-4" aria-labelledby="heading-4" data-bs-parent="#accordion">--}}
{{--                                <div class="card-body">--}}
{{--                                    <p class="faq-answer">--}}
{{--                                        Anim pariatur cliche reprehenderit, enim eiusmod high life--}}
{{--                                        accusamus terry richardson ad squid. 3 wolf moon officia--}}
{{--                                        aute,--}}
{{--                                        eiusmod. Brunch 3 wolf moon tempor, iunt you probably--}}
{{--                                        haven't--}}
{{--                                        heard of them accusamus labore sustainable VHS.--}}

{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- 5th FAQ-->--}}
{{--                        <div class="card mb-2">--}}
{{--                            <div class="card-header " id="heading-5">--}}
{{--                                <h5 class="mb-0 faq-title">--}}
{{--                                    <button class="btn btn-link  faq-btn  collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="true" aria-controls="collapse-5">are theres other fees?</button>--}}
{{--                                </h5>--}}
{{--                            </div>--}}
{{--                            <div class="collapse  " id="collapse-5" aria-labelledby="heading-5" data-bs-parent="#accordion">--}}
{{--                                <div class="card-body">--}}
{{--                                    <p class="faq-answer">--}}
{{--                                        Anim pariatur cliche reprehenderit, enim eiusmod high life--}}
{{--                                        accusamus terry richardson ad squid. 3 wolf moon officia--}}
{{--                                        aute,--}}
{{--                                        non cupidatat skateboard dolor brunch. Food truck quinoa--}}
{{--                                        nesciunt--}}
{{--                                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put--}}
{{--                                        a--}}
{{--                                        bird on it squid single-origin coffee nulla assumenda--}}
{{--                                        shoreditch--}}
{{--                                        et. Nihil anim keffiyeh helvetica, craft beer labore wes--}}
{{--                                        anderson--}}
{{--                                        cred nesciunt sapiente ea proident. Ad vegan excepteur--}}
{{--                                        butcher--}}
{{--                                        vice lomo. Leggings occaecat craft beer farm-to-table.--}}

{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="card mb-2">--}}
{{--                            <div class="card-header " id="heading-6">--}}
{{--                                <h5 class="mb-0 faq-title">--}}
{{--                                    <button class="btn btn-link  faq-btn  collapsed " data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="true" aria-controls="collapse-6"> hw can i sign up the contract?</button>--}}
{{--                                </h5>--}}
{{--                            </div>--}}
{{--                            <div class="collapse " id="collapse-6" aria-labelledby="heading-6" data-bs-parent="#accordion">--}}
{{--                                <div class="card-body">--}}
{{--                                    <p class="faq-answer">--}}
{{--                                        Anim pariatur cliche reprehenderit, enim eiusmod high life--}}
{{--                                        accusamus terry richardson ad squid. 3 wolf moon officia--}}
{{--                                        aute,--}}
{{--                                        non cupidatat skateboard dolor brunch. Food truck quinoa--}}
{{--                                        nesciunt--}}
{{--                                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put--}}
{{--                                        a--}}
{{--                                        bird on it squid single-origin coffee nulla assumenda--}}
{{--                                        shoreditch--}}
{{--                                        et.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- End  faq Section-->


@endsection


