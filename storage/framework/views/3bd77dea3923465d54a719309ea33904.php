<?php $__env->startSection('content'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('front/css/vendors/vegas.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front/css/vendors/swiper.min.css')); ?>">

    <!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero hero-vegas-slider inner-page-hero " id="page-hero">
        <div class="overlay-color"></div>
        <div class="vegas-slider-content" data-vegas-slide-1="<?php echo e(asset($project->banner)); ?>" data-vegas-slide-2="<?php echo e(asset($project->image)); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-12 hero-text-area ">
                        <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s"><?php echo e($project->{'title_'.app()->getLocale()}); ?></h1>
                        <nav aria-label="breadcrumb ">




                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End inner Page hero-->
    <!-- Start Project Details Area-->
    <section class="portfolio-single">
        <div class="container">
            <div class="project-heading">
                <div class="row">
                    <div class="col-12 col-lg-10 mx-auto">
                        <div class="tag-line"><?php echo e(__('layout.' . $project->category)); ?></div>
                        <h1 class="project-title"><?php echo e($project->{'title_'.app()->getLocale()}); ?></h1>






                    </div>
                </div>
            </div>





















































            <div class="main-area">
                <div class="row">
                    <div class="col-12 col-lg-10 mx-auto ">

                        <p class="project-text">
                            <?php echo e($project->{'summary_'.app()->getLocale()}); ?>

                        </p>


















































                        <div class="portfolio portfolio-slider">
                            <!--Swiper-->
                            <div class="swiper-container wow fadeIn" data-wow-delay=".5s">
                                <div class="swiper-wrapper ">
                                    <?php $__currentLoopData = $project->projectPhotos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="swiper-slide">
                                            <div class="item "><a class="portfolio-img-link " href="<?php echo e(asset($photo->image)); ?>" data-fancybox=".filter">
                                                    <div class="overlay overlay-color"></div><img class="  portfolio-img img-fluid  " src="<?php echo e(asset($photo->image)); ?>" alt=" "></a>
                                                <div class="item-info "><span class="info-title"><?php echo e($photo->{'title_'.app()->getLocale()}); ?></span>




                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>























































                                </div>

                                <?php if(app()->getLocale() == 'en'): ?> <?php endif; ?>
                                <div class="swiper-button-prev">
                                    <div class="left-arrow"><i class="fas <?php if(app()->getLocale() == 'en'): ?> fa-arrow-left <?php else: ?> fa-arrow-right <?php endif; ?> icon "></i>
                                    </div>
                                </div>
                                <div class="swiper-button-next">
                                    <div class="right-arrow"><i class="fas <?php if(app()->getLocale() == 'en'): ?> fa-arrow-right <?php else: ?> fa-arrow-left <?php endif; ?> icon "></i>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End  Project Details Area-->


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/training_gate/resources/views/project-details.blade.php ENDPATH**/ ?>