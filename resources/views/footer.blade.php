<!-- footer begin -->
<footer>
    <div class="container">
        <div class="row">

            <div class="col-lg-4">
                <div class="widget">
                    <h5>   {{ app()->getLocale() == 'ar' ? 'القائمه الرئيسيه' : 'Main Menu' }}</h5>
                    <ul>
                        @foreach($footer_menus as $menu)
                            <li>
                                <a href="{{ route('pages.show', $menu['route_name']) }}">
                                    {{ app()->getLocale() == 'ar' ? $menu['title_ar'] : $menu['title_en'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="widget">
                    <h5>   {{ app()->getLocale() == 'ar' ? 'أخرى' : 'Other Links' }}</h5>
                    <ul>
                        @foreach( $submenus as $menu)
                            <li>
                                <a href="{{ route('pages.show', $menu['route_name']) }}">
                                    {{ app()->getLocale() == 'ar' ? $menu['title_ar'] : $menu['title_en'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="widget">
                    <h5>{{ app()->getLocale() == 'ar' ? 'تواصل معنا' : 'Get In Touch' }}</h5>

                    <address class="s1">
                        <span><i class="fa fa-map-marker fa-lg"></i>
                           @foreach ($global_settings as $item)
                                @if ($item['name'] === 'address')
                                    @if ( app()->getLocale() != 'ar')
                                        {{ $item['value'] }}
                                    @elseif ( app()->getLocale() == 'ar')
                                        {{ $item['value_ar'] }}
                                    @endif
                                @endif
                            @endforeach
                        </span>
                        <span><i class="fa fa-phone fa-lg"></i>
                          @foreach ($global_settings as $item)
                                @if ($item['name'] === 'phone')
                                    @if ( app()->getLocale() != 'ar')
                                    {{ $item['value'] }}
                                    @elseif ( app()->getLocale() == 'ar')
                                        {{ $item['value'] }}
                                    @endif
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

                            <div>&copy; Copyright 2025 - Created by <a target="_blank" href="https://finalsolution.co/" style="color: white; text-decoration: none;" onmouseover="this.style.backgroundColor='blue'; this.style.color='white'" onmouseout="this.style.backgroundColor=''; this.style.color='#ffde00'">Final Solution</a></div>
                        </div>

                        <div class="de-flex-col">
                            <div class="social-icons">
                                @foreach ($global_settings as $item)
                                    @if (in_array($item['name'], ['facebook', 'twitter', 'instagram']))
                                        <a href="{{ $item['value'] }}" target="_blank">
                                            <i class="fa fa-{{ $item['name'] }}"></i>
                                        </a>
                                    @endif
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- footer close -->