<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TGI- Admin Dashborad</title>
    <!-- Styles -->
    @include('partials.styles')
</head>
@php
    $toremove = \Illuminate\Support\Str::contains(request()->route()->getName(), '.create')? '.create':'.edit';
    $routename = \Illuminate\Support\Str::replace($toremove,'', request()->route()->getName())  ;
    $pageNamePlural = ucfirst($routename);
    $pageNameSingular = ucfirst(\Illuminate\Support\Str::singular($pageNamePlural));
    $pageNamePlural = str_replace('_', ' ', $pageNamePlural);
@endphp

<body class="boxed-size">
@include('partials.preloader')
@include('partials.sidebar')

<div class="container-fluid">
    <div class="main-content d-flex flex-column">
        <!-- Start Header Area -->
        @include('partials.header')
        <!-- End Header Area -->

        <div class="main-content-container overflow-hidden">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
                <h3 class="mb-0">{{$pageNamePlural== 'Galleries'? 'Collections': $pageNamePlural}}</h3>

                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb align-items-center mb-0 lh-1">
                        <li class="breadcrumb-item">
                            <a href="#" class="d-flex align-items-center text-decoration-none">
                                <i class="ri-home-4-line fs-18 text-primary me-1"></i>
                                <span class="text-secondary fw-medium hover">Dashboard</span>
                            </a>
                        </li>
{{--                        <li class="breadcrumb-item active" aria-current="page">--}}
{{--                            <span class="fw-medium">Forms</span>--}}
{{--                        </li>--}}
                        <li class="breadcrumb-item active" aria-current="page">
                            <span class="fw-medium">{{ $pageNamePlural == 'Galleries'? 'Collections': $pageNamePlural}}</span>
                        </li>
                    </ol>
                </nav>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card bg-white border-0 rounded-3 mb-4">
                        <div class="card-body p-4">
                            <h4 class="fs-18 mb-4"></h4>
                            @include('adminlte-templates::common.errors')

                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex-grow-1"></div>

        <!-- Start Footer Area -->
        @include('partials.footer')
        <!-- End Footer Area -->
    </div>
</div>

@include('partials.theme_settings')
@include('partials.scripts')
</body>
</html>


