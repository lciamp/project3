<?php $__env->startSection('content'); ?>
        <h1>Lou Ciampanelli</h1>

        <h2>git commands</h2>

        <?php if ( ! (empty($test['git']))): ?>

            <?php foreach($test['git'] as $command): ?>

                <li id='git_<?php echo e($command); ?>'>git <?php echo e($command); ?></li>

                <?php
                echo key($test);
                ?>

            <?php endforeach; ?>

        <?php endif; ?>

        <h2>laravel 5.2</h2>

        <?php if ( ! (empty($test['laravel']))): ?>

            <?php foreach($test['laravel'] as $command): ?>

                <li id='laravel_<?php echo e($command); ?>'><?php echo e($command); ?></li>

                <?php
                echo key($test);
                ?>
            <?php endforeach; ?>

        <?php endif; ?>

        <h2>blade</h2>

        <?php if ( ! (empty($test['blade']))): ?>

            <?php foreach($test['blade'] as $command): ?>

                <li id='blade_<?php echo e($command); ?>'><?php echo e($command); ?></li>

            <?php endforeach; ?>

        <?php endif; ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>