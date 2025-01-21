<div id="topbar" class="text-light">
    <div class="container">
        <div class="topbar-left sm-hide">
                        <span class="topbar-widget tb-social">
                            @foreach ($global_settings as $item)
                                @if (in_array($item['name'], ['facebook', 'twitter', 'instagram']))
                                    <a href="{{ $item['value'] }}" target="_blank">
                                     <i class="fa fa-{{ $item['name'] }}"></i>
                                  </a>
                                @endif
                            @endforeach
                        </span>
        </div>

        <div class="topbar-right">
            <div class="topbar-right">
                @if(app()->getLocale() == 'ar')
                    <span class="topbar-widget"><a href="{{route('locale', ['en'])}}">English</a></span>
                @else
                    <span class="topbar-widget"><a href="{{route('locale', ['ar'])}}">العربية</a></span>
                @endif
                <span class="topbar-widget"><a href="#">Privacy policy</a></span>
                <span class="topbar-widget"><a href="#">Customer Support</a></span>
                <span class="topbar-widget"><a href="#">FAQ</a></span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>