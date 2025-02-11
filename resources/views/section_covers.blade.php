<section class="no-top relative z1000">
    <div class="container">
        <div class="row mt-100">
            <!-- Life Insurance -->
            @foreach($services as $ser)
                @if (in_array($ser['position'], ['2']))
            <div class="col-md-4 wow fadeInRight" data-wow-delay=".2s">
                <div class="mask rounded">
                    <div class="cover rounded">
                        <div class="c-inner">
                            <h3><i class="icofont-people"></i><span>{{ app()->getLocale() == 'ar' ? $ser['title_ar'] : $ser['title_en'] }}</span></h3>
                            <p>
                                {{ app()->getLocale() == 'ar' ? $ser['summary_ar'] : $ser['summary_en'] }}
                            </p>
                            <div class="spacer20"></div>
                            <!--<a href="#" class="btn-custom invert">Read more</a> -->
                        </div>
                    </div>
                    <img src="{{ asset($ser['image']) }}" alt="{{ app()->getLocale() == 'ar' ? $ser['title_ar'] : $ser['title_en'] }}" class="img-responsive"/>
                </div>
            </div>
                @endif
            @endforeach

        </div>
    </div>
</section>
