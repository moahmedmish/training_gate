<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ url('/admin') }}" class="brand-link">
{{--        <img src="{{asset( 'public/' . \App\Models\Setting::where('name', 'logo')->first()->value)}}"--}}
{{--             alt="{{ config('app.name') }} Logo"--}}
{{--             class="brand-image img-circle elevation-3" style="">--}}
        <span class="brand-text" style="font-size: 16px">{{ 'IWTL' }}</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>
</aside>
