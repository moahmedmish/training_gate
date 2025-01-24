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
            <span class="topbar-widget">
                <a href="{{ route('locale', [app()->getLocale() == 'ar' ? 'en' : 'ar']) }}"
                   class="btn btn-primary btn-lg"
                   style="font-size: 18px; padding: 3px 20px;border-radius: 5px;text-transform: uppercase;font-weight: 400;background-color: #ffde00">
                    {{ app()->getLocale() == 'ar' ? 'English' : 'العربية' }}
                </a>
            </span>
        </div>

        <div class="clearfix"></div>
    </div>
</div>