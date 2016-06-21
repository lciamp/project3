<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--
    <link href='https://fonts.googleapis.com/css?family=Quicksand:200' rel='stylesheet' type='text/css'>
    -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <script src="https://use.fontawesome.com/8d143cdcc9.js"></script>
    <link rel="stylesheet" href="<?php echo e(elixir('css/app.css')); ?>">
    <?php echo $__env->yieldContent('additional-scripts'); ?>
    <title><?php echo e($title); ?></title>
</head>
<body>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->yieldContent('script'); ?>

</body>

</html>