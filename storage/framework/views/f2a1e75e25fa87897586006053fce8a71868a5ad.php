<?php $__env->startSection('content'); ?>
    <div class="row">
        <?php $__currentLoopData = $viewData['banner_mac']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 col-lg-3 mb-2">
                <div class="card">
                    <a href="<?php echo e(route('product.show', ['id' => $product->getId()])); ?>">
                        <img src="<?php echo e(asset('/img/products/' . $product->getImage())); ?>" class="card-img-top img-card">
                    </a>
                    <div class="card-body text-center">
                        <a><?php echo e($product->getName()); ?>

                        </a>
                        <p></p>
                        <a>
                            <?php if($product->getPrice() == 0): ?>
                                <span><strong class="text-danger">Gratis</strong></span>
                            <?php elseif( $product->getDiscountedprice() > 0): ?>
                            <strong class="text-danger text-decoration-line-through">$<?php echo e($product->getPrice()); ?></strong>
                            <strong class="text-danger">$<?php echo e($product->getPrice() - $product->getDiscountedprice()); ?></strong>
                            <?php else: ?>
                            <strong class="text-danger">$<?php echo e($product->getPrice()); ?></strong>
                            <?php endif; ?>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Arthu\Documents\Marktech\Marktech2\resources\views/banner/mac.blade.php ENDPATH**/ ?>