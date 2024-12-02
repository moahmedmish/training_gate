<?php $__env->startSection('content'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('front/css/vendors/vegas.min.css')); ?>">

    <section class="d-flex align-items-center page-hero hero-vegas-slider inner-page-hero " id="page-hero">
        <div class="overlay-color"></div>
        <div class="vegas-slider-content" data-vegas-slide-1="<?php echo e(asset($page->banner1)); ?>" data-vegas-slide-2="<?php echo e(asset($page->banner2)); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-12 hero-text-area ">
                        <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s"><?php echo e(__('layout.our_collection')); ?></h1>
                        <nav aria-label="breadcrumb ">
                            <ul class="breadcrumb wow fadeInUp" data-wow-delay="1s">
                                <?php
                                    //$cat = $currentCategory ? \App\Models\Category::find($currentCategory) : null;
                                    $cat = null;
                                ?>

                                
                                

                                <?php if($cat): ?>
                                    <li class="breadcrumb-item active" style="font-size: 2rem">
                                        <?php echo e($cat->{'name_'.app()->getLocale()}); ?>

                                    </li>
                                <?php else: ?>
                                    <li class="breadcrumb-item active" style="font-size: 2rem">
                                        <?php echo e(__('layout.all')); ?>

                                    </li>
                                <?php endif; ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End inner Page hero-->
    <!-- Start  about Section-->
    <!-- Start  about Section-->
    <!-- End  about Section-->

    <!-- Start  benefits Section-->
    <section class="portfolio mega-section section-bg-shade  " id="portfolio">
        <?php $portfoliobgImage = \App\Models\PhotoSetting::where('name', 'middle banner background')->first(); ?>
        <div class="overlay-photo-image-bg" style='background-image: url("<?php echo e($portfoliobgImage->image); ?>");'></div>
        <div class="container">
            <div class="portfolio-wraper  ">
                <style>
                    .portfolio-btn-list a {
                        text-decoration: none;
                    }

                </style>
                <!--a menu of links to show the photos users needs   -->
                <ul class="portfolio-btn-list ">

                    <li class="portfolio-btn" data-filter="*">
                        <a class="portfolio-btn" href="<?php echo e(route('collection')); ?>" <?php if(request()->route()->getName() == 'collection'): ?> style="color: #c1a37f" <?php endif; ?>>
                            <?php echo e(__('layout.all')); ?>

                        </a>
                    </li>

                    <?php $__currentLoopData = \App\Models\Category::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="portfolio-btn" data-filter=".<?php echo e(\Illuminate\Support\Str::replace(' ', '_', $category->name_en)); ?>">
                            <a class="portfolio-btn" href="<?php echo e(route('collection-details', $category->id)); ?>"
                            <?php if(request()->route()->getName() == 'collection-details' && request()->route('collection') == $category->id ): ?> style="color: #c1a37f" <?php endif; ?>>
                                <?php echo e($category->{'name_'.app()->getLocale()}); ?>

                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                </ul>
                <div class="portfolio-group wow fadeIn" data-wow-delay=".2s">
                    <div class="row  g-0 ">
                        <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-12  col-sm-6  col-lg-4  portfolio-item <?php echo e(\Illuminate\Support\Str::replace(' ', '_', \App\Models\Category::find($gallery->category_id)->name_en)); ?> ">
                                <div class="item"><a class="portfolio-img-link " href="<?php echo e(asset($gallery->image)); ?>" data-fancybox=".filter">
                                        <div class="overlay overlay-color"></div><img class="portfolio-img  img-fluid " src="<?php echo e(asset($gallery->image)); ?>" alt="portfolio item photo"></a>
                                    <div class="item-info "><span class="info-title"><?php echo e(\App\Models\Category::find($gallery->category_id)->{'name_'.app()->getLocale()}); ?></span>
                                        <ul class="tags-list">
                                            <li class="tag-item"> <a class="tag-link" href="#"><?php echo e($gallery->{'title_'.app()->getLocale()}); ?></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <?php echo e($galleries->links()); ?>

                </div>
            </div>
            <!--Start .see-more-area-->

            <!--End .see-more-area-->
        </div>
    </section>
    <!-- End  benefits Section-->
    <!-- Start  blog Section-->
    <!-- End  blog Section-->
    <!-- Start  faq Section-->








































































































































































    <!-- End  faq Section-->


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/training_gate/resources/views/collection-details.blade.php ENDPATH**/ ?>