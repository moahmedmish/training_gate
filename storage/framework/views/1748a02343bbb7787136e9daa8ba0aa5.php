<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e(\App\Models\Setting::where('name','site_title_'.app()->getLocale())->first()->value); ?></title>
    <meta name="title" content="<?php echo e(\App\Models\Setting::where('name','site_title_'.app()->getLocale())->first()->value); ?>">
    <meta name="description" content="<?php echo e(\App\Models\Setting::where('name','meta_description_'.app()->getLocale())->first()->value); ?>">









    <meta property="og:type" content="website">
    <!-- fav icon -->
    <link rel="icon" href="<?php echo e(asset('favicon-16x16.png')); ?>">


    <!-- bootstarp -->
    <link rel="stylesheet" href="<?php echo e(asset('front/css/vendors/bootstrap.min.css')); ?>">

    <!-- Fancybox -->
    <link rel="stylesheet" href="<?php echo e(asset('front/css/vendors/jquery.fancybox.min.css')); ?>">

    <!-- animate.css file -->
    <link rel="stylesheet" href="<?php echo e(asset('front/css/vendors/animate.css')); ?>">

    <!-- Swiper -->
    <link rel="stylesheet" href="<?php echo e(asset('front/css/vendors/swiper.min.css')); ?>">

    <!-- Splitting -->
    <link rel="stylesheet" href="<?php echo e(asset('front/css/vendors/splitting.css')); ?>">

    <!-- TwentyTwenty -->
    <link rel="stylesheet" href="<?php echo e(asset('front/css/vendors/twentytwenty.css')); ?>">

    <!-- fontAwesome -->
    <link rel="stylesheet" href="<?php echo e(asset('front/css/vendors/all.min.css')); ?>">

    <!-- Font Family -->
    <?php if(app()->getLocale() == 'en'): ?>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;500;600;700;800;900&amp;family=Poppins:wght@400;500;600;700;800;900&amp;display=swap">
    <?php else: ?>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cairo:400,600,700,900">
    <?php endif; ?>

    <!-- main-LTR-1 -->

    <?php if(app()->getLocale() == 'en'): ?>
        <link rel="stylesheet" href="<?php echo e(asset('front/css/main-LTR-1.css')); ?>">
    <?php else: ?>
        <link rel="stylesheet" href="<?php echo e(asset('front/css/main-RTL-1.css')); ?>">

    <?php endif; ?>

    <style>
        @media (max-width: 768px) {
            .sub-menu-link {
                color: #ffffff !important; /* White color for mobile view */
            }
            .dark-header .has-sub-menu .sub-menu .sub-menu-link {
                color: #ffffff !important; /* White color for mobile view */

            }
        }

    </style>

