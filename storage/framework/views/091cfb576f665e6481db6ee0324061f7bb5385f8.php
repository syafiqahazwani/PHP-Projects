<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Foodeiblog Template">
    <meta name="keywords" content="Foodeiblog, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('Backend')); ?>/assets/images/favicon.png">
    <title> <?php echo $__env->yieldContent('title'); ?> </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Unna:400,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('Frontend')); ?>/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('Frontend')); ?>/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('Frontend')); ?>/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('Frontend')); ?>/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('Frontend')); ?>/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('Frontend')); ?>/css/style.css" type="text/css">
</head>

<body>

    <?php echo $__env->make('Frontend.Body.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('Frontend.Body.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Js Plugins -->
    <script src="<?php echo e(asset('Frontend')); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo e(asset('Frontend')); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo e(asset('Frontend')); ?>/js/jquery.slicknav.js"></script>
    <script src="<?php echo e(asset('Frontend')); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo e(asset('Frontend')); ?>/js/main.js"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\Exploredia_Web\resources\views/Frontend/Body/master.blade.php ENDPATH**/ ?>