<?php $__env->startSection('content'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('front/css/vendors/vegas.min.css')); ?>">
    <!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero hero-vegas-slider inner-page-hero " id="page-hero">
        <div class="overlay-color"></div>
        <?php  $joinPage = \App\Models\Page::where('route_name', 'join')->first() ;?>

        <div class="vegas-slider-content" data-vegas-slide-1="<?php echo e(asset($joinPage->banner1)); ?>" data-vegas-slide-2="<?php echo e(asset($joinPage->banner2)); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-12 hero-text-area ">
                        <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s"><?php echo e(__('layout.join_us')); ?></h1>
                        <nav aria-label="breadcrumb ">




                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End inner Page hero-->
    <!-- Start contact-info-1-->
    <!-- End contact-info-1-->
    <!-- Start contact-us -->
    <section class="contact-us  mega-section section-bg-shade" id="contact-us">
        <div class="container">
            <div class="section-heading center-heading">
                <h2 class="section-title wow" data-splitting="words"><?php echo e(__('layout.Leave_your_message')); ?></h2>
                <div class="line-on-center wow fadeIn" data-wow-delay=".6s"></div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-9  mx-auto wow fadeInUp  " data-wow-delay="0.6s">
                    <div class="main-form-wraper input-boxed">
                        <!--Form To have user messages-->

                        <form class="main-form" id="join-us-form" action="<?php echo e(route('joins.store')); ?>" method="post" enctype="multipart/form-data">
                            <span class="done-msg"></span>
                            <?php echo csrf_field(); ?>
                            <div class="row ">
                                <div class="col-12 col-lg-6">
                                    <div class="   input-wraper">
                                        <input class="text-input" id="user-name" name="name" type="text"/>
                                        <label for="user-name"> <?php echo e(__('layout.name')); ?> <span class="req">*</span></label><span class="b-border"></span><span class="error-msg"></span>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="   input-wraper">
                                        <input class="text-input" id="user-email" name="email" type="email"/>
                                        <label for="user-email"> <?php echo e(__('layout.email')); ?> <span class="req">*</span></label><span class="b-border"></span><span class="error-msg"></span>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="input-wraper">
                                        <input class="file-input" id="cv-upload" name="cv" type="file" />
                                        <label for="cv">CV <span class="req">*</span></label>
                                        <span class="error-msg"></span>
                                    </div>
                                </div>


                                <div class="col-12 ">
                                    <div class="   input-wraper">
                                        <textarea class=" text-input" id="msg-text" name="message"></textarea>
                                        <label for="msg-text"> <?php echo e(__('layout.message')); ?> <span class="req">*</span></label><span class="b-border"></span><i></i>
                                    </div>
                                </div>
                                <div class="col-12 submit-wraper">
                                    <button class=" ma-btn-primary" id="join-submit-btn" type="submit" name="UserSubmit"><?php echo e(__('layout.send')); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End contact-us -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/training_gate/resources/views/join.blade.php ENDPATH**/ ?>