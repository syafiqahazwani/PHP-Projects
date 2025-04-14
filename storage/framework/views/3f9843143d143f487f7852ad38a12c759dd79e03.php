<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('Backend')); ?>/assets/images/favicon.png">
    <title>Adminmart Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="<?php echo e(asset('Backend')); ?>/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('Backend')); ?>/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('Backend')); ?>/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="<?php echo e(asset('Backend')); ?>/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

    <?php echo $__env->make('Backend.Body.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('Backend.Body.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('Backend.Body.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo e(asset('Backend')); ?>/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo e(asset('Backend')); ?>/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo e(asset('Backend')); ?>/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="<?php echo e(asset('Backend')); ?>/dist/js/app-style-switcher.js"></script>
    <script src="<?php echo e(asset('Backend')); ?>/dist/js/feather.min.js"></script>
    <script src="<?php echo e(asset('Backend')); ?>/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo e(asset('Backend')); ?>/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo e(asset('Backend')); ?>/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="<?php echo e(asset('Backend')); ?>/assets/extra-libs/c3/d3.min.js"></script>
    <script src="<?php echo e(asset('Backend')); ?>/assets/extra-libs/c3/c3.min.js"></script>
    <script src="<?php echo e(asset('Backend')); ?>/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="<?php echo e(asset('Backend')); ?>/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?php echo e(asset('Backend')); ?>/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo e(asset('Backend')); ?>/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo e(asset('Backend')); ?>/dist/js/pages/dashboards/dashboard1.min.js"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\Exploredia_Web\resources\views/Backend/Body/master_page.blade.php ENDPATH**/ ?>