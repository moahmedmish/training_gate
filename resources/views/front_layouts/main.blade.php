<!DOCTYPE html>
<html lang="ar">
<head>
    @include('header')
</head>
<body class="hide-rtl">
<div id="wrapper">

    @include('topbar')
    @include('mainmenu')

    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        @yield('content')

    </div>
    <!-- content close -->

    <a href="#" id="back-to-top"></a>

    @include('footer')

</div>

@include('footer_js')

</body>
</html>
