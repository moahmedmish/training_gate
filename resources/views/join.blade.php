@extends('layouts.front')

@section('content')

    <link rel="stylesheet" href="{{asset('front/css/vendors/vegas.min.css')}}">
    <!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero hero-vegas-slider inner-page-hero " id="page-hero">
        <div class="overlay-color"></div>
        @php  $joinPage = \App\Models\Page::where('route_name', 'join')->first() ;@endphp
{{--        <div class="vegas-slider-content" data-vegas-slide-1="" data-vegas-slide-2="">--}}
        <div class="vegas-slider-content" data-vegas-slide-1="{{asset($joinPage->banner1)}}" data-vegas-slide-2="{{asset($joinPage->banner2)}}">
            <div class="container">
                <div class="row">
                    <div class="col-12 hero-text-area ">
                        <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">{{ __('layout.join_us') }}</h1>
                        <nav aria-label="breadcrumb ">
{{--                            <ul class="breadcrumb wow fadeInUp" data-wow-delay="1s">--}}
{{--                                <li class="breadcrumb-item"><a class="breadcrumb-link" href="#0"><i class="fas fa-home icon "></i>home</a></li>--}}
{{--                                <li class="breadcrumb-item active">contact us</li>--}}
{{--                            </ul>--}}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End inner Page hero-->
    <!-- Start contact-info-1-->
    <!-- End contact-info-1-->
    <!-- Start contact-us -->
    <section class="contact-us  mega-section section-bg-shade" id="contact-us">
        <div class="container">
            <div class="section-heading center-heading">
                <h2 class="section-title wow" data-splitting="words">{{ __('layout.Leave_your_message') }}</h2>
                <div class="line-on-center wow fadeIn" data-wow-delay=".6s"></div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-9  mx-auto wow fadeInUp  " data-wow-delay="0.6s">
                    <div class="main-form-wraper input-boxed">
                        <!--Form To have user messages-->

                        <form class="main-form" id="join-us-form" action="{{route('joins.store')}}" method="post" enctype="multipart/form-data">
                            <span class="done-msg"></span>
                            @csrf
                            <div class="row ">
                                <div class="col-12 col-lg-6">
                                    <div class="   input-wraper">
                                        <input class="text-input" id="user-name" name="name" type="text"/>
                                        <label for="user-name"> {{ __('layout.name') }} <span class="req">*</span></label><span class="b-border"></span><span class="error-msg"></span>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="   input-wraper">
                                        <input class="text-input" id="user-email" name="email" type="email"/>
                                        <label for="user-email"> {{ __('layout.email') }} <span class="req">*</span></label><span class="b-border"></span><span class="error-msg"></span>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="input-wraper">
                                        <input class="file-input" id="cv-upload" name="cv" type="file" />
                                        <label for="cv">CV <span class="req">*</span></label>
                                        <span class="error-msg"></span>
                                    </div>
                                </div>


                                <div class="col-12 ">
                                    <div class="   input-wraper">
                                        <textarea class=" text-input" id="msg-text" name="message"></textarea>
                                        <label for="msg-text"> {{ __('layout.message') }} <span class="req">*</span></label><span class="b-border"></span><i></i>
                                    </div>
                                </div>
                                <div class="col-12 submit-wraper">
                                    <button class=" ma-btn-primary" id="join-submit-btn" type="submit" name="UserSubmit">{{ __('layout.send') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End contact-us -->

@endsection
