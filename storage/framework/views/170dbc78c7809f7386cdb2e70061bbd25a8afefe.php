<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="<?php echo $__env->yieldContent('title'); ?>">
    <meta name="description" content="<?php echo $__env->yieldContent('title'); ?>">
    <meta name="description" content="<?php echo $__env->yieldContent('descirtion'); ?>">
    <meta name="keywords" content="<?php echo $__env->yieldContent('Keywords'); ?>">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link href="<?php echo e(asset('assets')); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('assets')); ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('assets')); ?>/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo e(asset('assets')); ?>/css/price-range.css" rel="stylesheet">
    <link href="<?php echo e(asset('assets')); ?>/css/animate.css" rel="stylesheet">
    <link href="<?php echo e(asset('assets')); ?>/css/main.css" rel="stylesheet">
    <link href="<?php echo e(asset('assets')); ?>/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?php echo e(asset('assets')); ?>/js/html5shiv.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?php echo e(asset('assets')); ?>images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo e(asset('assets')); ?>/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo e(asset('assets')); ?>/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo e(asset('assets')); ?>/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo e(asset('assets')); ?>/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<?php echo $__env->make('home._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('home._slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->yieldSection(); ?>

<?php echo $__env->make('home._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH /Users/demir/Desktop/LaravelProject/eticaret2/resources/views/layouts/home.blade.php ENDPATH**/ ?>