</head>
<body class="dark-theme   overlay-is-grey hard-squared-btns ">
<!--Start Page Header-->
<header class=" page-header dark-header menu-on-end " id="page-header">
    <div class="header-search-box">
        <div class="close-search"></div>
        <form class="nav-search search-form" role="search" method="get" action="#">
            <div class="search-wraper">
                <label class="search-lbl">Search for:</label>
                <input class="search-input" type="search" placeholder="Search..." name="searchInput" autofocus="autofocus"/>
                <button class="search-btn" type="submit"><i class="fas fa-search icon"></i></button>
            </div>
        </form>
    </div>
    <!--start navbar-->
    <div class="container">
        <nav class="main-navbar " id="main-nav"><a class="navbar-brand " href="<?php echo e(route('home')); ?>"><img class="brand-logo light-logo img-fluid " width="130" src="<?php echo e(asset(\App\Models\PhotoSetting::where('name', 'logo_' . app()->getLocale())->first()->image)); ?>" alt="site logo"/><img class="brand-logo dark-logo img-fluid " src="<?php echo e(asset(\App\Models\PhotoSetting::where('name', 'logo_' . app()->getLocale())->first()->image)); ?>" alt="site logo"/></a>
            <div class="menu-toggler-btn"><span></span><span></span><span></span></div>
            <div class=" navbar-menu-wraper  " id="navbar-menu-wraper">
                <ul class="navbar-nav  mobile-menu ">

                    <li class="nav-item"><a class="nav-link   <?php if(request()->route()->getName() == 'home'): ?> active <?php endif; ?> " href="<?php echo e(route('home')); ?>"><?php echo e(__('layout.home')); ?></a></li>

                    <?php
                         $menuItems = \App\Models\Page::where('publish', 1)->where('on_menu', 1)->orderBy('menu_order')->get();
                    ?>
                    <?php $__currentLoopData = $menuItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $detailsPageCheck = \Illuminate\Support\Str::contains($menuItem->route_name, '-detail'); ?>


                        <?php if($detailsPageCheck): ?>
                            <?php if(\Illuminate\Support\Str::contains($menuItem->route_name, 'service')): ?>
                                <li class="nav-item has-sub-menu">
                                    <a class="nav-link <?php if(request()->route()->getName() == 'service-details'): ?> active <?php endif; ?>  " href="#0">
                                        <?php echo e($menuItem->{'title_'.app()->getLocale()} ?? __('layout.services')); ?>

                                        <i class="fas fa-chevron-down down-Arrow-icon"> </i>
                                    </a>
                                    <ul class="sub-menu ">
                                        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="nav-item sub-menu-item">
                                                <a class="nav-link sub-menu-link  " href="<?php echo e(route('service-details', $service->id)); ?>">
                                                    <?php echo e($service->{'title_'.app()->getLocale()}); ?>

                                                </a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                            <?php elseif(\Illuminate\Support\Str::contains($menuItem->route_name, 'project')): ?>
                                <li class="nav-item has-sub-menu">
                                    <a class="nav-link <?php if(request()->route()->getName() == 'project-details'): ?> active <?php endif; ?>" href="#0">
                                        <?php echo e($menuItem->{'title_'.app()->getLocale()} ?? __('layout.projects')); ?>

                                        <i class="fas fa-chevron-down down-Arrow-icon"> </i>
                                    </a>
                                    <ul class="sub-menu ">
                                        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="nav-item sub-menu-item"><a class="nav-link sub-menu-link  " href="<?php echo e(route('project-details', $project->id)); ?>"><?php echo e($project->{'title_'.app()->getLocale()}); ?> </a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>

                            <?php elseif(\Illuminate\Support\Str::contains($menuItem->route_name, 'collection')): ?>
                                <li class="nav-item has-sub-menu">
                                    <a class="nav-link <?php if(request()->route()->getName() == 'collection'): ?> active <?php endif; ?>" href="<?php echo e(route('collection')); ?>">
                                        <?php echo e($menuItem->{'title_'.app()->getLocale()} ?? __('layout.collection')); ?>

                                        <i class="fas fa-chevron-down down-Arrow-icon"> </i>
                                    </a>
                                    <ul class="sub-menu ">
                                        <?php $__currentLoopData = \App\Models\Category::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="nav-item sub-menu-item"><a class="nav-link sub-menu-link  " href="<?php echo e(route('collection-details', $category->id)); ?>"><?php echo e($category->{'name_'.app()->getLocale()}); ?> </a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>

                            <?php endif; ?>

                        <?php else: ?>



                            <li class="nav-item">
                                <a class="nav-link  <?php if(request()->route()->getName() == $menuItem->route_name): ?> active <?php endif; ?> "
                                   href="<?php echo e($menuItem->route_name !== 'catalog' ? route($menuItem->route_name) : 'https://drive.google.com/file/d/1w8GHdjVMVw32qMOz8TKFZiKioXfj20Kt/view'); ?>">
                                    <?php echo e($menuItem->{'title_'.app()->getLocale()} ?? __('layout.'.$menuItem->route_name)); ?>

                                </a>
                            </li>

                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>






                    <?php if(app()->getLocale() == 'ar'): ?>
                        <li class="nav-item"><a class="nav-link  " href="<?php echo e(route('locale', ['en'])); ?>">English</a></li>
                    <?php else: ?>
                        <li class="nav-item"><a class="nav-link  " href="<?php echo e(route('locale', ['ar'])); ?>">العربية</a></li>
                    <?php endif; ?>


                </ul>
            </div>











        </nav>
    </div>
</header>
<!--End Page Header-->

<?php echo $__env->yieldContent('content'); ?>



