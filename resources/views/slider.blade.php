<!-- revolution slider begin -->
<section id="section-slider" class="fullwidthbanner-container text-light" aria-label="section-slider">
    <div id="slider-revolution">
        <ul>
            @foreach($sliders as $slider)
                <li data-transition="fade" data-slotamount="10" data-masterspeed="300" data-thumb="">
                    <!-- BACKGROUND IMAGE -->
                    <img alt="" class="rev-slidebg" data-bgposition="top center" data-bgfit="cover"
                         data-bgrepeat="no-repeat" data-bgparallax="10"
                         src="{{ asset($slider['image']) }}">

                    <div class="tp-caption big-s1" data-x="0" data-y="230" data-width="none" data-height="none"
                         data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                         data-transform_out="opacity:0;y:-100;s:200;e:Power2.easeInOut;" data-start="500"
                         data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <h3>{{ app()->getLocale() == 'ar' ? $slider['title_ar'] : $slider['title_en'] }}</h3>
                    </div>

                    <div class="tp-caption very-big-white tp-resizeme" data-x="0" data-y="280" data-width="none"
                         data-height="none" data-whitespace="nowrap"
                         data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                         data-transform_out="opacity:0;y:-100;s:400;e:Power2.easeInOut;" data-start="600"
                         data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <h1>{{ app()->getLocale() == 'ar' ? $slider['title_ar'] : $slider['title_en'] }}</h1>
                    </div>

                    <div class="tp-caption" data-x="0" data-y="360" data-width="480" data-height="none"
                         data-whitespace="wrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                         data-transform_out="opacity:0;y:-100;s:600;e:Power2.easeInOut;" data-start="700">
                        <p class="lead xs-hide">
                            {{ app()->getLocale() == 'ar' ? $slider['summary_ar'] : $slider['summary_en'] }}
                        </p>
                    </div>

                    <div class="tp-caption" data-x="0" data-y="450" data-width="none" data-height="none"
                         data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                         data-transform_out="opacity:0;y:-100;s:800;e:Power2.easeInOut;" data-start="800">
                        <a class="btn-custom invert" href="{{ $slider['video_url'] ?? '#' }}">Join Us</a>&nbsp;
                        <a class="btn-border" href="download.html">Learn More</a>
                    </div>
                </li>
            @endforeach
        </ul>

    </div>
</section>
<!-- revolution slider close -->