<section id="section-news" data-bgcolor="#F2F6FE">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <span class="p-title invert">TGI</span><br>

                    @if (app()->getLocale() != 'ar')
                        <h2>Latest Update News</h2>
                    @elseif (app()->getLocale() == 'ar')
                        <h2>اخر الاخبار</h2>
                    @endif

                    <div class="small-border"></div>
                </div>
            </div>

            @foreach($services as $ser)
                @if (in_array($ser['position'], ['6']))
            <div class="col-lg-4 col-md-6 mb30">
                <div class="bloglist item">
                    <div class="post-content">
                        <span class="p-tagline">TGI NEWS</span>
                        <div class="post-image">
                            <img alt="" src="{{ asset($ser['image']) }}">
                        </div>
                        <div class="post-text">
                            <h4><a href="news-single.html">{{ app()->getLocale() == 'ar' ? $ser['title_ar'] : $ser['title_en'] }}<span></span></a>
                            </h4>
                            <p>{{ app()->getLocale() == 'ar' ? $ser['summary_ar'] : $ser['summary_en'] }}
                            </p>

                        </div>
                    </div>
                </div>
            </div>
                @endif
            @endforeach


        </div>
    </div>
</section>