<?php if(request()->route()->getName() !== 'contact'): ?>
<?php $homefooterbackground = \App\Models\PhotoSetting::where('name', 'home footer background')->first(); ?>
<!-- Start  take-action Section-->
<section class="take-action mega-section " id="take-action">
    <div class="overlay-photo-image-bg parallax " style='background-image: url("<?php echo e(asset($homefooterbackground->image)); ?>");'></div>
    <div class="overlay-color "></div>
    <div class="cta-wrapper">
        <div class="container">
            <div class="section-heading center-heading">
                <h2 class="section-title wow" data-splitting="words"><?php echo e(__('layout.Still_Have_More_Questions')); ?></h2>

                <div class="line-on-center wow fadeIn" data-wow-delay=".6s"></div>
            </div>
            <!--Start .see-more-area-->
            <div class=" see-more-area wow fadeInUp" data-wow-delay="0.8s"><a class=" ma-btn-primary " href="<?php echo e(route('contact')); ?>"><?php echo e(__('layout.get_in_toutch')); ?></a></div>
            <!--End Of .see-more-area        -->
        </div>
    </div>
</section>
<?php endif; ?>
<footer class="page-footer dark-color-footer" id="page-footer">
    <div class="container">
        <div class="row footer-cols">
            <div class="col-12 col-md-8 col-lg-4  footer-col wow fadeInUp " data-wow-delay="0.3s">
                <h2 class=" footer-col-title  "><?php echo e(__('layout.roma')); ?></h2>
                <div class="footer-col-content-wrapper">
                    <p class="footer-text-about-us ">
                        <?php echo e(\App\Models\Setting::where('name', 'meta_description_'.app()->getLocale())->first()->value); ?>


                    </p>
                    <div class="social-icons">
                        <div class="sc-wraper dir-row sc-size-32">
                            <ul class="sc-list">
                                <li class="sc-item " title="Facebook"><a class="sc-link" target="_blank" href="<?php echo e(\App\Models\Setting::where('name', 'facebook')->first()->value); ?>"><i class="fab fa-facebook-f sc-icon"></i></a></li>
                                <li class="sc-item " title="youtube"><a class="sc-link" target="_blank" href="<?php echo e(\App\Models\Setting::where('name', 'youtube')->first()->value); ?>"><i class="fab fa-youtube sc-icon"></i></a></li>
                                <li class="sc-item " title="instagram"><a class="sc-link" target="_blank" href="<?php echo e(\App\Models\Setting::where('name', 'instagram')->first()->value); ?>"><i class="fab fa-instagram sc-icon"></i></a></li>

                                <li class="sc-item" title="tiktok">
                                    <a class="sc-link" target="_blank" href="<?php echo e(\App\Models\Setting::where('name', 'tiktok')->first()->value); ?>">
                                        <i class="fab fa-tiktok sc-icon"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-2  footer-col wow fadeInUp " data-wow-delay="0.5s" >
                <h2 class=" footer-col-title    "><?php echo e(__('layout.links')); ?></h2>
                <div class="footer-col-content-wrapper" style="">
                    <ul class="footer-menu ">
                        <li class="footer-menu-item"><a class="footer-menu-link" href="<?php echo e(route('home')); ?>"><?php echo e(__('layout.home')); ?></a></li>
                        <li class="footer-menu-item"><a class="footer-menu-link" href="<?php echo e(route('about')); ?>"><?php echo e(__('layout.about_us')); ?></a></li>
                        <li class="footer-menu-item"><a class="footer-menu-link" href="<?php echo e(route('collection')); ?>"><?php echo e(__('layout.our_collection')); ?></a></li>
                        <li class="footer-menu-item"><a class="footer-menu-link" href="<?php echo e(route('catalog')); ?>"><?php echo e(__('layout.catalog')); ?></a></li>
                        <li class="footer-menu-item"><a class="footer-menu-link" href="<?php echo e(route('contact')); ?>"><?php echo e(__('layout.contact_us')); ?></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-2 footer-col wow fadeInUp " data-wow-delay=".7s" style="visibility: hidden !important;">
                <h2 class=" footer-col-title    "><!--Resources--></h2>
                <div class="footer-col-content-wrapper" style="visibility: hidden !important;">
                    <ul class="footer-menu">
                        <li class="footer-menu-item"><a class="footer-menu-link" href="#0">support</a></li>
                        <li class="footer-menu-item"><a class="footer-menu-link" href="#0">dashboard</a></li>
                        <li class="footer-menu-item"><a class="footer-menu-link" href="#0">drivers</a></li>
                        <li class="footer-menu-item"><a class="footer-menu-link" href="#0">projects</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-8   col-lg-4 footer-col wow fadeInUp " data-wow-delay=".9s">
                <h2 class=" footer-col-title    "><?php echo e(__('layout.Our_Contact_Info')); ?></h2>
                <div class="footer-col-content-wrapper">
                    <?php $email = \App\Models\Setting::where('name', 'contact email')->first()->value ?>
                    <div class="contact-info-card"><i class="fas fa-envelope icon"></i><a class="text-lowercase  info" href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a></div>

                    <?php
                        $address = \App\Models\Setting::where('name', 'address_' . app()->getLocale())->first()->value;
