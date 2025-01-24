<!-- footer begin -->
<footer>
    <div class="container">
        <div class="row">

            <div class="col-lg-4">
                <div class="widget">
                    <h5>Our Company</h5>
                    <ul>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="why-choose-us.html">Why Choose Us</a></li>
                        <li><a href="jobs.html">Careers</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="contact.html">News</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="widget">
                    <h5>Insurance</h5>
                    <ul>
                        <li><a href="features.html">Life Insurance</a></li>
                        <li><a href="pricing.html">Home Insurance</a></li>
                        <li><a href="reviews.html">Auto Insurance</a></li>
                        <li><a href="download.html">Health Insurance</a></li>
                        <li><a href="download.html">Business Insurance</a></li>
                        <li><a href="download.html">Condo Insurance</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="widget">
                    <h5>{{ app()->getLocale() == 'ar' ? 'تواصل معنا' : 'Get In Touch' }}</h5>

                    <address class="s1">
                        <span><i class="fa fa-map-marker fa-lg"></i>
                           @foreach ($global_settings as $item)
                                @if ($item['name'] === 'address_en')
                                    {{ $item['value'] }}
                                @endif
                            @endforeach
                        </span>
                        <span><i class="fa fa-phone fa-lg"></i>
                          @foreach ($global_settings as $item)
                                @if ($item['name'] === 'phone')
                                    {{ $item['value'] }}
                                @endif
                            @endforeach
                        </span>
                        <span><i class="fa fa-envelope-o fa-lg"></i><a href="mailto:contact@example.com">
                              @foreach ($global_settings as $item)
                                    @if ($item['name'] === 'contact_email')
                                        {{ $item['value'] }}
                                    @endif
                                @endforeach

                            </a></span>

                    </address>
                </div>
            </div>

        </div>
    </div>

    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="de-flex">
                        <div class="de-flex-col">
                            &copy; Copyright 2022 - Priva by Designesia
                        </div>

                        <div class="de-flex-col">
                            <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- footer close -->