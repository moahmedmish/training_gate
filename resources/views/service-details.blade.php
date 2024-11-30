@extends('layouts.front')

@section('content')

    <link rel="stylesheet" href="{{asset('front/css/vendors/vegas.min.css')}}">

    <!--End Page Header-->
    <!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero hero-vegas-slider inner-page-hero " id="page-hero">
        <div class="overlay-color"></div>
        <div class="vegas-slider-content" data-vegas-slide-1="{{asset($service->banner)}}">
            <div class="container">
                <div class="row">
                    <div class="col-12 hero-text-area ">
                        <h1 class="hero-title  wow fadeInUp"
                            data-wow-delay=".2s">{{ $service->{'title_'.app()->getLocale()} }}</h1>
                        <nav aria-label="breadcrumb ">
                            <ul class="breadcrumb wow fadeInUp" data-wow-delay="1s">
                                {{--                                <li class="breadcrumb-item"><a class="breadcrumb-link" href="#0"><i class="fas fa-home icon "></i>home</a></li>--}}
                                {{--                                <li class="breadcrumb-item active">blog</li>--}}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End inner Page hero-->
    <!-- Start blog-1-col-posts-->
    <section class="blog blog-home mega-section">
        <div class="container ">
            <div class="row ">
                <div class="col-12 col-lg-8 ">
                    <div class="posts-grid">
                        <div class="row">
                            <div class="col-12 ">
                                <div class="post-box"><a class="post-link" href="post-single_dark.html">
                                        <div class="post-img-wraper">
                                            <div class="overlay-color"></div>
                                            <h4 class="post-date"><span class="day">05 </span>march, 2023 </h4>
                                        </div>
                                    </a>
                                    <div class="post-summary">
{{--                                        <div class="post-info"><a class="info post-cat" href="#"> <i--}}
{{--                                                    class=" fas fa-list-alt icon"></i>cloud</a><a--}}
{{--                                                class="info post-author" href="#"> <i class=" fas fa-user icon"></i>Allan--}}
{{--                                                Moore</a></div>--}}
                                        <div class="post-text"><a class="post-link" href="post-single_dark.html">
                                                <h2 class="post-title"> {{ $service->{'title_'.app()->getLocale()} }} </h2>
                                            </a>
                                            <p class="post-excerpt">
                                            {{ $service->{'summary_'.app()->getLocale()} }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="post-box"><a class="post-link" href="post-single_dark.html">
{{--                                        <div class="post-img-wraper">--}}
{{--                                            <div class="overlay-color"></div>--}}
{{--                                            <i class="fas fa-arrow-right icon "> </i><img class="post-img"--}}
{{--                                                                                          src="../assets/images/blog/post-images/2.jpg"--}}
{{--                                                                                          alt=""/>--}}
{{--                                            <h4 class="post-date"><span class="day">15 </span>feb, 2023 </h4>--}}
{{--                                        </div>--}}
                                    </a>
                                    <div class="post-summary">
{{--                                        <div class="post-info"><a class="info post-cat" href="#"> <i--}}
{{--                                                    class=" fas fa-list-alt icon"></i>design</a><a--}}
{{--                                                class="info post-author" href="#"> <i class=" fas fa-user icon"></i>mhmd--}}
{{--                                                amin</a></div>--}}
                                        <div class="post-text">
                                            <p class="post-excerpt">
                                                {{ $service->{'desc_'.app()->getLocale()} }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
{{--                            <div class="col-12 ">--}}
{{--                                <div class="post-box"><a class="post-link" href="post-single_dark.html">--}}
{{--                                        <div class="post-img-wraper">--}}
{{--                                            <div class="overlay-color"></div>--}}
{{--                                            <i class="fas fa-arrow-right icon "> </i><img class="post-img"--}}
{{--                                                                                          src="../assets/images/blog/post-images/3.jpg"--}}
{{--                                                                                          alt=""/>--}}
{{--                                            <h4 class="post-date"><span class="day">27 </span>aug, 2023 </h4>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                    <div class="post-summary">--}}
{{--                                        <div class="post-info"><a class="info post-cat" href="#"> <i--}}
{{--                                                    class=" fas fa-list-alt icon"></i>life style</a><a--}}
{{--                                                class="info post-author" href="#"> <i class=" fas fa-user icon"></i>yusuf--}}
{{--                                                amin</a></div>--}}
{{--                                        <div class="post-text"><a class="post-link" href="post-single_dark.html">--}}
{{--                                                <h2 class="post-title"> making your fancy thoughts exist</h2></a>--}}
{{--                                            <p class="post-excerpt">--}}
{{--                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.--}}
{{--                                                Iure nulla dolorem, voluptates molestiae--}}
{{--                                            </p><a class="read-more" href="post-single_dark.html">read more<i--}}
{{--                                                    class="fas fa-arrow-right icon "></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <!--Start Posts pagination-->
{{--                            <div class="col-12">--}}
{{--                                <nav class="posts-pagination">--}}
{{--                                    <ul class="pagination justify-content-center">--}}
{{--                                        <li class="posts-page-item deactive-posts-page-item"><a class="posts-page-link "--}}
{{--                                                                                                href="#"--}}
{{--                                                                                                title="Previous Post"><i--}}
{{--                                                    class="fas fa-arrow-left icon "></i></a></li>--}}
{{--                                        <li class="posts-page-item active"><a class="posts-page-link " href="#">1</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="posts-page-item"><a class="posts-page-link" href="#">2</a></li>--}}
{{--                                        <li class="posts-page-item"><a class="posts-page-link" href="#">3</a></li>--}}
{{--                                        <li class="posts-page-item"><a class="posts-page-link" href="#">4</a></li>--}}
{{--                                        <li class="posts-page-item"><a class="posts-page-link" href="#">5</a></li>--}}
{{--                                        <li class="posts-page-item"><a class="posts-page-link" href="#"--}}
{{--                                                                       title="Next Post"><i--}}
{{--                                                    class="fas fa-arrow-right icon "></i></a></li>--}}
{{--                                    </ul>--}}
{{--                                </nav>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 ">
                    <div class="blog-sidebar">
                        <!--search box-->
{{--                        <div class="search sidebar-box">--}}
{{--                            <form class="search-form" action="#">--}}
{{--                                <input class="search-input" type="search" name="seach_form"--}}
{{--                                       placeholder="Search Posts...">--}}
{{--                                <button class="search-btn" type="submit"><i class="fas fa-search icon"></i></button>--}}
{{--                            </form>--}}
{{--                        </div>--}}
                        <!--categories box-->
                        <div class="cats sidebar-box">
                            <h6 class="sidebar-box-title"><i class="fas fa-list-alt icon"></i>{{ __('layout.services') }}:</h6>
                            <ul class="sidebar-list cats-list  ">
                                @foreach($services as $service)
                                <li class="cat-item">
                                    <a class="cat-link" href="{{route('service-details', $service->id)}}">{{ $service->{'title_'.app()->getLocale()} }}</a>
                                    <span class="cat-count">..</span>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                        <!--Recent posts  -->
{{--                        <div class="recent-posts sidebar-box">--}}
{{--                            <h6 class="sidebar-box-title"><i class="fas fa-history icon"></i>recent posts: </h6>--}}
{{--                            <ul class="sidebar-list r-posts-list ">--}}
{{--                                <li class="r-post-item"><a class="r-post-link" href="#">--}}
{{--                                        <div class="r-post-img-wraper"><img class="r-post-img"--}}
{{--                                                                            src="../assets/images/blog/recent-posts/1.jpg"--}}
{{--                                                                            alt="recent post image"></div>--}}
{{--                                        <div class="content">--}}
{{--                                            <h6 class="r-post-title">this is the article title</h6><span--}}
{{--                                                class="r-post-date">jun, 15 2023 </span>--}}
{{--                                        </div>--}}
{{--                                    </a></li>--}}
{{--                                <li class="r-post-item"><a class="r-post-link" href="#">--}}
{{--                                        <div class="r-post-img-wraper"><img class="r-post-img"--}}
{{--                                                                            src="../assets/images/blog/recent-posts/2.jpg"--}}
{{--                                                                            alt="recent post image"></div>--}}
{{--                                        <div class="content">--}}
{{--                                            <h6 class="r-post-title">this is the article title</h6><span--}}
{{--                                                class="r-post-date">may, 10 2023 </span>--}}
{{--                                        </div>--}}
{{--                                    </a></li>--}}
{{--                                <li class="r-post-item"><a class="r-post-link" href="#">--}}
{{--                                        <div class="r-post-img-wraper"><img class="r-post-img"--}}
{{--                                                                            src="../assets/images/blog/recent-posts/3.jpg"--}}
{{--                                                                            alt="recent post image"></div>--}}
{{--                                        <div class="content">--}}
{{--                                            <h6 class="r-post-title">this is the article title</h6><span--}}
{{--                                                class="r-post-date">feb, 28 2023 </span>--}}
{{--                                        </div>--}}
{{--                                    </a></li>--}}
{{--                                <li class="r-post-item"><a class="r-post-link" href="#">--}}
{{--                                        <div class="r-post-img-wraper"><img class="r-post-img"--}}
{{--                                                                            src="../assets/images/blog/recent-posts/4.jpg"--}}
{{--                                                                            alt="recent post image"></div>--}}
{{--                                        <div class="content">--}}
{{--                                            <h6 class="r-post-title">this is the article title</h6><span--}}
{{--                                                class="r-post-date">jun, 07 2023 </span>--}}
{{--                                        </div>--}}
{{--                                    </a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="tags sidebar-box">--}}
{{--                            <h6 class="sidebar-box-title"><i class="fas fa-tags icon"></i>tags:</h6>--}}
{{--                            <ul class="sidebar-list tags-list ">--}}
{{--                                <li class="tag-item"><a class="tag-link" href="#">furniture</a></li>--}}
{{--                                <li class="tag-item"><a class="tag-link" href="#">facade</a></li>--}}
{{--                                <li class="tag-item"><a class="tag-link" href="#">painting</a></li>--}}
{{--                                <li class="tag-item"><a class="tag-link" href="#">design</a></li>--}}
{{--                                <li class="tag-item"><a class="tag-link" href="#">developing</a></li>--}}
{{--                                <li class="tag-item"><a class="tag-link" href="#">consulting</a></li>--}}
{{--                                <li class="tag-item"><a class="tag-link" href="#">mega</a></li>--}}
{{--                                <li class="tag-item"><a class="tag-link" href="#">concept</a></li>--}}
{{--                                <li class="tag-item"><a class="tag-link" href="#">features</a></li>--}}
{{--                                <li class="tag-item"><a class="tag-link" href="#">services</a></li>--}}
{{--                                <li class="tag-item"><a class="tag-link" href="#">portfolio</a></li>--}}
{{--                                <li class="tag-item"><a class="tag-link" href="#">testmonials</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                        <div class="follow-us sidebar-box">
                            <h6 class="sidebar-box-title"><i class="fas fa-heart icon"></i>{{ __('layout.follow_us_on') }}:</h6>
                            <div class="sc-wraper dir-row sc-size-32">
                                <ul class="sc-list">
                                    <li class="sc-item " title="Facebook"><a class="sc-link" target="_blank" href="{{\App\Models\Setting::where('name', 'facebook')->first()->value}}"><i class="fab fa-facebook-f sc-icon"></i></a></li>
                                    <li class="sc-item " title="youtube"><a class="sc-link" target="_blank" href="{{\App\Models\Setting::where('name', 'youtube')->first()->value}}"><i class="fab fa-youtube sc-icon"></i></a></li>
                                    <li class="sc-item " title="instagram"><a class="sc-link" target="_blank" href="{{\App\Models\Setting::where('name', 'instagram')->first()->value}}"><i class="fab fa-instagram sc-icon"></i></a></li>
{{--                                    <li class="sc-item " title="twitter"><a class="sc-link" target="_blank" href="{{\App\Models\Setting::where('name', 'twitter')->first()->value}}"><i class="fab fa-x-twitter sc-icon"></i></a></li>--}}
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
            </div>
        </div>
    </section>
    <!-- End blog-1-col-posts-->
    <!-- Start  page-footer Section-->

@endsection
