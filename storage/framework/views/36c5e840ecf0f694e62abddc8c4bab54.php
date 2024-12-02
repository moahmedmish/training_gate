<?php $__env->startSection('content'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('front/css/vendors/vegas.min.css')); ?>">

    <!--End Page Header-->
    <!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero hero-vegas-slider inner-page-hero " id="page-hero">
        <div class="overlay-color"></div>
        <div class="vegas-slider-content" data-vegas-slide-1="<?php echo e(asset($service->banner)); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-12 hero-text-area ">
                        <h1 class="hero-title  wow fadeInUp"
                            data-wow-delay=".2s"><?php echo e($service->{'title_'.app()->getLocale()}); ?></h1>
                        <nav aria-label="breadcrumb ">
                            <ul class="breadcrumb wow fadeInUp" data-wow-delay="1s">
                                
                                
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End inner Page hero-->
    <!-- Start blog-1-col-posts-->
    <section class="blog blog-home mega-section">
        <div class="container ">
            <div class="row ">
                <div class="col-12 col-lg-8 ">
                    <div class="posts-grid">
                        <div class="row">
                            <div class="col-12 ">
                                <div class="post-box"><a class="post-link" href="post-single_dark.html">
                                        <div class="post-img-wraper">
                                            <div class="overlay-color"></div>
                                            <h4 class="post-date"><span class="day">05 </span>march, 2023 </h4>
                                        </div>
                                    </a>
                                    <div class="post-summary">




                                        <div class="post-text"><a class="post-link" href="post-single_dark.html">
                                                <h2 class="post-title"> <?php echo e($service->{'title_'.app()->getLocale()}); ?> </h2>
                                            </a>
                                            <p class="post-excerpt">
                                            <?php echo e($service->{'summary_'.app()->getLocale()}); ?>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="post-box"><a class="post-link" href="post-single_dark.html">







                                    </a>
                                    <div class="post-summary">




                                        <div class="post-text">
                                            <p class="post-excerpt">
                                                <?php echo e($service->{'desc_'.app()->getLocale()}); ?>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


























                            <!--Start Posts pagination-->



















                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 ">
                    <div class="blog-sidebar">
                        <!--search box-->







                        <!--categories box-->
                        <div class="cats sidebar-box">
                            <h6 class="sidebar-box-title"><i class="fas fa-list-alt icon"></i><?php echo e(__('layout.services')); ?>:</h6>
                            <ul class="sidebar-list cats-list  ">
                                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="cat-item">
                                    <a class="cat-link" href="<?php echo e(route('service-details', $service->id)); ?>"><?php echo e($service->{'title_'.app()->getLocale()}); ?></a>
                                    <span class="cat-count">..</span>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </ul>
                        </div>
                        <!--Recent posts  -->


























































                        <div class="follow-us sidebar-box">
                            <h6 class="sidebar-box-title"><i class="fas fa-heart icon"></i><?php echo e(__('layout.follow_us_on')); ?>:</h6>
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
            </div>
        </div>
    </section>
    <!-- End blog-1-col-posts-->
    <!-- Start  page-footer Section-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/training_gate/resources/views/service-details.blade.php ENDPATH**/ ?>