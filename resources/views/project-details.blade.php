@extends('layouts.front')

@section('content')

    <link rel="stylesheet" href="{{asset('front/css/vendors/vegas.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/vendors/swiper.min.css')}}">

    <!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero hero-vegas-slider inner-page-hero " id="page-hero">
        <div class="overlay-color"></div>
        <div class="vegas-slider-content" data-vegas-slide-1="{{asset($project->banner)}}" data-vegas-slide-2="{{ asset($project->image)}}">
            <div class="container">
                <div class="row">
                    <div class="col-12 hero-text-area ">
                        <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">{{ $project->{'title_'.app()->getLocale()} }}</h1>
                        <nav aria-label="breadcrumb ">
{{--                            <ul class="breadcrumb wow fadeInUp" data-wow-delay="1s">--}}
{{--                                <li class="breadcrumb-item"><a class="breadcrumb-link" href="#0"><i class="fas fa-home icon "></i>home</a></li>--}}
{{--                                <li class="breadcrumb-item active">Portfolio single</li>--}}
{{--                            </ul>--}}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End inner Page hero-->
    <!-- Start Project Details Area-->
    <section class="portfolio-single">
        <div class="container">
            <div class="project-heading">
                <div class="row">
                    <div class="col-12 col-lg-10 mx-auto">
                        <div class="tag-line">{{ __('layout.' . $project->category) }}</div>
                        <h1 class="project-title">{{ $project->{'title_'.app()->getLocale()} }}</h1>
{{--                        <p class="project-subtitle">--}}
{{--                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.--}}
{{--                            Ullam unde, alias deserunt nemo perspiciatis cum delectus--}}
{{--                            deleniti repudiandae.--}}

