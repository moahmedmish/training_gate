<!doctype html>
{{--{{dd(app()->getLocale())}}--}}
{{--@if(app()->getLocale() == 'ar')--}}
<html class="no-js" lang="zxx">
{{--    @else--}}
{{--        <html class="no-js" >--}}
{{--        @endif--}}

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @php @$siteName = \App\Models\Setting::where('name', 'siteName_'.app()->getLocale())->first()->value ; @endphp
    @php @$address = \App\Models\Setting::where('name', 'mainAdress_'.app()->getLocale())->first()->value ; @endphp

    <title>{{$siteName}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon-16x16.png in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/favicon-16x16.png')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/swiper-bundle.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/nouislider.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/backtotop.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/flaticon_kindedo.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/font-awesome-pro.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/spacing.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/main_'.app()->getLocale().'.css')}}">
    <link href="https://fonts.googleapis.com/earlyaccess/droidarabickufi.css" rel="stylesheet">

</head>

<body>
@php $mainEmail = \App\Models\Setting::where('name', 'mainEmail')->first()->value ; @endphp
@php $phone = \App\Models\Setting::where('name', 'phone')->first()->value ; @endphp

<!-- pre loader area start -->
<div id="loading">
    <div id="preloader">
        <div class="preloader-thumb-wrap">
            <div class="preloader-thumb">
                <div class="preloader-border"></div>
                <img src="{{asset('public/assets/img/bg/preloader.png')}}" alt="img not found!">
            </div>
        </div>
    </div>
</div>
<!-- pre loader area end -->

<!-- back to top start -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
</div>
<!-- back to top end -->

