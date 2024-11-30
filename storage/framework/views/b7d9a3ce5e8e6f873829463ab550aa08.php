<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TGI- Admin Dashborad</title>
    <!-- Styles -->
    <?php echo $__env->make('partials.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<?php
    $toremove = \Illuminate\Support\Str::contains(request()->route()->getName(), '.create')? '.create':'.edit';
//    dd($toremove);
    $routename = \Illuminate\Support\Str::replace($toremove,'', request()->route()->getName())  ;
    $pageNamePlural = ucfirst($routename);
    $pageNameSingular = ucfirst(\Illuminate\Support\Str::singular($pageNamePlural));
?>

<body class="boxed-size">
<?php echo $__env->make('partials.preloader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container-fluid">
    <div class="main-content d-flex flex-column">
        <!-- Start Header Area -->
        <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- End Header Area -->

        <div class="main-content-container overflow-hidden">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
                <h3 class="mb-0"><?php echo e($pageNamePlural== 'Galleries'? 'Collections': $pageNamePlural); ?></h3>

                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb align-items-center mb-0 lh-1">
                        <li class="breadcrumb-item">
                            <a href="#" class="d-flex align-items-center text-decoration-none">
                                <i class="ri-home-4-line fs-18 text-primary me-1"></i>
                                <span class="text-secondary fw-medium hover">Dashboard</span>
                            </a>
                        </li>



                        <li class="breadcrumb-item active" aria-current="page">
                            <span class="fw-medium"><?php echo e($pageNamePlural == 'Galleries'? 'Collections': $pageNamePlural); ?></span>
                        </li>
                    </ol>
                </nav>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card bg-white border-0 rounded-3 mb-4">
                        <div class="card-body p-4">
                            <h4 class="fs-18 mb-4"></h4>
                            <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            <?php echo $__env->yieldContent('content'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex-grow-1"></div>

        <!-- Start Footer Area -->
        <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- End Footer Area -->
    </div>
</div>

<?php echo $__env->make('partials.theme_settings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>


<?php /**PATH /opt/lampp/htdocs/training_gate/resources/views/layouts/app1.blade.php ENDPATH**/ ?>