<html lang="ar">
<head>
    @include('header')
</head>

@if ( app()->getLocale() != 'ar')
    <body class="hide-rtl">
    @elseif ( app()->getLocale() == 'ar')
    <body class="rtl" style="display: flex; flex-direction: column; background-size: cover;">
    @endif

<div id="wrapper">
    @include('topbar')

    <!-- header begin -->
    @include('mainmenu')
    <!-- header close -->
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="text-light" data-bgimage="url(http://127.0.0.1:8000/images/services/subheader3.jpg) top">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">

                        <div class="col text-center">
                            <div class="spacer-single"></div>
                            <h1>About Us</h1>
                            <p>This is how our company began.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->


        <!--<section aria-label="section" data-bgcolor="#ffffff">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <span class="p-title invert">Who We Are</span><br>
                        <h2>Your partner for insurance</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                    </div>

                    <div class="col-md-6 offset-md-1">
                        <div class="de-images">
                            <img class="di-small-2" src="images/misc/d2.jpg" alt="" />
                            <img class="di-big img-fluid" src="images/misc/d1.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        @include('section_welcome')
        @include('section_covers')
        @include('section_features')
        @include('section_free_consult')
        @include('section_testimonial')
        @include('section_news')


    </div>
    <!-- content close -->

    <a href="#" id="back-to-top"></a>

    <!-- footer begin -->
    @include('footer')
    <!-- footer close -->



        @include('footer_js')

</body>

</html>