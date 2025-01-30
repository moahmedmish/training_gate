<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8"/>
    @php
        $locale = app()->getLocale();
        $siteTitleKey = $locale === 'ar' ? 'site_title_ar' : 'site_title_en';
        $siteTitle = collect($global_settings)->firstWhere('name', $siteTitleKey)['value'] ?? 'Priva - Insurance Company Website Template';
    @endphp
    <title>@yield('title', $siteTitle)</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="@yield('meta_description', 'Priva - Insurance Company Website Template')" name="description"/>
    <meta content="@yield('meta_keywords', '')" name="keywords"/>
    <meta content="@yield('meta_author', '')" name="author"/>

    <!--[if lt IE 9]>
    <script src="{{ asset('front/js/html5shiv.js') }}"></script>
    <![endif]-->

    <!-- CSS Files
    ================================================== -->
    <link href="{{ asset('front/css/jpreloader.css') }}" rel="stylesheet" type="text/css">
    <link id="bootstrap" href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link id="bootstrap-grid" href="{{ asset('front/css/bootstrap-grid.min.css') }}" rel="stylesheet" type="text/css"/>
    <link id="bootstrap-reboot" href="{{ asset('front/css/bootstrap-reboot.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('front/css/animate.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('front/css/owl.carousel.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('front/css/owl.theme.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('front/css/owl.transitions.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('front/css/magnific-popup.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('front/css/jquery.countdown.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet" type="text/css"/>

    <!-- color scheme -->
    <link id="colors" href="{{ asset('front/css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css"/>
    @if (app()->getLocale() != 'ar')
        <link href="{{ asset('front/css/coloring.css') }}" rel="stylesheet" type="text/css"/>
    @elseif (app()->getLocale() == 'ar')
        <link href="{{ asset('front/css/coloring_ar.css') }}" rel="stylesheet" type="text/css"/>
    @endif


    <!-- RS5.0 Stylesheet -->
    <link rel="stylesheet" href="{{ asset('front/revolution/css/settings.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front/revolution/css/layers.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front/revolution/css/navigation.css') }}" type="text/css">

</head>
