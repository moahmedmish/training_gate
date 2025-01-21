
<section id="section-fun-facts" class="pt60 pb60">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3">
                <span class="p-title invert">TGI facts</span><br>
                <h2>
                    What TGI did?
                </h2>
                <div class="small-border sm-left"></div>
                <p>At TGI, our mission is to empower people with disabilities by enhancing various aspects of their lives. We work towards inclusion,
                    , improved quality of life..</p>
            </div>

            <div class="col-md-8 offset-md-1">
                <div class="row">
                    @foreach($facts_settings as $index => $stat)
                        <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay="{{ $index * 0.2 }}s">
                            <div class="de_count">
                                <h3>
                                    @php
                                        // Extract numeric value and suffix
                                        preg_match('/(\d+)([a-zA-Z+]*)/', $stat['value'], $matches);
                                        $number = $matches[1] ?? 0;
                                        $suffix = $matches[2] ?? '';
                                    @endphp
                                    <span class="timer" data-to="{{ $number }}" data-speed="3000">0</span>{{ $suffix }}
                                </h3>
                                <h5 class="id-color">{{ $stat['name'] }}</h5>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</section>