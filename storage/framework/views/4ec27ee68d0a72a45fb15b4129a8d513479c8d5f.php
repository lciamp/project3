<?php $__env->startSection('content'); ?>

    <h1>Lou Ciampanelli</h1>

    <!-- loop through the associated array -->
    <?php if ( ! (empty($keys))): ?>

        <?php foreach($keys as $key): ?>

            <h2><?php echo e($key); ?></h2>

            <?php if ( ! (empty($test[$key]))): ?>

                <?php foreach($test[$key] as $command): ?>

                    <li id='<?php echo e($key); ?>_<?php echo e($command); ?>'><?php echo e($key); ?> <?php echo e($command); ?></li>

                <?php endforeach; ?>

            <?php endif; ?>

        <?php endforeach; ?>

    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>