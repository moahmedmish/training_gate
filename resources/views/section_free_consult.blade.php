
<section class="no-padding text-light bg-color">
    <div class="container-fluid">
        <div class="row g-0">
            @foreach($services as $ser)
                @if (in_array($ser['position'], ['4']))
            <div class="col-lg-3 col-md-6">
                <div class="feature-box f-boxed style-3" data-bgcolor="rgba(0,0,0,.4)">
                    <a href="#"><i class="bg-color-secondary i-boxed fa fa-comments"></i></a>
                    <div class="text">
                        <a href="#"><h4>{{ app()->getLocale() == 'ar' ? $ser['title_ar'] : $ser['title_en'] }}</h4></a>
                        {{ app()->getLocale() == 'ar' ? $ser['summary_ar'] : $ser['summary_en'] }}
                    </div>
                    <i class="wm fa fa-address-card"></i>
                </div>
            </div>

                @endif
            @endforeach


        </div>
    </div>
</section>