{{--                        </p>--}}
                    </div>
                </div>
            </div>
{{--            <div class="featured-area">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12 col-lg-10 mx-auto">--}}
{{--                        <!-- Start  compare-before-after-->--}}
{{--                        <div class="before-after" id="before-after">--}}
{{--                            <!-- The before image is first--><img src="../assets/images/portfolio/before.jpg" alt="before">--}}
{{--                            <!--  The after image is last--><img src="../assets/images/portfolio/after.jpg" alt="after">--}}
{{--                        </div>--}}
{{--                        <!-- End  compare-before-after-->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="info-area">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12 col-lg-10 mx-auto">--}}
{{--                        <div class="project-info">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-6 col-lg-3">--}}
{{--                                    <div class="info">--}}
{{--                                        <h5 class="title"> client</h5>--}}
{{--                                        <p class="detail">amin themes</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-6 col-lg-3">--}}
{{--                                    <div class="info">--}}
{{--                                        <h5 class="title">category</h5>--}}
{{--                                        <p class="detail">Extrior design</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-6 col-lg-3">--}}
{{--                                    <div class="info">--}}
{{--                                        <h5 class="title">date</h5>--}}
{{--                                        <p class="detail">30/7/2023</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-6 col-lg-3">--}}
{{--                                    <div class="info">--}}
{{--                                        <h5 class="title">share</h5>--}}
{{--                                        <div class="sc-wraper dir-row sc-flat">--}}
{{--                                            <ul class="sc-list">--}}
{{--                                                <li class="sc-item " title="Facebook"><a class="sc-link" href="#0"><i class="fab fa-facebook-f sc-icon"></i></a></li>--}}
{{--                                                <li class="sc-item " title="youtube"><a class="sc-link" href="#0"><i class="fab fa-youtube sc-icon"></i></a></li>--}}
{{--                                                <li class="sc-item " title="instagram"><a class="sc-link" href="#0"><i class="fab fa-instagram sc-icon"></i></a></li>--}}
{{--                                                <li class="sc-item " title="twitter"><a class="sc-link" href="#0"><i class="fab fa-x-twitter sc-icon"></i></a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="main-area">
                <div class="row">
                    <div class="col-12 col-lg-10 mx-auto ">
{{--                        <h5 class="sub-heading ">project goals</h5>--}}
                        <p class="project-text">
                            {{ $project->{'summary_'.app()->getLocale()} }}
                        </p>
{{--                        <p class="project-text">--}}
{{--                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.--}}
{{--                            Ullam unde, alias deserunt nemo perspiciatis cum delectus--}}
{{--                            deleniti repudiandae aliquam exercitationem veniam ipsam--}}
{{--                            incidunt sequi ipsum tenetur.--}}
{{--                            Consequuntur dolorum suscipit eos.--}}
{{--                            deleniti repudiandae aliquam exercitationem veniam ipsam--}}
{{--                            incidunt sequi ipsum tenetur.--}}
{{--                            Consequuntur dolorum suscipit eos.--}}

{{--                        </p>--}}
{{--                        <div class="project-video mega-section ">--}}
{{--                            <div class="overlay-image-bg  "></div>--}}
{{--                            <div class="overlay-color"></div>--}}
{{--                            <div class="video-wraper">--}}
{{--                                <div class="play-btn-col-dir"><a class="video-link" href="https://www.youtube.com/watch?v=3mKUjHLg_z4" role="button" data-fancybox>--}}
{{--                                        <div class="play-video-btn">--}}
{{--                                            <div class="play-btn"> <img class="img-fluid play-icon" src="../assets/images/icons/play-icon.svg" alt=""></div>--}}
{{--                                            <div class="play-btn-text">watch our video</div>--}}
{{--                                        </div></a></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <h5 class="sub-heading ">project steps</h5>--}}
{{--                        <p class="project-text">--}}
{{--                            Lorem ipsum dolor sit, amet consectetur--}}
{{--                            adipisicing elit.--}}
{{--                            Expedita iste culpa tempore deleniti explicabo,--}}
{{--                            possimus enim porro impedit--}}
{{--                            Lorem ipsum dolor sit, amet consectetur--}}
{{--                            adipisicing elit.--}}
{{--                            Expedita iste culpa tempore deleniti explicabo,--}}
{{--                            possimus enim porro impedit--}}
{{--                            Lorem ipsum dolor sit, amet consectetur--}}
{{--                            adipisicing elit.--}}
{{--                            Expedita iste culpa tempore deleniti explicabo,--}}
{{--                            possimus enim porro impedit--}}

{{--                        </p>--}}
{{--                        <ul class="list steps">--}}
{{--                            <li class="list-item step"><i class="fas fa-check icon"></i><span>ipsum dolor sit amet consectetur adipisicing</span></li>--}}
{{--                            <li class="list-item step"><i class="fas fa-check icon"></i><span>quas, ea fuga vel quis officiis laborum quaerat </span></li>--}}
{{--                            <li class="list-item step"><i class="fas fa-check icon"></i><span>alias fugiat aliquam  soluta beatae numquam</span></li>--}}
{{--                            <li class="list-item step"><i class="fas fa-check icon"></i><span>nobis maiores inventore harum pariatur  possimus</span></li>--}}
{{--                            <li class="list-item step"><i class="fas fa-check icon"></i><span>nobis maiores inventore harum pariatur </span></li>--}}
{{--                        </ul>--}}
{{--                        <h5 class="sub-heading ">project results</h5>--}}
{{--                        <p class="project-text">--}}
{{--                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.--}}
{{--                            Expedita iste culpa tempore deleniti explicabo, possimus enim porro impedit--}}
{{--                        </p>--}}
                        <div class="portfolio portfolio-slider">
                            <!--Swiper-->
                            <div class="swiper-container wow fadeIn" data-wow-delay=".5s">
                                <div class="swiper-wrapper ">
                                    @foreach($project->projectPhotos as $photo)
                                        <div class="swiper-slide">
                                            <div class="item "><a class="portfolio-img-link " href="{{asset($photo->image)}}" data-fancybox=".filter">
                                                    <div class="overlay overlay-color"></div><img class="  portfolio-img img-fluid  " src="{{asset($photo->image)}}" alt=" ">{{--<i class="fas fa-arrow-right icon"></i>--}}</a>
                                                <div class="item-info "><span class="info-title">{{ $photo->{'title_'.app()->getLocale()} }}</span>
{{--                                                    <ul class="tags-list">--}}
{{--                                                        <li class="tag-item"> <a class="tag-link" href="#">fancy</a></li>--}}
{{--                                                        <li class="tag-item"> <a class="tag-link" href="#">classic </a></li>--}}
{{--                                                    </ul>--}}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
{{--                                    <div class="swiper-slide">--}}
{{--                                        <div class="item"><a class="portfolio-img-link " href="{{asset('front/assets/images/portfolio/2.jpg')}}" data-fancybox=".filter">--}}
{{--                                                <div class="overlay overlay-color"></div><img class=" portfolio-img img-fluid  " src="{{asset('front/assets/images/portfolio/2.jpg')}}" alt=" "><i class="fas fa-arrow-right icon"></i></a>--}}
{{--                                            <div class="item-info "><span class="info-title">exterior  </span>--}}
{{--                                                <ul class="tags-list">--}}
{{--                                                    <li class="tag-item"> <a class="tag-link" href="#">high class</a></li>--}}
{{--                                                    <li class="tag-item"> <a class="tag-link" href="#">luxery  </a></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <div class="item"><a class="portfolio-img-link " href="{{asset('front/assets/images/portfolio/3.jpg')}}" data-fancybox=".filter">--}}
{{--                                                <div class="overlay overlay-color"></div><img class=" portfolio-img img-fluid  " src="{{asset('front/assets/images/portfolio/3.jpg')}}" alt=" "><i class="fas fa-arrow-right icon"></i></a>--}}
{{--                                            <div class="item-info "><span class="info-title">interior</span>--}}
{{--                                                <ul class="tags-list">--}}
{{--                                                    <li class="tag-item"> <a class="tag-link" href="#">modern</a></li>--}}
{{--                                                    <li class="tag-item"> <a class="tag-link" href="#">future</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <div class="item"><a class="portfolio-img-link " href="{{asset('front/assets/images/portfolio/4.jpg')}}" data-fancybox=".filter">--}}
{{--                                                <div class="overlay overlay-color"></div><img class=" portfolio-img img-fluid  " src="{{asset('front/assets/images/portfolio/4.jpg')}}" alt=" "><i class="fas fa-arrow-right icon"></i></a>--}}
{{--                                            <div class="item-info "><span class="info-title">residential</span>--}}
{{--                                                <ul class="tags-list">--}}
{{--                                                    <li class="tag-item"> <a class="tag-link" href="#">simple</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <div class="item"><a class="portfolio-img-link " href="{{asset('front/assets/images/portfolio/5.jpg')}}" data-fancybox=".filter">--}}
{{--                                                <div class="overlay overlay-color"></div><img class=" portfolio-img img-fluid  " src="{{asset('front/assets/images/portfolio/5.jpg')}}" alt=" "><i class="fas fa-arrow-right icon"></i></a>--}}
{{--                                            <div class="item-info "><span class="info-title">exterior  </span>--}}
{{--                                                <ul class="tags-list">--}}
{{--                                                    <li class="tag-item"> <a class="tag-link" href="#">high class</a></li>--}}
{{--                                                    <li class="tag-item"> <a class="tag-link" href="#">luxery  </a></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <div class="item"><a class="portfolio-img-link " href="{{asset('front/assets/images/portfolio/6.jpg')}}" data-fancybox=".filter">--}}
{{--                                                <div class="overlay overlay-color"></div><img class=" portfolio-img img-fluid  " src="{{asset('front/assets/images/portfolio/6.jpg')}}" alt=" "><i class="fas fa-arrow-right icon"></i></a>--}}
{{--                                            <div class="item-info "><span class="info-title">furniture</span>--}}
{{--                                                <ul class="tags-list">--}}
{{--                                                    <li class="tag-item"> <a class="tag-link" href="#">fancy</a></li>--}}
{{--                                                    <li class="tag-item"> <a class="tag-link" href="#">classic      </a></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!--navigation buttons-->--}}
{{--                                    </div>--}}
                                </div>

                                @if(app()->getLocale() == 'en') @endif
                                <div class="swiper-button-prev">
                                    <div class="left-arrow"><i class="fas @if(app()->getLocale() == 'en') fa-arrow-left @else fa-arrow-right @endif icon "></i>
                                    </div>
                                </div>
                                <div class="swiper-button-next">
                                    <div class="right-arrow"><i class="fas @if(app()->getLocale() == 'en') fa-arrow-right @else fa-arrow-left @endif icon "></i>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End  Project Details Area-->


@endsection


