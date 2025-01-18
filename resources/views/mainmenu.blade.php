<!-- header begin -->
<header class="transparent">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    <div class="de-flex-col">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="{{ url('/') }}">
                                <img alt="Logo Light" class="logo" src="{{ asset('front/images/logo-light.png') }}" />
                                <img alt="Logo Dark" class="logo-2" src="{{ asset('front/images/logo.png') }}" />
                            </a>
                        </div>
                        <!-- logo close -->
                    </div>
                    <div class="de-flex-col header-col-mid">
                        <!-- mainmenu begin -->
                        <ul id="mainmenu">
                            @foreach($menus as $menu)
                                <li>
                                    <a href="{{ route('pages.show', $menu['route_name']) }}">
                                        {{ app()->getLocale() == 'ar' ? $menu['title_ar'] : $menu['title_en'] }}
                                        @if($menu['has_sub'])<span></span>@endif
                                    </a>
                                    @if($menu['has_sub'] && !empty($menu['sub_pages']))
                                        <ul>
                                            @foreach($menu['sub_pages'] as $subPage)
                                                <li>
                                                    <a href="{{ route('pages.showsub', $menu['route_name']) }}">
                                                        {{ app()->getLocale() == 'ar' ? $subPage['title_ar'] : $subPage['title_en'] }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="de-flex-col">
                        <div class="h-phone"><span>Need&nbsp;Help?</span><i
                                    class="fa fa-phone id-color-secondary"></i> 1 200 300 9000
                        </div>
                        <span id="menu-btn"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header close -->