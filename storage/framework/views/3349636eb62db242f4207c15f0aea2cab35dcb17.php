<?php $__env->startSection('content'); ?>
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="<?php echo e(asset('/img/products/' . $viewData['product']->getImage())); ?>" class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo e($viewData['product']->getName()); ?> <br><br>
                        Precio: <strong><?php if($viewData['product']->getPrice() == 0): ?>
                                <span>Gratis</span>
                            <?php elseif($viewData['product']->getDiscountedprice() > 0): ?>
                                <strong class="text-decoration-line-through">$<?php echo e($viewData['product']->getPrice()); ?></strong>
                                <strong>$<?php echo e($viewData['product']->getPrice() - $viewData['product']->getDiscountedprice()); ?></strong>
                            <?php else: ?>
                                <strong>$<?php echo e($viewData['product']->getPrice()); ?></strong>
                            <?php endif; ?>
                        </strong>
                        
                    </h5>
                    <br>
                    <p class="card-text"><?php echo e($viewData['product']->getDescription()); ?></p>
                    <p class="card-text">Categoria: <strong><?php echo e($viewData['product']->getCategory()); ?></strong></p>

                    <p class="card-text">
                    <form method="POST" action="<?php echo e(route('cart.add', ['id' => $viewData['product']->getId()])); ?>">
                        <div class="row">
                            <?php echo csrf_field(); ?>
                            <div class="col-auto">
                                <div class="input-group col-auto">
                                    <div class="input-group-text">Cantidad:</div>
                                    <input type="number" min="1" max="10" class="form-control quantity-input"
                                        name="quantity" value="1">
                                </div>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-black text-white" type="submit">Añadir al carrito</button>

                            </div>
                        </div>


                        </p>

                </div>
            </div>
            <br>
            <table class="table table-bordered fs-6">
                <thead>
                  <tr>
                    <th scope="col" colspan="2" class="text-center">Detalles</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><strong>Marca:</strong></td>
                    <td><?php echo e($viewData['product']->getTrademark()); ?></td>
                  </tr>
                  <tr>
                    <td><strong>Tipo:</strong></td>
                    <td><?php echo e($viewData['product']->getSubcategory()); ?></td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Arthu\Documents\Marktech\Marktech2\resources\views/product/show.blade.php ENDPATH**/ ?>