<!-- header area start -->
<header>
    <div class="bd-header" @if(app()->getLocale() == 'en') dir="ltr" @endif>
        <!-- header top area start  -->
        <div class="theme-bg bd-header-top-3 p-relative d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bd-header-top-wrapper d-flex justify-content-between">
                            <div class="bd-header-top-left">
                                <div class="bd-header-meta-items">
                                    <div class="bd-header-meta-item is-white d-flex align-items-center">
                                        <div class="bd-header-meta-icon">
                                            <i class="fa-solid fa-tag"></i>
                                        </div>
                                        <div class="bd-header-meta-text">
                                            {{--                                            <p>I Wanto to Learn Society</p>--}}
{{--                                            <p><a href="{{ route('locale', ['en']) }}">English</a> | <a--}}
{{--                                                    href="{{ route('locale', ['ar']) }}">العربية</a></p>--}}
                                            <p>
{{--                                                {{dump(app()->getLocale())}}--}}
                                            @if(app()->getLocale() == 'ar')
                                                <a href="{{ route('locale', ['en']) }}" style="color: #0d6efd;">English</a>
                                            @else
                                                <a href="{{ route('locale', ['ar']) }}" style="color: #0d6efd; font-family: 'Droid Arabic Kufi', sans-serif;">العربية</a>
                                            @endif

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bd-header-top-right d-flex align-items-center">
                                <div class="bd-header-meta-items d-flex align-items-center">
                                    <div class="bd-header-meta-item is-white d-flex align-items-center">
                                        <div class="bd-header-meta-icon">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                        <div class="bd-header-meta-text">
                                            <p><a href="tel:{{$phone}}">{{$phone}}</a></p>
                                        </div>
                                    </div>
                                    <div class="bd-header-meta-item is-white d-flex align-items-center">
                                        <div class="bd-header-meta-icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="bd-header-meta-text">
                                            <p>
                                                <a href="mailto:{{$mainEmail}}">{{$mainEmail}}</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header top area end -->

        <!-- header bottom area start -->
        <div id="header-sticky" class="bd-header-bottom ">
            <div class="container">
                <div class="mega-menu-wrapper p-relative">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="bd-header-logo">
                            <a href="{{route('index')}}">
{{--                                <img src="{{asset( 'public/' . \App\Models\Setting::where('name', 'logo')->first()->value)}}" alt="logo" height="88px">--}}
                            </a>
                        </div>
                        <div class="bd-header-meta-text">
                            {{--                                            <p>I Wanto to Learn Society</p>--}}
{{--                            <p><a href="{{ route('locale', ['en']) }}" style="color: #0d6efd;">English</a> | <a--}}
{{--                                    href="{{ route('locale', ['ar']) }}" style="color: #0d6efd;">العربية</a></p>--}}
                            @if(app()->getLocale() == 'ar')
                                <a href="{{ route('locale', ['en']) }}" style="color: #0d6efd;">English</a>
                            @else
                                <a href="{{ route('locale', ['ar']) }}" style="color: #0d6efd;font-family: 'Droid Arabic Kufi', sans-serif;">العربية</a>
                            @endif

                        </div>
                        <div class="bd-main-menu d-none d-lg-flex align-items-center">
                            <nav id="mobile-menu">
                                <ul>
                                    <li>
                                        <a href="{{ route('index') }}"> {{ __("interface.Home") }} </a>
                                    </li>
                                    <li @if(\App\Models\Page::where('parent', 'Learning Services')->count() > 0) class="has-dropdown" @endif>
                                        <a href="{{ route('services-view') }}"> {{ __("contents.service") }} </a>
                                        @if(\App\Models\Page::where('parent', 'Learning Services')->count() > 0)
                                            <ul class="submenu">
                                                @foreach(\App\Models\Page::where('parent', 'Learning Services')->get() as $page)
                                                    <li>
                                                        <a href="{{route('page.front', ['id' => $page->id])}}">{{ $page->{'title_'.app()->getLocale()} }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif

                                    </li>

                                    <li @if(\App\Models\Page::where('parent', 'About')->count() > 0) class="has-dropdown" @endif>
                                        <a href="{{route('page.front', ['id' => 1])}}">{{ __("layout.About") }}</a>
                                        @if(\App\Models\Page::where('parent', 'About')->count() > 0)
                                        <ul class="submenu">
                                            @foreach(\App\Models\Page::where('parent', 'About')->get() as $page)
                                                <li>
                                                    <a href="{{route('page.front', ['id' => $page->id])}}">{{ $page->{'title_'.app()->getLocale()} }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                    <li class="">
                                        <a href="{{ route('news-front') }}"> {{ __("layout.News") }} </a>
                                    </li>

                                    <li class="has-dropdown">
                                        <a href="{{route('gallery-list')}}">{{ __('layout.Media Center') }}</a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="{{ route('gallery-list') }}">{{ __('layout.Photo Gallery') }}</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('video-gallery') }}">{{ __('layout.Video Gallery') }}</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{route('contact')}}">{{ __('layout.Contact Us') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{route('front-volunteers')}}">{{ __('layout.Volunteers') }}</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="bd-search-btn-wrapper">
                                <button class="bd-search-open-btn">
                                    <i class="flaticon-search"></i>
                                </button>
                            </div>
                        </div>
                        <div class="bd-header-bottom-right d-flex justify-content-end align-items-center">
                            <div class="bd-header-btn d-none d-xl-block">
                                <a href="{{route('donate-view')}}" class="bd-btn">
                                  <span class="bd-btn-inner">
                                     <span class="bd-btn-normal">{{ __('layout.Donate') }}</span>
                                     <span class="bd-btn-hover">{{ __('layout.Donate') }}</span>
                                  </span>
                                </a>
                            </div>

                            <div class="bd-header-btn d-none d-xl-block">
                                <a href="{{route('subscribe-view')}}" class="bd-btn">
                                  <span class="bd-btn-inner">
                                     <span class="bd-btn-normal">{{ __('layout.Be A Member') }}</span>
                                     <span class="bd-btn-hover">{{ __('layout.Be A Member') }}</span>
                                  </span>
                                </a>
                            </div>
                            <div class="header-hamburger">
                                <button type="button" class="hamburger-btn offcanvas-open-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header bottom area end -->
    </div>
</header>
<!-- header area end here -->


<main style="font-family: 'Droid Arabic Kufi', sans-serif;">
@yield('content')


<!-- newsletter area start here  -->
    <section class="bd-newsletter-area">
        <div class="container">
            <div class="bd-newsletter pt-100 pb-100 theme-bg">
{{--                <div class="bd-newsletter-bg" data-background="{{asset('public/assets/img/bg/newsletter-bg.jpg')}}"></div>--}}
                <div class="bd-newsletter-bg" data-background="{{'public/' .@\App\Models\Setting::where('name', 'newsLetterBackground')->first()->value}}"></div>
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="bd-newsletter-content">
                            <div class="bd-section-title-wrapper text-center is-white mb-45">
                                <h2 class="bd-section-title mb-0">{{ __('layout.Join Our Membership') }}</h2>
                                <p>{{ __('layout.be a special part of their life and subscribe to "I Want To Learn Society" Membership') }}</p>
                            </div>
                            <div class="bd-newsletter-form text-center">
                                <a href="{{route('subscribe-view')}}" class="bd-btn btn-white"
                                   style="align-content: center; align-items: center; background: #00839F; color: black">
                                               <span class="bd-btn-inner">
                                                  <span class="bd-btn-normal">{{ __('layout.Be A Member') }}</span>
                                                  <span class="bd-btn-hover">{{ __('layout.Be A Member') }}</span>
                                               </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- newsletter area end here  -->
</main>


<!-- footer area start -->
<footer @if(app()->getLocale() == 'en') dir="ltr" @endif>
    <div class="bd-footer-area pt-200">
        <!-- footer area bg here  -->
        <div class="bd-gradient-bg"></div>
        <div class="bd-footer pt-90 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="bd-footer-widget bd-footer-widget-1 mb-50">
                            <div class="bd-footer-logo mb-35">
                                <a href="{{route('index')}}"> <img
{{--                                        src="{{asset( 'public/' . \App\Models\Setting::where('name', 'logo')->first()->value)}}"--}}
{{--                                        alt="img not found!"></a>--}}
                            </div>
                            <div class="bd-footer-widget-content mb-40">
                                <p>{{$siteName}}. </p>
                            </div>
                            <div class="bd-footer-bottom-social pb-20">
                                <ul>
                                    <li><a target="_blank" href="{{\App\Models\Setting::where('name', 'facebook')->first()->value}}"><i
                                                class="fa-brands fa-facebook-f"></i></a></li>
{{--                                    <li><a target="_blank" href="{{\App\Models\Setting::where('name', 'twitter')->first()->value}}"><i--}}
{{--                                                class="fa-brands fa-twitter"></i></a></li>--}}
                                    <li class="sc-item" title="tiktok">
                                        <a class="sc-link" target="_blank" href="{{ \App\Models\Setting::where('name', 'tiktok')->first()->value }}">
                                            <i class="fab fa-tiktok sc-icon"></i>
                                        </a>
                                    </li>
                                    <li><a target="_blank" href="{{\App\Models\Setting::where('name', 'youtube')->first()->value}}"><i
                                                class="fa-brands fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="bd-footer-widget bd-footer-widget-2 mb-50">
                            <div class="bd-footer-widget-content">
                                <h4 class="bd-footer-widget-title mb-30">{{ __("layout.QUICK LINKS") }}</h4>
                                <div class="bd-footer-list">
                                    <ul>
                                        <li class="">
                                            <a href="{{ route('index') }}" > {{ __("interface.Home") }} </a>
                                        </li>
                                        <li class="">
                                            <a href="{{ route('services-view') }}" > {{ __("contents.service") }} </a>
                                        </li>
                                        <li class="">
                                            <a href="{{route('page.front', ['id' => 1])}}">{{ __("layout.About") }}</a>
                                        </li>
                                        <li class="">
                                            <a href="{{ route('news-front') }}"> {{ __("layout.News") }} </a>
                                        </li>

                                        <li class="">
                                            <a href="{{route('gallery-list')}}">{{ __('layout.Media Center') }}</a>
                                        </li>

                                        <li class="">
                                            <a href="{{route('contact')}}">{{ __('layout.Contact Us') }}</a>
                                        </li>

                                        <li class="">
                                            <a href="{{route('front-volunteers')}}">{{ __('layout.Volunteers') }}</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="bd-footer-widget bd-footer-widget-4">
                            <div class="bd-footer-widget-content">
                                <h4 class="bd-footer-widget-title mb-30">{{ __('layout.Contact Us') }}</h4>
                                <div class="bd-footer-contact">
                                    <ul>
                                        <li><i class="fa-light fa-location-dot"></i><a
                                               target="_blank" href="https://www.google.com/maps/place/I+Want+To+Learn+School%26Society/@29.3126229,48.0345908,17z/data=!3m1!4b1!4m6!3m5!1s0x3fcf9d2dc3d943d7:0x53782298f99d1773!8m2!3d29.3126229!4d48.0345908!16s%2Fg%2F11rsfz5ry_?hl=en-KW">{{@\App\Models\Setting::where('name', 'mainAdress_'.app()->getLocale())->first()->value}}</a></li>
                                        <li><i class="fa-light fa-phone"></i><a
                                                href="tel:{{$phone}}">{{$phone}}</a>
                                        </li>
                                        <li><i class="fa-light fa-envelope"></i><a
                                                href="mailto:{{$mainEmail}}">{{$mainEmail}}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bd-footer-copyright pb-5">
            <div class="bd-footer-copyright-line pb-20">
                <img src="{{asset('public/assets/img/shape/wave-line.png')}}" alt="bottom line">
            </div>
            <div class="container">
                <div class="bd-footer-copyright-wrap d-flex align-items-md-center justify-content-center">
                    <div class="bd-footer-copyright-text pb-20">
                        <p>&copy;
                            {{ __("layout.copyRights", ["year" => date("Y")])  }}

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->

<!-- offcanvas area start -->
<div class="offcanvas__area">
    <div class="offcanvas__bg"></div>
    <div class="offcanvas__wrapper">
        <div class="offcanvas__content">
            <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                <div class="offcanvas__logo logo">
                    <a href="{{route('index')}}">
{{--                        <img src="{{asset( 'public/' . \App\Models\Setting::where('name', 'logo')->first()->value)}}" alt="logo">--}}
                    </a>
                </div>
                <div class="offcanvas__close">
                    <button class="offcanvas__close-btn">
                        <i class="fa-thin fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="offcanvas__search mb-0">
                <form action="{{route('search')}}">
                    <button type="submit"><i class="flaticon-search"></i></button>
                    <input type="text" name="q" placeholder="{{__('layout.Search here')}}">
                </form>
            </div>
            <div class="mobile-menu fix mt-40"></div>
            <div class="offcanvas__about d-none d-lg-block mt-30 mb-30">
                <h4>{{$siteName}}</h4>
{{--                <p>With the help of teachers and environment as the third teacher, students--}}
{{--                    have opportunities to confidently take risks.</p>--}}
            </div>
            <div class="offcanvas__contact mt-30 mb-30">
                <h4>{{ __('layout.Contact Us') }}</h4>
                <ul>
                    <li class="d-flex align-items-center gap-2">
                        <div class="offcanvas__contact-icon">
                            <a target="_blank"
                               href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">
                                <i class="fal fa-map-marker-alt"></i></a>
                        </div>
                        <div class="offcanvas__contact-text">
                            {{$address}}
                        </div>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                        <div class="offcanvas__contact-icon">
                            <a href="tel:{{$phone}}"><i class="far fa-phone"></i></a>
                        </div>
                        <div class="offcanvas__contact-text">
                            <a href="tel:{{$phone}}">{{$phone}}</a>
                        </div>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                        <div class="offcanvas__contact-icon">
                            <a href="mailto:{{$mainEmail}}"><i class="fal fa-envelope"></i></a>
                        </div>
                        <div class="offcanvas__contact-text">
                            <a href="mailto:{{$mainEmail}}">{{$mainEmail}}</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="offcanvas__social">
                <ul>
                    <li><a target="_blank" href="{{\App\Models\Setting::where('name', 'facebook')->first()->value}}"><i
                                class="fa-brands fa-facebook-f"></i></a>
                    </li>
{{--                    <li><a target="_blank" href="{{\App\Models\Setting::where('name', 'twitter')->first()->value}}"><i class="fa-brands fa-twitter"></i></a>--}}
{{--                    </li>--}}
                    <li class="sc-item" title="tiktok">
                        <a class="sc-link" target="_blank" href="{{ \App\Models\Setting::where('name', 'tiktok')->first()->value }}">
                            <i class="fab fa-tiktok sc-icon"></i>
                        </a>
                    </li>

                    <li><a target="_blank" href="{{\App\Models\Setting::where('name', 'youtube')->first()->value}}"><i class="fa-brands fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="body-overlay"></div>
<!-- offcanvas area end -->

<!-- serach popup area start here  -->
<div class="bd-search-popup-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bd-search-popup">
                    <div class="bd-search-form">
                        <form action="{{route('search')}}">
                            <div class="bd-search-input">
                                <input type="search" placeholder="{{__('layout.Search here')}}" name="q">
                                <div class="bd-search-submit">
                                    <button type="submit"><i class="flaticon-search"></i></button>
                                </div>
                            </div>
                        </form>
                        <div class="bd-search-close">
                            <div class="bd-search-close-btn">
                                <button><i class="fa-thin fa-close"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- search popup overlay  -->
<div class="bd-search-overlay"></div>
<!-- serach popup area end here  -->

<!-- JS here -->
<script src="{{asset('public/assets/js/vendor/jquery.js')}}"></script>
<script src="{{asset('public/assets/js/vendor/waypoints.js')}}"></script>
<script src="{{asset('public/assets/js/bootstrap-bundle.js')}}"></script>
<script src="{{asset('public/assets/js/meanmenu.js')}}"></script>
<script src="{{asset('public/assets/js/swiper-bundle.js')}}"></script>
<script src="{{asset('public/assets/js/slick.js')}}"></script>
<script src="{{asset('public/assets/js/nouislider.js')}}"></script>
<script src="{{asset('public/assets/js/magnific-popup.js')}}"></script>
<script src="{{asset('public/assets/js/parallax.js')}}"></script>
<script src="{{asset('public/assets/js/backtotop.js')}}"></script>
<script src="{{asset('public/assets/js/nice-select.js')}}"></script>
<script src="{{asset('public/assets/js/wow.min.js')}}"></script>
<script src="{{asset('public/assets/js/isotope-pkgd.js')}}"></script>
<script src="{{asset('public/assets/js/imagesloaded-pkgd.js')}}"></script>
<script src="{{asset('public/assets/js/ajax-form.js')}}"></script>
<script src="{{asset('public/assets/js/jquery.appear.js')}}"></script>
<script src="{{asset('public/assets/js/jquery.odometer.min.js')}}"></script>
{{--<script src="assets/js/main.js"></script>--}}
<script src="{{asset('public/assets/js/main_'. app()->getLocale() .'.js')}}"></script>

{{--<script>--}}

{{--var currentLocale = '{{ app()->getLocale() }}';--}}
{{--    // if (currentLocale == 'en') {--}}
{{--    //     $('html').attr('dir', '');--}}
{{--    // }--}}

{{--</script>--}}
@stack('scripts')
</body>

</html>
