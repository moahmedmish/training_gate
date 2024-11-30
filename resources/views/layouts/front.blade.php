<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{\App\Models\Setting::where('name','site_title_'.app()->getLocale())->first()->value}}</title>
    <meta name="title" content="{{\App\Models\Setting::where('name','site_title_'.app()->getLocale())->first()->value}}">
    <meta name="description" content="{{\App\Models\Setting::where('name','meta_description_'.app()->getLocale())->first()->value}}">
{{--    <meta name="keywords" content="{{\App\Models\Setting::where('name', 'meta_keywords_'.app()->getLocale())->first()->value}}">--}}
{{--    <meta name="keywords" content="{{\App\Models\Setting::where('name', 'meta_author_'.app()->getLocale())->first()->value}}">--}}
{{--    <meta name="robots" content="{{\App\Models\Setting::where('name', 'meta_robots')->first()->value}}">--}}


{{--    <meta property="og:title" content="{{\App\Models\Setting::where('name', 'og_title_'.app()->getLocale())->first()->value}}">--}}
{{--    <meta property="og:title" content="{{\App\Models\Setting::where('name', 'og_description_'.app()->getLocale())->first()->value}}">--}}
{{--    <meta property="og:image" content="{{asset(\App\Models\PhotoSetting::where('name', 'logo_' . app()->getLocale())->first()->image)}}">--}}
{{--    <meta property="og:url" content="{{route('home')}}">--}}
    <meta property="og:type" content="website">
    <!-- fav icon -->
    <link rel="icon" href="{{asset('favicon-16x16.png')}}">
{{--    <link rel="icon" href="{{asset(\App\Models\PhotoSetting::where('name', 'fav-icon')->first()->value)}}">--}}

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
    @if(app()->getLocale() == 'en')
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;500;600;700;800;900&amp;family=Poppins:wght@400;500;600;700;800;900&amp;display=swap">
    @else
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cairo:400,600,700,900">
    @endif

    <!-- main-LTR-1 -->

    @if(app()->getLocale() == 'en')
        <link rel="stylesheet" href="{{asset('front/css/main-LTR-1.css')}}">
    @else
        <link rel="stylesheet" href="{{asset('front/css/main-RTL-1.css')}}">

    @endif

    <style>
        @media (max-width: 768px) {
            .sub-menu-link {
                color: #ffffff !important; /* White color for mobile view */
            }
            .dark-header .has-sub-menu .sub-menu .sub-menu-link {
                color: #ffffff !important; /* White color for mobile view */

            }
        }

    </style>

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
        <nav class="main-navbar " id="main-nav"><a class="navbar-brand " href="{{route('home')}}"><img class="brand-logo light-logo img-fluid " width="130" src="{{asset(\App\Models\PhotoSetting::where('name', 'logo_' . app()->getLocale())->first()->image)}}" alt="site logo"/><img class="brand-logo dark-logo img-fluid " src="{{asset(\App\Models\PhotoSetting::where('name', 'logo_' . app()->getLocale())->first()->image)}}" alt="site logo"/></a>
            <div class="menu-toggler-btn"><span></span><span></span><span></span></div>
            <div class=" navbar-menu-wraper  " id="navbar-menu-wraper">
                <ul class="navbar-nav  mobile-menu ">

                    <li class="nav-item"><a class="nav-link   @if(request()->route()->getName() == 'home') active @endif " href="{{route('home')}}">{{ __('layout.home') }}</a></li>

                    @php
                         $menuItems = \App\Models\Page::where('publish', 1)->where('on_menu', 1)->orderBy('menu_order')->get();
                    @endphp
                    @foreach($menuItems as $menuItem)
                        @php $detailsPageCheck = \Illuminate\Support\Str::contains($menuItem->route_name, '-detail'); @endphp


                        @if($detailsPageCheck)
                            @if(\Illuminate\Support\Str::contains($menuItem->route_name, 'service'))
                                <li class="nav-item has-sub-menu">
                                    <a class="nav-link @if(request()->route()->getName() == 'service-details') active @endif  " href="#0">
                                        {{ $menuItem->{'title_'.app()->getLocale()} ?? __('layout.services') }}
                                        <i class="fas fa-chevron-down down-Arrow-icon"> </i>
                                    </a>
                                    <ul class="sub-menu ">
                                        @foreach($services as $service)
                                            <li class="nav-item sub-menu-item">
                                                <a class="nav-link sub-menu-link  " href="{{route('service-details', $service->id)}}">
                                                    {{ $service->{'title_'.app()->getLocale()} }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @elseif(\Illuminate\Support\Str::contains($menuItem->route_name, 'project'))
                                <li class="nav-item has-sub-menu">
                                    <a class="nav-link @if(request()->route()->getName() == 'project-details') active @endif" href="#0">
                                        {{ $menuItem->{'title_'.app()->getLocale()} ?? __('layout.projects') }}
                                        <i class="fas fa-chevron-down down-Arrow-icon"> </i>
                                    </a>
                                    <ul class="sub-menu ">
                                        @foreach($projects as $project)
                                            <li class="nav-item sub-menu-item"><a class="nav-link sub-menu-link  " href="{{route('project-details', $project->id)}}">{{ $project->{'title_'.app()->getLocale()} }} </a></li>
                                        @endforeach
                                    </ul>
                                </li>

                            @elseif(\Illuminate\Support\Str::contains($menuItem->route_name, 'collection'))
                                <li class="nav-item has-sub-menu">
                                    <a class="nav-link @if(request()->route()->getName() == 'collection') active @endif" href="{{route('collection')}}">
                                        {{ $menuItem->{'title_'.app()->getLocale()} ?? __('layout.collection') }}
                                        <i class="fas fa-chevron-down down-Arrow-icon"> </i>
                                    </a>
                                    <ul class="sub-menu ">
                                        @foreach(\App\Models\Category::all() as $category)
                                            <li class="nav-item sub-menu-item"><a class="nav-link sub-menu-link  " href="{{route('collection-details', $category->id)}}">{{ $category->{'name_'.app()->getLocale()} }} </a></li>
                                        @endforeach
                                    </ul>
                                </li>

                            @endif

                        @else



                            <li class="nav-item">
                                <a class="nav-link  @if(request()->route()->getName() == $menuItem->route_name) active @endif "
                                   href="{{$menuItem->route_name !== 'catalog' ? route($menuItem->route_name) : 'https://drive.google.com/file/d/1w8GHdjVMVw32qMOz8TKFZiKioXfj20Kt/view'}}">
                                    {{ $menuItem->{'title_'.app()->getLocale()} ?? __('layout.'.$menuItem->route_name) }}
                                </a>
                            </li>

                        @endif
                    @endforeach






                    @if(app()->getLocale() == 'ar')
                        <li class="nav-item"><a class="nav-link  " href="{{route('locale', ['en'])}}">English</a></li>
                    @else
                        <li class="nav-item"><a class="nav-link  " href="{{route('locale', ['ar'])}}">العربية</a></li>
                    @endif


                </ul>
            </div>
{{--            <div class="header-search-btn">--}}
{{--                <svg class="search-icon" width="60" height="60" viewBox="0 0 60 60">--}}
{{--                    <g transform="translate(-1460 -905)">--}}
{{--                        <g transform="translate(1460 905)">--}}
{{--                            <g transform="translate(0 0)">--}}
{{--                                <path class="search-path" d="M59.634,56.1,42.2,38.669A23.8,23.8,0,1,0,38.669,42.2L56.1,59.634a1.25,1.25,0,0,0,1.768,0l1.767-1.767A1.25,1.25,0,0,0,59.634,56.1ZM23.75,42.5A18.75,18.75,0,1,1,42.5,23.75,18.771,18.771,0,0,1,23.75,42.5Z" transform="translate(0 0)"></path>--}}
{{--                            </g>--}}
{{--                        </g>--}}
{{--                    </g>--}}
{{--                </svg>--}}
{{--            </div>--}}
        </nav>
    </div>
</header>
<!--End Page Header-->

@yield('content')



@if(request()->route()->getName() !== 'contact')
@php $homefooterbackground = \App\Models\PhotoSetting::where('name', 'home footer background')->first(); @endphp
<!-- Start  take-action Section-->
<section class="take-action mega-section " id="take-action">
    <div class="overlay-photo-image-bg parallax " style='background-image: url("{{asset($homefooterbackground->image)}}");'></div>
    <div class="overlay-color "></div>
    <div class="cta-wrapper">
        <div class="container">
            <div class="section-heading center-heading">
                <h2 class="section-title wow" data-splitting="words">{{ __('layout.Still_Have_More_Questions') }}</h2>
{{--                <p class="section-subtitle wow fadeInUp" data-wow-delay=".5s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, architecto cupiditate odio rerum est</p>--}}
                <div class="line-on-center wow fadeIn" data-wow-delay=".6s"></div>
            </div>
            <!--Start .see-more-area-->
            <div class=" see-more-area wow fadeInUp" data-wow-delay="0.8s"><a class=" ma-btn-primary " href="{{ route('contact') }}">{{ __('layout.get_in_toutch') }}</a></div>
            <!--End Of .see-more-area        -->
        </div>
    </div>
</section>
@endif
<footer class="page-footer dark-color-footer" id="page-footer">
    <div class="container">
        <div class="row footer-cols">
            <div class="col-12 col-md-8 col-lg-4  footer-col wow fadeInUp " data-wow-delay="0.3s">
                <h2 class=" footer-col-title  ">{{ __('layout.roma') }}</h2>
                <div class="footer-col-content-wrapper">
                    <p class="footer-text-about-us ">
                        {{\App\Models\Setting::where('name', 'meta_description_'.app()->getLocale())->first()->value}}

                    </p>
                    <div class="social-icons">
                        <div class="sc-wraper dir-row sc-size-32">
                            <ul class="sc-list">
                                <li class="sc-item " title="Facebook"><a class="sc-link" target="_blank" href="{{\App\Models\Setting::where('name', 'facebook')->first()->value}}"><i class="fab fa-facebook-f sc-icon"></i></a></li>
                                <li class="sc-item " title="youtube"><a class="sc-link" target="_blank" href="{{\App\Models\Setting::where('name', 'youtube')->first()->value}}"><i class="fab fa-youtube sc-icon"></i></a></li>
                                <li class="sc-item " title="instagram"><a class="sc-link" target="_blank" href="{{\App\Models\Setting::where('name', 'instagram')->first()->value}}"><i class="fab fa-instagram sc-icon"></i></a></li>
{{--                                <li class="sc-item " title="twitter"><a class="sc-link" target="_blank" href="{{\App\Models\Setting::where('name', 'twitter')->first()->value}}"><i class="fab fa-x-twitter sc-icon"></i></a></li>--}}
                                <li class="sc-item" title="tiktok">
                                    <a class="sc-link" target="_blank" href="{{ \App\Models\Setting::where('name', 'tiktok')->first()->value }}">
                                        <i class="fab fa-tiktok sc-icon"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-2  footer-col wow fadeInUp " data-wow-delay="0.5s" >
                <h2 class=" footer-col-title    ">{{ __('layout.links') }}</h2>
                <div class="footer-col-content-wrapper" style="">
                    <ul class="footer-menu ">
                        <li class="footer-menu-item"><a class="footer-menu-link" href="{{ route('home') }}">{{ __('layout.home') }}</a></li>
                        <li class="footer-menu-item"><a class="footer-menu-link" href="{{ route('about') }}">{{ __('layout.about_us') }}</a></li>
                        <li class="footer-menu-item"><a class="footer-menu-link" href="{{ route('collection') }}">{{ __('layout.our_collection') }}</a></li>
                        <li class="footer-menu-item"><a class="footer-menu-link" href="{{ route('catalog') }}">{{ __('layout.catalog') }}</a></li>
                        <li class="footer-menu-item"><a class="footer-menu-link" href="{{ route('contact') }}">{{ __('layout.contact_us') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-2 footer-col wow fadeInUp " data-wow-delay=".7s" style="visibility: hidden !important;">
                <h2 class=" footer-col-title    "><!--Resources--></h2>
                <div class="footer-col-content-wrapper" style="visibility: hidden !important;">
                    <ul class="footer-menu">
                        <li class="footer-menu-item"><a class="footer-menu-link" href="#0">support</a></li>
                        <li class="footer-menu-item"><a class="footer-menu-link" href="#0">dashboard</a></li>
                        <li class="footer-menu-item"><a class="footer-menu-link" href="#0">drivers</a></li>
                        <li class="footer-menu-item"><a class="footer-menu-link" href="#0">projects</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-8   col-lg-4 footer-col wow fadeInUp " data-wow-delay=".9s">
                <h2 class=" footer-col-title    ">{{ __('layout.Our_Contact_Info') }}</h2>
                <div class="footer-col-content-wrapper">
                    @php $email = \App\Models\Setting::where('name', 'contact email')->first()->value @endphp
                    <div class="contact-info-card"><i class="fas fa-envelope icon"></i><a class="text-lowercase  info" href="mailto:{{$email}}">{{$email}}</a></div>
{{--                    <div class="contact-info-card"><i class="fas fa-globe-africa icon"></i><a class="text-lowercase  info" href="#0">www.yoursite.com</a></div>--}}
                    @php
                        $address = \App\Models\Setting::where('name', 'address_' . app()->getLocale())->first()->value;
//                        $googleMapsUrl = 'https://www.google.com/maps/search/?api=1&query=' . urlencode($address);
                        $googleMapsUrl = \App\Models\Setting::where('name', 'google map')->first()->value;
                    @endphp

                    <div class="contact-info-card">
                        <i class="fas fa-map-marker-alt icon"></i>
                        <a href="{{$googleMapsUrl}}" target="_blank" class="text-lowercase  info">
                            {{$address}}
                        </a>
                    </div>
                    @php $landline = \App\Models\Setting::where('name', 'landline phone')->first()->value ;
                                 $sales = \App\Models\Setting::where('name', 'sales phone')->first()->value ; @endphp

                    <div class="contact-info-card"><i class="fas fa-mobile-alt icon"></i><a class="info" href="tel:{{$landline}}">{{ $landline }}      </a></div>
                    <div class="contact-info-card"><i class="fas fa-mobile-alt icon"></i><a class="info" href="tel:{{$sales}}">{{ $sales }}      </a></div>
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

<script src="{{asset('front/js/vendors/vegas.min.js')}}"></script>

<!--     main     -->
<script src="{{asset('front/js/main.js')}}"></script>



</body>
</html>


