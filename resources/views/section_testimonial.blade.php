<section id="section-testimonial">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <span class="p-title invert">TGI</span><br>

                @if (app()->getLocale() != 'ar')
                    <h2>Kelna for Shabab</h2>
                @elseif (app()->getLocale() == 'ar')
                    <h2>كلنا للأطفال وللشباب</h2>
                @endif
                <div class="small-border"></div>
            </div>
            <div class="col-lg-12">
                <div class="owl-carousel owl-theme" id="testimonial-carousel">
                    @foreach($services as $ser)
                        @if (in_array($ser['position'], ['5']))

                    <div class="item">
                        <div class="de_testi opt-2 review">
                            <blockquote>
                                <i class="fa fa-quote-left id-color-secondary"></i>
                                <h3>{{ app()->getLocale() == 'ar' ? $ser['summary_ar'] : $ser['summary_en'] }}</h3>
                                <p> {{ app()->getLocale() == 'ar' ? $ser['desc_ar'] : $ser['desc_en'] }}</p>
                                <div class="de_testi_by">
                                    <span>
                                        <img src="{{ asset($ser['image']) }}" alt="{{ app()->getLocale() == 'ar' ? $ser['title_ar'] : $ser['title_en'] }}">
                                    </span>
                                    <span class="text-dark"> {{ app()->getLocale() == 'ar' ? $ser['title_ar'] : $ser['title_en'] }}</span>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                        @endif
                    @endforeach
                    <!-- Continue as needed -->
                </div>
            </div>
        </div>
    </div>
</section>
