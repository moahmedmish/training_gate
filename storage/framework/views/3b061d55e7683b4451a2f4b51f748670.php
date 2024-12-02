<?php $__env->startSection('content'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('front/css/vendors/vegas.min.css')); ?>">
    <!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero hero-vegas-slider inner-page-hero " id="page-hero">
        <div class="overlay-color"></div>
        <?php  $contactPage = \App\Models\Page::where('route_name', 'contact')->first() ;?>
        <div class="vegas-slider-content" data-vegas-slide-1="<?php echo e(asset($contactPage->banner1)); ?>" data-vegas-slide-2="<?php echo e(asset($contactPage->banner2)); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-12 hero-text-area ">
                        <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s"><?php echo e(__('layout.contact_us')); ?></h1>
                        <nav aria-label="breadcrumb ">




                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End inner Page hero-->
    <!-- Start contact-info-1-->
    <section class="contact-info mega-section">
        <div class="container">
            <div class="section-heading center-heading">
                <h2 class="section-title wow" data-splitting="words"><?php echo e(__('layout.Our_Contact_Info')); ?></h2>
                <div class="line-on-center wow fadeIn" data-wow-delay=".6s"></div>
            </div>
            <div class="info-section ">
                <div class="row ">
                    <div class="col-12 col-md-6 col-lg-3 ">
                        <div class="info-panel wow fadeInUp" data-wow-delay=".2s"><i class="fas fa-map-marker-alt icon"></i>
                            <?php
                                $address = \App\Models\Setting::where('name', 'address_' . app()->getLocale())->first()->value;
                            ?>

                            <div class="info-content">
                                <h6 class="info-title"><?php echo e(__('layout.address')); ?></h6>
                                <p class="info-text">

                                    <?php echo e($address); ?>


                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 ">
                        <div class="info-panel wow fadeInUp" data-wow-delay=".4s"><i class="fas fa-mobile-alt icon"></i>
                            <div class="info-content">
                                <h6 class="info-title"><?php echo e(__('layout.phones')); ?></h6>
                                <?php $landline = \App\Models\Setting::where('name', 'landline phone')->first()->value ;
                                 $sales = \App\Models\Setting::where('name', 'sales phone')->first()->value ; ?>
                                <p class="info-text"> <a class="tel link" href="tel:<?php echo e($landline); ?>"><?php echo e($landline); ?></a><a class="tel link" href="tel:<?php echo e($sales); ?>"><?php echo e($sales); ?></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 ">
                        <div class="info-panel wow fadeInUp" data-wow-delay=".6s"><i class="fas fa-envelope icon"></i>
                            <div class="info-content">
                                <h6 class="info-title"><?php echo e(__('layout.email')); ?></h6>
                                <?php $email = \App\Models\Setting::where('name', 'contact email')->first()->value ?>
                                <p class="info-text"> <a class="tel link" href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a>
                        </div>
                    </div>








                </div>
            </div>
            <div class="map-box">

                <div class="mapouter">
                    <div class="gmap_canvas">
                        <?php
                            $lat = \App\Models\Setting::where('name','Latitude')->first()->value;
                            $long = \App\Models\Setting::where('name','Longitude')->first()->value;
                        ?>
                        <iframe class="map-iframe" id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo e($lat); ?>,<?php echo e($long); ?>&hl=en&z=17&output=embed"></iframe>
                    </div>
                </div>


















            </div>
        </div>
    </section>
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

                        <form class="main-form" id="contact-us-form" action="<?php echo e(route('contacts.store')); ?>" method="post"><span class="done-msg"></span>
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






                                <div class="col-12 ">
                                    <div class="   input-wraper">
                                        <textarea class=" text-input" id="msg-text" name="message"></textarea>
                                        <label for="msg-text"> <?php echo e(__('layout.message')); ?> <span class="req">*</span></label><span class="b-border"></span><i></i>
                                    </div>
                                </div>
                                <div class="col-12 submit-wraper">
                                    <button class=" ma-btn-primary" id="submit-btn" type="submit" name="UserSubmit"><?php echo e(__('layout.send')); ?></button>
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

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/training_gate/resources/views/contact.blade.php ENDPATH**/ ?>