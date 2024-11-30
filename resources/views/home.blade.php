@extends('layouts.front')
@section('content')

<!-- Start  Page hero-->
<section class="page-hero hero-swiper-slider slider-fade off-grid-text  d-flex align-items-center" id="page-hero">
    @php $slidersbgImage = \App\Models\PhotoSetting::where('name', 'overlay slider banner')->first(); @endphp

    <div class="overlay-photo-image-bg " style='background-image: url("{{$slidersbgImage->image}}");'></div>
    <div class="overlay-color"></div>
    <div class="hero-social-icons center-position start-align  ">
        <div class="sc-wraper dir-col sc-flat ">
            <ul class="sc-list">
                <li class="sc-item " title="Facebook"><a class="sc-link" target="_blank" href="{{\App\Models\Setting::where('name', 'facebook')->first()->value}}"><i class="fab fa-facebook-f sc-icon"></i></a></li>
                    <li class="sc-item " title="youtube"><a class="sc-link" target="_blank" href="{{\App\Models\Setting::where('name', 'youtube')->first()->value}}"><i class="fab fa-youtube sc-icon"></i></a></li>
                <li class="sc-item " title="instagram"><a class="sc-link" target="_blank" href="{{\App\Models\Setting::where('name', 'instagram')->first()->value}}"><i class="fab fa-instagram sc-icon"></i></a></li>
{{--                <li class="sc-item " title="twitter"><a class="sc-link" target="_blank" href="{{\App\Models\Setting::where('name', 'twitter')->first()->value}}"><i class="fab fa-x-twitter sc-icon"></i></a></li>--}}
                <li class="sc-item" title="tiktok">
                    <a class="sc-link" target="_blank" href="{{ \App\Models\Setting::where('name', 'tiktok')->first()->value }}">
                        <i class="fab fa-tiktok sc-icon"></i>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <!--Start  Swiper JS slider-->
    <div class="slider swiper-container">
        <div class="swiper-wrapper ">
            @foreach($sliders as $slider)
            <div class="swiper-slide">
                <div class="slide-content">
                    <div class="slider-bg">
{{--                        <div class="overlay-color"></div><img class="slider-bg-img" src="{{asset('front/assets/images/hero/hero-slider-bg-img-2-small.jpg')}}" alt="slider-bg 2">--}}
                        <div class="overlay-color"></div><img class="slider-bg-img" src="{{asset($slider->image)}}" alt="slider-bg 2">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12  offset-xl-1 col-lg-8  ">
                                <div class="hero-text-area ">
                                    <div class="tag-line wow fadeInDown" data-wow-offset="0" data-wow-delay=".2s">{{ __('layout.roma') }}    </div>
                                    <h1 class="slide-title " @if(app()->getLocale() == 'en') data-splitting="chars" @else data-splitting="words" @endif >{{ $slider->{'title_'.app()->getLocale()} }}</h1>
                                    <p class="slide-subtitle">
                                        {{ $slider->{'summary_'.app()->getLocale()} }}
{{--                                        {{$slider->summary_en}}--}}
                                    </p>
{{--                                    <div class="cta-links-area wow  fadeInUp " data-wow-delay="0.8s"><a class=" ma-btn-primary cta-link cta-link-primary  " href="#0">start now</a></div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!--third slider-->
{{--            <div class="swiper-slide">--}}
{{--                <div class="slide-content">--}}
{{--                    <div class="slider-bg">--}}
{{--                        <div class="overlay-color"></div><img class="slider-bg-img" src="{{asset('front/assets/images/hero/hero-slider-bg-img-3-small.jpg')}}" alt="slider-bg 3">--}}
{{--                    </div>--}}
{{--                    <div class="container">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-12  offset-xl-1  col-lg-8  ">--}}
{{--                                <div class="hero-text-area  ">--}}
{{--                                    <div class="tag-line wow fadeInDown" data-wow-offset="0" data-wow-delay=".2s ">furniture             </div>--}}
{{--                                    <h1 class="slide-title " data-splitting="chars"> {{}}</h1>--}}
{{--                                    <p class="slide-subtitle">--}}
{{--                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Sed--}}
{{--                                        architecto dolorum inventore totam adipisci provident placeat perspiciatis--}}
{{--                                    </p>--}}
{{--                                    <div class="cta-links-area wow  fadeInUp " data-wow-delay="0.8s"><a class=" ma-btn-primary cta-link cta-link-primary  " href="#0">start now</a></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <!--Add Pagination-->
        <div class="swiper-pagination wow fadeInUp" data-wow-offset="0" data-wow-delay=".2s"></div>
        <!--Add Arrows -->
        <div class="slider-stacked-arrows">
            <div class="swiper-button-prev  wow fadeInRight" data-wow-offset="0" data-wow-delay=".2s">
                <div class="left-arrow"><i class="fas @if(app()->getLocale() == 'ar') fa-arrow-right @else fa-arrow-left @endif icon "></i>
                </div>
            </div>
            <div class="swiper-button-next wow fadeInRight" data-wow-offset="0" data-wow-delay=".4s">
                <div class="right-arrow"><i class="fas @if(app()->getLocale() == 'ar') fa-arrow-left @else fa-arrow-right @endif icon "></i>
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

                        {{--                        <div class="info-items-grid ">--}}
{{--                            <div class="row ">--}}
{{--                                <div class="col-12 col-md-6">--}}
{{--                                    <div class="info-item wow fadeInUp" data-wow-delay=".2s">--}}
{{--                                        <h5 class="item-title"><i class="fas fa-chess-rook item-icon"></i>Planning </h5>--}}
{{--                                        <p class="item-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.       </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-12 col-md-6">--}}
{{--                                    <div class="info-item wow fadeInUp" data-wow-delay=".4s">--}}
{{--                                        <h5 class="item-title"><i class="fas fa-database item-icon"></i>designing </h5>--}}
{{--                                        <p class="item-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.       </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-12 col-md-6">--}}
{{--                                    <div class="info-item wow fadeInUp" data-wow-delay=".6s">--}}
{{--                                        <h5 class="item-title"><i class="fas fa-chart-line item-icon"></i>building </h5>--}}
{{--                                        <p class="item-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.       </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-12 col-md-6">--}}
{{--                                    <div class="info-item wow fadeInUp" data-wow-delay=".8s">--}}
{{--                                        <h5 class="item-title"><i class="fas fa-layer-group item-icon"></i>deliver </h5>--}}
{{--                                        <p class="item-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.       </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div><a class=" ma-btn-primary " href="about-us_dark.html">Learn more</a>--}}
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
    @php $servicebgImage = \App\Models\PhotoSetting::where('name', 'top banner background')->first(); @endphp
    <div class="overlay-photo-image-bg   parallax" style='background-image: url("{{$servicebgImage->image}}");'></div>
    <div class="overlay-color"></div>
    <div class="container">
        <div class="section-heading center-heading">
            <h2 class="section-title wow" data-splitting="words">{{ __('layout.servieces_we_offer') }}</h2>
            <div class="line-on-center wow fadeIn" data-wow-delay=".6s"></div>
        </div>
        <div class="row  g-0  services-row">
            @foreach($services as $service)
                <div class="col-12 col-md-6  col-lg-3 mx-auto">
                    <!--Start First service box-->
                    <div class="service-box  wow fadeInUp" data-wow-offset="0" data-wow-delay=".2s">
                        <div class="bg-img">
                            <div class="overlay-color"></div><img class="service-bg-img" src="{{asset($service->image)}}" alt="service-bg"/>
                        </div>
                        <div class="service-icon"><i class="fas @if($service->id == 1) fa-layer-group  @elseif($service->id == 2)fa-pencil-ruler @else fa-drafting-compass @endif font-icon"></i></div>
{{--                        <div class="service-icon"><i class="fas fa-pencil-ruler font-icon"></i></div>--}}
{{--                        <div class="service-icon"><i class="fas fa-layer-group font-icon"></i></div>--}}
                        <div class="service-content">
                            <h3 class="service-title"> {{ $service->{'title_'.app()->getLocale()} }}</h3>
                            <p class="service-text">
                                {{ $service->{'title_'.app()->getLocale()} }}
                            </p>
                        </div>
                        <a class="read-more" href="{{ route('service-details', $service->id) }}">{{ __('layout.read_more') }}<i class="fas fa-arrow-right icon ">           </i></a>
                    </div>
                    <!-- End First service box                    -->
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End  services Section-->
<!-- Start  compare-before-after-->
<section class="compare mega-section section-bg-shade" id="compare">
    <div class="container">
        <div class="section-heading center-heading">
            <h2 class="section-title wow" data-splitting="words">{{ __('layout.amazing_transformation') }}</h2>
{{--            <p class="section-subtitle wow fadeInUp" data-wow-delay=".5s"> Drag the slider handel to See the diffrences after project completed</p>--}}
            <div class="line-on-center wow fadeIn" data-wow-delay=".6s"></div>
        </div>
        <div class="before-after" id="before-after">
            <!-- The before image is first--><img src="{{asset(\App\Models\PhotoSetting::where('name', 'before')->first()->image)}}" alt="before">
            <!--  The after image is last--><img src="{{asset(\App\Models\PhotoSetting::where('name', 'after')->first()->image)}}" alt="after">
        </div>
    </div>
</section>
<!-- End  compare-before-after-->
<!-- Start  portfolio Section-->
<section class="portfolio mega-section section-bg-shade  " id="portfolio">
    @php $portfoliobgImage = \App\Models\PhotoSetting::where('name', 'middle banner background')->first(); @endphp
    <div class="overlay-photo-image-bg" style='background-image: url("{{$portfoliobgImage->image}}");'></div>
    <div class="container">
        <div class="section-heading center-heading">
            <h2 class="section-title wow" data-splitting="words">{{ __('layout.our_collection') }}</h2>
            <div class="line-on-center wow fadeIn" data-wow-delay=".6s"></div>
        </div>
        <div class="portfolio-wraper  ">
            <!--a menu of links to show the photos users needs   -->
            <ul class="portfolio-btn-list ">
                <li class="portfolio-btn active " data-filter="*">{{ __('layout.all') }}</li>
                @foreach(\App\Models\Category::all() as $category)
                    <li class="portfolio-btn        " data-filter=".{{\Illuminate\Support\Str::replace(' ', '_', $category->name_en)}}">{{ $category->{'name_'.app()->getLocale()} }}</li>
                @endforeach
{{--                <li class="portfolio-btn        " data-filter=".Stone">{{ __('layout.Stone') }}</li>--}}
{{--                <li class="portfolio-btn        " data-filter=".Onyx">{{ __('layout.Onyx') }}</li>--}}
{{--                <li class="portfolio-btn        " data-filter=".Granite">{{ __('layout.Granite') }}</li>--}}
            </ul>
            <div class="portfolio-group wow fadeIn" data-wow-delay=".2s">
                <div class="row  g-0 ">
                    @foreach($galleries as $gallery)
                        <div class="col-12  col-sm-6  col-lg-4  portfolio-item {{\Illuminate\Support\Str::replace(' ', '_', \App\Models\Category::find($gallery->category_id)->name_en)}} ">
                            <div class="item"><a class="portfolio-img-link " href="{{asset($gallery->image)}}" data-fancybox=".filter">
                                    <div class="overlay overlay-color"></div><img class="portfolio-img  img-fluid " src="{{asset($gallery->image)}}" alt="portfolio item photo">{{--<i class="fas fa-arrow-right icon"></i>--}}</a>
{{--                                <div class="item-info "><span class="info-title">{{__('layout.'.$gallery->category)}}   </span>--}}
                                <div class="item-info "><span class="info-title">{{ \App\Models\Category::find($gallery->category_id)->{'name_'.app()->getLocale()}  }}</span>
                                    <ul class="tags-list">
                                        <li class="tag-item"> <a class="tag-link" href="#">{{ $gallery->{'title_'.app()->getLocale()} }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach


{{--                    <div class="col-12  col-sm-6  col-lg-4  portfolio-item Marble ">--}}
{{--                        <div class="item"><a class="portfolio-img-link " href="{{asset('front/assets/images/portfolio/1.jpg')}}" data-fancybox=".filter">--}}
{{--                                <div class="overlay overlay-color"></div><img class="portfolio-img  img-fluid " src="{{asset('front/assets/images/portfolio/1.jpg')}}" alt="portfolio item photo"><i class="fas fa-arrow-right icon"></i></a>--}}
{{--                            <div class="item-info "><span class="info-title">Marble   </span>--}}
{{--                                <ul class="tags-list">--}}
{{--                                    <li class="tag-item"> <a class="tag-link" href="#">lights</a></li>--}}
{{--                                    <li class="tag-item"> <a class="tag-link" href="#">decoration </a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12  col-sm-6  col-lg-4  portfolio-item Stone  ">--}}
{{--                        <div class="item"><a class="portfolio-img-link " href="{{asset('front/assets/images/portfolio/2.jpg')}}" data-fancybox=".filter">--}}
{{--                                <div class="overlay overlay-color"></div><img class="portfolio-img  img-fluid " src="{{asset('front/assets/images/portfolio/2.jpg')}}" alt="portfolio item photo"><i class="fas fa-arrow-right icon"></i></a>--}}
{{--                            <div class="item-info "><span class="info-title">Stone   </span>--}}
{{--                                <ul class="tags-list">--}}
{{--                                    <li class="tag-item"> <a class="tag-link" href="#">simple</a></li>--}}
{{--                                    <li class="tag-item"> <a class="tag-link" href="#">fancy  </a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12  col-sm-6  col-lg-4  portfolio-item Onyx ">--}}
{{--                        <div class="item"><a class="portfolio-img-link " href="{{asset('front/assets/images/portfolio/3.jpg')}}" data-fancybox=".filter">--}}
{{--                                <div class="overlay overlay-color"></div><img class="portfolio-img  img-fluid " src="{{asset('front/assets/images/portfolio/3.jpg')}}" alt="portfolio item photo"><i class="fas fa-arrow-right icon"></i></a>--}}
{{--                            <div class="item-info "><span class="info-title">Onyx  </span>--}}
{{--                                <ul class="tags-list">--}}
{{--                                    <li class="tag-item"> <a class="tag-link" href="#">classic</a></li>--}}
{{--                                    <li class="tag-item"> <a class="tag-link" href="#">modern  </a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12  col-sm-6  col-lg-4  portfolio-item Marble ">--}}
{{--                        <div class="item"><a class="portfolio-img-link " href="{{asset('front/assets/images/portfolio/4.jpg')}}" data-fancybox=".filter">--}}
{{--                                <div class="overlay overlay-color"></div><img class="portfolio-img  img-fluid " src="{{asset('front/assets/images/portfolio/4.jpg')}}" alt="portfolio item photo"><i class="fas fa-arrow-right icon"></i></a>--}}
{{--                            <div class="item-info "><span class="info-title">Marble</span>--}}
{{--                                <ul class="tags-list">--}}
{{--                                    <li class="tag-item"> <a class="tag-link" href="#">modern</a></li>--}}
{{--                                    <li class="tag-item"> <a class="tag-link" href="#">luxery</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12  col-sm-6  col-lg-4  portfolio-item Granite ">--}}
{{--                        <div class="item"><a class="portfolio-img-link " href="{{asset('front/assets/images/portfolio/5.jpg')}}" data-fancybox=".filter">--}}
{{--                                <div class="overlay overlay-color"></div><img class="portfolio-img  img-fluid " src="{{asset('front/assets/images/portfolio/5.jpg')}}" alt="portfolio item photo"><i class="fas fa-arrow-right icon"></i></a>--}}
{{--                            <div class="item-info "><span class="info-title">Granite</span>--}}
{{--                                <ul class="tags-list">--}}
{{--                                    <li class="tag-item"> <a class="tag-link" href="#">simple</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12  col-sm-6  col-lg-4  portfolio-item Marble">--}}
{{--                        <div class="item"><a class="portfolio-img-link " href="{{asset('front/assets/images/portfolio/6.jpg')}}" data-fancybox=".filter">--}}
{{--                                <div class="overlay overlay-color"></div><img class="portfolio-img  img-fluid " src="{{asset('front/assets/images/portfolio/6.jpg')}}" alt="portfolio item photo"><i class="fas fa-arrow-right icon"></i></a>--}}
{{--                            <div class="item-info "><span class="info-title">Marble</span>--}}
{{--                                <ul class="tags-list">--}}
{{--                                    <li class="tag-item"> <a class="tag-link" href="#">luxery</a></li>--}}
{{--                                    <li class="tag-item"> <a class="tag-link" href="#">high class </a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
        <!--Start .see-more-area-->
        <div class=" see-more-area   wow fadeInUp" data-wow-delay="0s"> <a class=" ma-btn-primary " href="{{ route('collection') }}">{{ __('layout.see_our_collections') }}</a></div>
        <!--End .see-more-area-->
    </div>
</section>
<!-- End  portfolio Section-->
<!-- Start  our-clients Section-->
<section class="our-clients our-clients-blocks  mega-section " id="our-clients">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 align-self-center">
                <div class="tag-line wow fadeInDown" data-wow-delay="0s" >{{ __('layout.our_clients') }}</div>
                <div class="section-heading side-heading light-title ">
                    <h2 class="section-title wow" data-splitting="words" style="color: #252525">{{ __('layout.meet_our_satisfied_clients') }} </h2>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="row blocks-row">
                    @foreach($clients as $client)
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="client-block wow fadeInUp" data-wow-delay="0.2s"><a target="_blank" href="{{$client->url}}"><img class="img-fluid logo " src="{{asset($client->logo)}}" alt="{{ $client->{'name_'.app()->getLocale()} }} "></a></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End  our-clients Section-->
<!-- Start  testimonials Section-->
{{--<section class="testimonials  testimonials-1-col off-grid bg-img-section d-flex align-items-center mega-section section-bg-shade " id="testimonials-off-grid-1-col">--}}
{{--    @php $testimonialsbgImage = \App\Models\PhotoSetting::where('name', 'top banner background')->first(); @endphp--}}
{{--    <div class="overlay-photo-image-bg   parallax" style="background-image: url({{$testimonialsbgImage->image}});"></div>--}}

{{--    <div class="overlay-photo-image-bg parallax"></div>--}}
{{--    <div class="overlay-color"></div>--}}
{{--    <div class="container">--}}
{{--        <div class="row d-flex align-items-center">--}}
{{--            <div class="col-12 col-lg-4 ">--}}
{{--                <div class="tag-line wow fadeInDown" data-wow-delay="0s">testmonials</div>--}}
{{--                <div class="section-heading side-heading light-title ">--}}
{{--                    <h2 class="section-title wow" data-splitting="chars">our clients Feedback about their experience with us </h2>--}}
{{--                </div>--}}
{{--                <!--Start .see-more-area-->--}}
{{--                <div class=" see-more-area d-none  d-lg-flex justify-content-start wow fadeInUp " data-wow-delay="0.4s"><a class=" ma-btn-secondary " href="testimonials_dark.html">see all testimonials</a></div>--}}
{{--                <!--End Of .see-more-area               -->--}}
{{--            </div>--}}
{{--            <div class="col-12 col-lg-8">--}}
{{--                <div class="swiper-container  wow fadeIn  " data-wow-delay="0s">--}}
{{--                    <div class="swiper-wrapper">--}}
{{--                        <!--First Slide-->--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="testmonial-box d-flex align-items-center justify-content-center">--}}
{{--                                <div class="testimonial-content">--}}
{{--                                    <div class="customer-info "><img class="img-fluid " src="{{asset('front/assets/images/testimonials/1.jpg')}}" alt="First Slide ">--}}
{{--                                        <div class="customer-details">--}}
{{--                                            <p class="customer-name">aly ahmed</p>--}}
{{--                                            <p class="customer-role">manager</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="customer-testimonial"><i class="fas fa-quote-left   icon"></i>--}}
{{--                                        <div class="rating-stars"><i class="fas fa-star star-icon"></i><i class="fas fa-star star-icon"></i><i class="fas fa-star star-icon"></i><i class="fas fa-star star-icon"></i><i class="fas fa-star star-icon off"></i></div>--}}
{{--                                        <div class="content">--}}
{{--                                            <p class="testimonial-text ">--}}
{{--                                                ipsum--}}
{{--                                                dolor sit amet consectetur adipisicing elit. Quod, id sequi aut qui est--}}
{{--                                                ab,--}}
{{--                                                corporis quis maiores reiciendis explicabo odio tenetur nulla sint vel.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--Second Slide-->--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="testmonial-box d-flex align-items-center justify-content-center">--}}
{{--                                <div class="testimonial-content">--}}
{{--                                    <div class="customer-info "><img class="img-fluid " src="{{asset('front/assets/images/testimonials/2.jpg')}}" alt="First Slide ">--}}
{{--                                        <div class="customer-details">--}}
{{--                                            <p class="customer-name">allan smith</p>--}}
{{--                                            <p class="customer-role">manager</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="customer-testimonial"><i class="fas fa-quote-left   icon"></i>--}}
{{--                                        <div class="rating-stars"><i class="fas fa-star star-icon"></i><i class="fas fa-star star-icon"></i><i class="fas fa-star star-icon"></i><i class="fas fa-star star-icon"></i><i class="fas fa-star star-icon off"></i></div>--}}
{{--                                        <div class="content">--}}
{{--                                            <p class="testimonial-text ">--}}
{{--                                                ipsum--}}
{{--                                                dolor sit amet consectetur adipisicing elit. Quod, id sequi aut qui est--}}
{{--                                                ab,--}}
{{--                                                corporis quis maiores reiciendis explicabo odio tenetur nulla sint vel.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--third Slide-->--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="testmonial-box d-flex align-items-center justify-content-center">--}}
{{--                                <div class="testimonial-content">--}}
{{--                                    <div class="customer-info "><img class="img-fluid " src="{{asset('front/assets/images/testimonials/3.jpg')}}" alt="First Slide ">--}}
{{--                                        <div class="customer-details">--}}
{{--                                            <p class="customer-name">maya Ahmed</p>--}}
{{--                                            <p class="customer-role">manager</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="customer-testimonial"><i class="fas fa-quote-left   icon"></i>--}}
{{--                                        <div class="rating-stars"><i class="fas fa-star star-icon"></i><i class="fas fa-star star-icon"></i><i class="fas fa-star star-icon"></i><i class="fas fa-star star-icon"></i><i class="fas fa-star star-icon off"></i></div>--}}
{{--                                        <div class="content">--}}
{{--                                            <p class="testimonial-text ">--}}
{{--                                                ipsum--}}
{{--                                                dolor sit amet consectetur adipisicing elit. Quod, id sequi aut qui est--}}
{{--                                                ab,--}}
{{--                                                corporis quis maiores reiciendis explicabo odio tenetur nulla sint vel.--}}




{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--navigation buttons-->--}}
{{--                    <div class="swiper-button-prev">--}}
{{--                        <div class="left-arrow"><i class="fas fa-arrow-left icon "></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="swiper-button-next">--}}
{{--                        <div class="right-arrow"><i class="fas fa-arrow-right icon "></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!--Start .see-more-area-->--}}
{{--        <div class=" see-more-area d-block d-lg-none wow fadeInUp text-center" data-wow-delay="0.4s"><a class=" ma-btn-secondary " href="testimonials_dark.html">see all testimonials</a></div>--}}
{{--        <!--End Of .see-more-area           -->--}}
{{--    </div>--}}
{{--</section>--}}
<!-- End  testimonials Section-->
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
{{--    <div class="see-more-area   wow fadeInUp" data-wow-delay="0.8s"><a class=" ma-btn-primary" href="#0"> </a></div>--}}
</section>
<!-- End  our-team Section-->
<!-- Start  blog Section-->
{{--<section class="blog blog-home mega-section section-bg-shade" id="blog">--}}
{{--    <div class="container ">--}}
{{--        <div class="section-heading center-heading">--}}
{{--            <h2 class="section-title wow" data-splitting="chars">latest news</h2>--}}
{{--            <div class="line-on-center wow fadeIn" data-wow-delay=".6s"></div>--}}
{{--        </div>--}}
{{--        <div class="row ">--}}
{{--            <div class="col-12 ">--}}
{{--                <div class="posts-grid">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-12 col-lg-6  ">--}}
{{--                            <div class="post-box">     <a class="post-link" href="post-single_dark.html">--}}
{{--                                    <div class="post-img-wraper">--}}
{{--                                        <div class="overlay-color"></div><i class="fas fa-arrow-right icon ">             </i><img class="post-img" src="{{asset('front/assets/images/blog/post-images/1.jpg')}}" alt=""/>--}}
{{--                                        <h4 class="post-date"><span class="day">05 </span>march, 2023      </h4>--}}
{{--                                    </div></a>--}}
{{--                                <div class="post-summary">--}}
{{--                                    <div class="post-info"><a class="info post-cat" href="#"> <i class=" fas fa-list-alt icon"></i>cloud</a><a class="info post-author" href="#"> <i class=" fas fa-user icon"></i>Allan Moore</a></div>--}}
{{--                                    <div class="post-text"><a class="post-link" href="post-single_dark.html">--}}
{{--                                            <h2 class="post-title"> love what you do to do what you love?</h2></a>--}}
{{--                                        <p class="post-excerpt">--}}
{{--                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.--}}
{{--                                            Iure nulla dolorem, voluptates molestiae--}}
{{--                                        </p><a class="read-more" href="post-single_dark.html">read more<i class="fas fa-arrow-right icon "></i></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-12 col-lg-6 ">--}}
{{--                            <div class="post-box">     <a class="post-link" href="post-single_dark.html">--}}
{{--                                    <div class="post-img-wraper">--}}
{{--                                        <div class="overlay-color"></div><i class="fas fa-arrow-right icon ">             </i><img class="post-img" src="{{asset('front/assets/images/blog/post-images/2.jpg')}}" alt=""/>--}}
{{--                                        <h4 class="post-date"><span class="day">15 </span>feb, 2023      </h4>--}}
{{--                                    </div></a>--}}
{{--                                <div class="post-summary">--}}
{{--                                    <div class="post-info"><a class="info post-cat" href="#"> <i class=" fas fa-list-alt icon"></i>design</a><a class="info post-author" href="#"> <i class=" fas fa-user icon"></i>mhmd amin</a></div>--}}
{{--                                    <div class="post-text"><a class="post-link" href="post-single_dark.html">--}}
{{--                                            <h2 class="post-title">  the stroy of our great fathers</h2></a>--}}
{{--                                        <p class="post-excerpt">--}}
{{--                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.--}}
{{--                                            Iure nulla dolorem, voluptates molestiae--}}
{{--                                        </p><a class="read-more" href="post-single_dark.html">read more<i class="fas fa-arrow-right icon "></i></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- End  blog Section-->
<!-- Start  take-action Section-->
{{--<section class="subscribe stacked mega-section " id="subscribe">--}}
{{--    @php $subscribebgImage = \App\Models\PhotoSetting::where('name', 'bottom subscribe background')->first(); @endphp--}}
{{--    <div class="overlay-photo-image-bg" style="background-image: url({{$subscribebgImage->image}});"></div>--}}
{{--    <div class="overlay-color "></div>--}}
{{--    <div class="cta-wrapper">--}}
{{--        <div class="container">--}}
{{--            <div class="section-heading center-heading">--}}
{{--                <h2 class="section-title wow" data-splitting="chars">Subscribe to get updates</h2>--}}
{{--                <div class="line-on-center wow fadeIn" data-wow-delay=".6s"></div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-12 col-lg-8 mx-auto">--}}
{{--                    <div class="mc-form-wraper" id="mc_embed_signup">--}}
{{--                        <form class="validate mc-form" action="https://gmail.us7.list-manage.com/subscribe/post?u=7e1ce4a24acd782fd92fbd6f4&amp;amp;id=e0e553155e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>--}}
{{--                            <div id="mc_embed_signup_scroll">--}}
{{--                                <div class="mc-field-group form-group wow fadeInUp" data-wow-delay="0.4s">--}}
{{--                                    <label class="d-none" for="mce-EMAIL">Subscribe</label>--}}
{{--                                    <input class="required email input-email " type="email" value="" name="EMAIL" id="mce-EMAIL" placeholder="Email address">--}}
{{--                                    <!--real people should not fill this in and expect good things - do not remove this or risk form bot signups-->--}}
{{--                                    <div style="position: absolute; left: -5000px;" aria-hidden="true">--}}
{{--                                        <input type="text" name="b_59442f002934450af13bdfe82_f85a400e6a" tabindex="-1" value="">--}}
{{--                                    </div>--}}
{{--                                    <div class="clear">--}}
{{--                                        <input class="button ma-btn-primary subscribe-btn" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                        <div class="mailchimp-alerts">--}}
{{--                            <div class="mc-msg mc-submitting"> </div>--}}
{{--                            <!-- mailchimp-submitting end -->--}}
{{--                            <div class="mc-msg mc-success"> </div>--}}
{{--                            <!-- mailchimp-success end	-->--}}
{{--                            <div class="mc-msg mc-error"> </div>--}}
{{--                            <!--mailchimp-error end-->--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- End  take-action Section-->
<!-- Start  page-footer Section-->













@endsection

