<section style="background-color: #F2F6FE;">
    <div class="container">
        <div class="row align-items-center">
            @foreach($services as $ser)
                @if (in_array($ser['position'], ['3']))
            <!-- Content Section -->
            <div class="col-lg-5 offset-lg-7">
                <span class="p-title invert">TGI</span><br>
                <h2> {{ app()->getLocale() == 'ar' ? $ser['title_ar'] : $ser['title_en'] }}</h2>
                <!-- Navigation Tabs -->
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                       <!-- <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                           role="tab" aria-controls="pills-home" aria-selected="true"></a> -->
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content" id="pills-tabContent">
                    <!-- Online Payment Tab -->
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                         aria-labelledby="pills-home-tab">
                        <p>
                            {{ app()->getLocale() == 'ar' ? $ser['summary_ar'] : $ser['summary_en'] }}
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Background Image -->
    <div class="image-container col-md-6 pull-right"
         style="background-image: url('{{ asset($ser['image']) }}'); background-position: center;">
    </div>
    @endif
    @endforeach
</section>
