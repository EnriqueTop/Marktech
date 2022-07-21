<?php $__env->startSection('content'); ?>
<br>

    <!--Carrusel-->
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"><span></span></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"><span></span></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"><span></span></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"><span></span></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                    aria-label="Slide 5"><span></span></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="<?php echo e(route('banner.nvidia')); ?>">
                        <img src="<?php echo asset('img/banner-nvidia.jpg'); ?>" class="d-block w-100">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="<?php echo e(route('banner.adata')); ?>">
                        <img src="<?php echo asset('img/banner-adata.jpg'); ?>" href="/card" class="d-block w-100">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="<?php echo e(route('banner.mac')); ?>">
                        <img src="<?php echo asset('img/banner-mac.jpg'); ?>" href="/card" class="d-block w-100">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="<?php echo e(route('banner.toshiba')); ?>">
                        <img src="<?php echo asset('img/banner-toshiba.jpg'); ?>" href="/card" class="d-block w-100">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="<?php echo e(route('banner.lg')); ?>">
                        <img src="<?php echo asset('img/banner-lg.jpg'); ?>" href="/card" class="d-block w-100">
                    </a>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>

            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>

        </div>

    </div>

    <!--Carrusel-->

    <br>

    <!--Products featured-->

    <div class="container-sm">
        <div class="p-3 border bg-light text-center fs-4"><strong>Productos Destacados</strong></div>
    </div>
    <br>
    <div class="row">
        <?php $__currentLoopData = $viewData['products_featured']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 mb-3 d-flex align-items-stretch">
                <div class="card">
                    <a href="<?php echo e(route('product.show', ['id' => $product->getId()])); ?>">
                        <img src="<?php echo e(asset('/img/products/' . $product->getImage())); ?>" class="card-img-top img-card d-inline"
                            style="height:20em;">
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

    <!--trademarks-->

    <div class="container-sm">
        <div class="p-3 border bg-light text-center fs-4"><strong>¡Las mejores marcas!</strong></div>
    </div>
    <br>
    <div class="row">
        <div class="col" style="width: 10rem;">
            <a href="<?php echo e(route('trademark.dell')); ?>">
                <img src="<?php echo asset('img/carrousel/dell.png'); ?>" class="img-fluid" alt="...">
            </a>
        </div>
        <div class="col" style="width: 10rem;">
            <a href="<?php echo e(route('trademark.gigabyte')); ?>">
                <img src="<?php echo asset('img/carrousel/gygabyte.png'); ?>" class="img-fluid" alt="...">
            </a>
        </div>
        <div class="col" style="width: 10rem;">
            <a href="<?php echo e(route('trademark.nvidia')); ?>">
                <img src="<?php echo asset('img/carrousel/nvidia.png'); ?>" class="img-fluid" alt="...">
            </a>
        </div>
        <div class="col" style="width: 10rem;">
            <a href="<?php echo e(route('trademark.hp')); ?>">
                <img src="<?php echo asset('img/carrousel/hp.png'); ?>" class="img-fluid" alt="...">
            </a>
        </div>
    </div>
<br>
    <!--New Products-->

    <div class="container-sm">
        <div class="p-3 border bg-light text-center fs-4"><strong>Nuevos Productos</strong></div>
    </div>
    <br>
    <div class="row">
        <?php $__currentLoopData = $viewData['products_new']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 mb-3 d-flex align-items-stretch">
                <div class="card">
                    <a href="<?php echo e(route('product.show', ['id' => $product->getId()])); ?>">
                        <img src="<?php echo e(asset('/img/products/' . $product->getImage())); ?>" class="card-img-top img-card"
                            style="height:20em; width:20em;">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Arthu\Documents\Marktech\Marktech2\resources\views/product/index.blade.php ENDPATH**/ ?>