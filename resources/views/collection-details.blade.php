@extends('layouts.front')

@section('content')

    <link rel="stylesheet" href="{{asset('front/css/vendors/vegas.min.css')}}">

    <section class="d-flex align-items-center page-hero hero-vegas-slider inner-page-hero " id="page-hero">
        <div class="overlay-color"></div>
        <div class="vegas-slider-content" data-vegas-slide-1="{{asset($page->banner1)}}" data-vegas-slide-2="{{ asset($page->banner2)}}">
            <div class="container">
                <div class="row">
                    <div class="col-12 hero-text-area ">
                        <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">{{ __('layout.our_collection') }}</h1>
                        <nav aria-label="breadcrumb ">
                            <ul class="breadcrumb wow fadeInUp" data-wow-delay="1s">
                                @php
                                    //$cat = $currentCategory ? \App\Models\Category::find($currentCategory) : null;
                                    $cat = null;
                                @endphp

                                {{-- Example breadcrumb home link --}}
                                {{-- <li class="breadcrumb-item"><a class="breadcrumb-link" href="#0"><i class="fas fa-home icon"></i>home</a></li> --}}

                                @if($cat)
                                    <li class="breadcrumb-item active" style="font-size: 2rem">
                                        {{ $cat->{'name_'.app()->getLocale()} }}
                                    </li>
                                @else
                                    <li class="breadcrumb-item active" style="font-size: 2rem">
                                        {{ __('layout.all') }}
                                    </li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End inner Page hero-->
    <!-- Start  about Section-->
    <!-- Start  about Section-->
    <!-- End  about Section-->

    <!-- Start  benefits Section-->
    <section class="portfolio mega-section section-bg-shade  " id="portfolio">
        @php $portfoliobgImage = \App\Models\PhotoSetting::where('name', 'middle banner background')->first(); @endphp
        <div class="overlay-photo-image-bg" style='background-image: url("{{$portfoliobgImage->image}}");'></div>
        <div class="container">
            <div class="portfolio-wraper  ">
                <style>
                    .portfolio-btn-list a {
                        text-decoration: none;
                    }

                </style>
                <!--a menu of links to show the photos users needs   -->
                <ul class="portfolio-btn-list ">
{{--                    <li class="portfolio-btn active " data-filter="*">{{ __('layout.all') }}</li>--}}
                    <li class="portfolio-btn" data-filter="*">
                        <a class="portfolio-btn" href="{{ route('collection') }}" @if(request()->route()->getName() == 'collection') style="color: #c1a37f" @endif>
                            {{ __('layout.all') }}
                        </a>
                    </li>

                    @foreach(\App\Models\Category::all() as $category)
                        <li class="portfolio-btn" data-filter=".{{\Illuminate\Support\Str::replace(' ', '_', $category->name_en)}}">
                            <a class="portfolio-btn" href="{{ route('collection-details', $category->id) }}"
                            @if(request()->route()->getName() == 'collection-details' && request()->route('collection') == $category->id ) style="color: #c1a37f" @endif>
                                {{ $category->{'name_'.app()->getLocale()} }}
                            </a>
                        </li>
                    @endforeach
{{--                    @foreach(\App\Models\Category::all() as $category)--}}
{{--                        <li class="portfolio-btn        " data-filter=".{{\Illuminate\Support\Str::replace(' ', '_', $category->name_en)}}">{{ $category->{'name_'.app()->getLocale()} }}</li>--}}
{{--                    @endforeach--}}
                </ul>
                <div class="portfolio-group wow fadeIn" data-wow-delay=".2s">
                    <div class="row  g-0 ">
                        @foreach($galleries as $gallery)
                            <div class="col-12  col-sm-6  col-lg-4  portfolio-item {{\Illuminate\Support\Str::replace(' ', '_', \App\Models\Category::find($gallery->category_id)->name_en)}} ">
                                <div class="item"><a class="portfolio-img-link " href="{{asset($gallery->image)}}" data-fancybox=".filter">
                                        <div class="overlay overlay-color"></div><img class="portfolio-img  img-fluid " src="{{asset($gallery->image)}}" alt="portfolio item photo">{{--<i class="fas fa-arrow-right icon"></i>--}}</a>
                                    <div class="item-info "><span class="info-title">{{ \App\Models\Category::find($gallery->category_id)->{'name_'.app()->getLocale()}  }}</span>
                                        <ul class="tags-list">
                                            <li class="tag-item"> <a class="tag-link" href="#">{{ $gallery->{'title_'.app()->getLocale()} }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    {{ $galleries->links() }}
                </div>
            </div>
            <!--Start .see-more-area-->
{{--            <div class=" see-more-area   wow fadeInUp" data-wow-delay="0s"> <a class=" ma-btn-primary " href="{{ route('collection-details') }}">see our portfolio</a></div>--}}
            <!--End .see-more-area-->
        </div>
    </section>
    <!-- End  benefits Section-->
    <!-- Start  blog Section-->
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


