<?php $__env->startSection('title', $viewData['title']); ?>
<?php $__env->startSection('subtitle', $viewData['subtitle']); ?>
<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            Compra Completa
        </div>

        <div class="card-body">
            <div class="alert alert-success" role="alert">
                Tu número de orden es: <b>#<?php echo e($viewData['order']->getId()); ?></b>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Arthu\Documents\Marktech\Marktech2\resources\views/cart/postpurchase.blade.php ENDPATH**/ ?>