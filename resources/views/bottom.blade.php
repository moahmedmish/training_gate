<section style="background-image: url('{{ asset('front/images/background/4.jpg') }}'); background-position: top;" class="text-light">
    <div class="container">
        <div class="row">
            <!-- Left Column -->

            </div>
            @if ( app()->getLocale() != 'ar')
            <div class="col-md-6 wow fadeInRight" data-wow-delay=".2s">
                <h2>Call us for further information</h2>
                <!-- Right Column -->
                <div class="col-md-6 text-lg-center text-sm-center wow fadeInRight" data-wow-delay=".4s">
                    <div class="phone-num-big">
                        <i class="fa fa-phone"></i>
                        <span class="pnb-text id-color-secondary">Call Us Now</span>
                        <span class="pnb-num">
                             @foreach ($global_settings as $item)
                                @if (in_array($item['name'], ['phone']))
                                    {{ $item['value'] }}
                                @endif
                            @endforeach
                        </span>
                    </div>
                    <a href="#" class="btn-custom invert med">Contact Us</a>
                </div>

                @elseif ( app()->getLocale() == 'ar')
                    <div class="col-md-6 wow fadeInRight" data-wow-delay=".2s">
                        <h2>تواصل معنا لأي استفسارات</h2>


                        <!-- Right Column -->
                        <div class="col-md-6 text-lg-center text-sm-center wow fadeInRight" data-wow-delay=".4s">
                            <div class="phone-num-big">
                                <i class="fa fa-phone"></i>
                                <span class="pnb-text id-color-secondary">تواصل معنا</span>
                                <span class="pnb-num">
                                   @foreach ($global_settings as $item)
                                        @if (in_array($item['name'], ['phone']))
                                            {{ $item['value'] }}
                                        @endif
                                    @endforeach
                                </span>
                            </div>
                            <a href="#" class="btn-custom invert med">اتصل بنا</a>
                        </div>
                        @endif


        </div>
    </div>
</section>