//                        $googleMapsUrl = 'https://www.google.com/maps/search/?api=1&query=' . urlencode($address);
                        $googleMapsUrl = \App\Models\Setting::where('name', 'google map')->first()->value;
                    ?>

                    <div class="contact-info-card">
                        <i class="fas fa-map-marker-alt icon"></i>
                        <a href="<?php echo e($googleMapsUrl); ?>" target="_blank" class="text-lowercase  info">
                            <?php echo e($address); ?>

                        </a>
                    </div>
                    <?php $landline = \App\Models\Setting::where('name', 'landline phone')->first()->value ;
                                 $sales = \App\Models\Setting::where('name', 'sales phone')->first()->value ; ?>

                    <div class="contact-info-card"><i class="fas fa-mobile-alt icon"></i><a class="info" href="tel:<?php echo e($landline); ?>"><?php echo e($landline); ?>      </a></div>
                    <div class="contact-info-card"><i class="fas fa-mobile-alt icon"></i><a class="info" href="tel:<?php echo e($sales); ?>"><?php echo e($sales); ?>      </a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyrights ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <p class="creadits">


                        &copy; 2024
                        Created by:

                        <a class="link" target="_blank" href="https://finalsolution.co/">finalsolution</a>
                    </p>
                </div>





            </div>
        </div>
    </div>
</footer>
<!-- End  page-footer Section-->
<!-- Start loading-screen Component-->
<div class="loading-screen" id="loading-screen">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<!-- End loading-screen Component-->
<!-- Start back-to-top Component-->
<div class="back-to-top" id="back-to-top"><i class="fas fa-arrow-up icon"></i></div>
<!-- End back-to-top Component-->

<!--     JQuery     -->
<script src="<?php echo e(asset('front/js/vendors/jquery-3.4.1.min.js')); ?>"></script>

<!--     bootstrap     -->
<script src="<?php echo e(asset('front/js/vendors/bootstrap.bundle.min.js')); ?>"></script>

<!--     fancybox     -->
<script src="<?php echo e(asset('front/js/vendors/jquery.fancybox.min.js')); ?>"></script>

<!--     countTo     -->
<script src="<?php echo e(asset('front/js/vendors/jquery.countTo.js')); ?>"></script>

<!--     wow     -->
<script src="<?php echo e(asset('front/js/vendors/wow.min.js')); ?>"></script>

<!--     swiper     -->
<script src="<?php echo e(asset('front/js/vendors/swiper.min.js')); ?>"></script>

<!--     event.move     -->
<script src="<?php echo e(asset('front/js/vendors/jquery.event.move.js')); ?>"></script>

<!--     TwentyTwenty     -->
<script src="<?php echo e(asset('front/js/vendors/jquery.twentytwenty.js')); ?>"></script>

<!--     Splitting     -->
<script src="<?php echo e(asset('front/js/vendors/splitting.min.js')); ?>"></script>

<!--     isotope     -->
<script src="<?php echo e(asset('front/js/vendors/isotope-min.js')); ?>"></script>

<!--     ajaxchimp     -->
<script src="<?php echo e(asset('front/js/vendors/jquery.ajaxchimp.min.js')); ?>"></script>

<script src="<?php echo e(asset('front/js/vendors/vegas.min.js')); ?>"></script>

<!--     main     -->
<script src="<?php echo e(asset('front/js/main.js')); ?>"></script>



</body>
</html>


<?php /**PATH /opt/lampp/htdocs/training_gate/resources/views/layouts/front.blade.php ENDPATH**/ ?>