<section id="section-highlight" class="relative" data-bgcolor="#F2F6FE">
    <div class="container">
        @foreach($services as $ser)
            @if (in_array($ser['position'], ['1']))
            <div class="row">
                <div class="col-md-6">
                    <span class="p-title invert">
                        {{ app()->getLocale() == 'ar' ? $ser['title_ar'] : $ser['title_en'] }}
                    </span><br>
                    <h2>
                        {{ app()->getLocale() == 'ar' ? $ser['summary_ar'] : $ser['summary_en'] }}
                    </h2>
                    <div class="small-border sm-left"></div>
                </div>
                <div class="col-md-6">
                    <p>
                        {{ app()->getLocale() == 'ar' ? $ser['desc_ar'] : $ser['desc_en'] }}
                    </p>
                </div>
            </div>

            <div class="spacer-double"></div>
            @endif
        @endforeach

    </div>
</section>