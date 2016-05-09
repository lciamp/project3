<?php $__env->startSection('content'); ?>
        <h1>Lou Ciampanelli</h1>

        <h2>git commands</h2>

    <?php if ( ! (empty($gitCommands))): ?>

        <?php foreach($gitCommands as $command): ?>

            <li id='git_<?php echo e($command); ?>'>git <?php echo e($command); ?></li>

        <?php endforeach; ?>

    <?php endif; ?>

        <h2>directions</h2>

    <?php if ( ! (empty($directions))): ?>

        <?php foreach($directions as $command): ?>

            <li id='<?php echo e($command); ?>'><?php echo e($command); ?></li>

        <?php endforeach; ?>

    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>