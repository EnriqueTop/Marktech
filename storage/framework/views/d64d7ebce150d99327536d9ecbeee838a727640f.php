<?php $__env->startSection('content'); ?>

<?php $__env->startSection('title', 'Marktech - Dirección'); ?>

<h5 class="text-center"><strong>Productos:</strong></h5>

<form action="/datos" method="POST">

<div class="card">
    <div class="card-body">
        <?php echo csrf_field(); ?>
        <table class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Codigo de Producto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Descuento</th>
                    <th scope="col">Cantidad</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $viewData['products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($product->getName()); ?></td>
                        <td><?php echo e($product->getId()); ?></td>
                        <td>$<?php echo e($product->getPrice() - $product->getDiscountedprice()); ?></td>
                        <?php if([ $product->getDiscountedprice() ] > 0): ?>
                        <td class="text-decoration-line-through">-<?php echo e($product->getDiscountedprice()); ?></td>
                        <?php else: ?>
                        <td></td>
                        <?php endif; ?>
                        <td><?php echo e(session('products')[$product->getId()]); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="row">
            <div class="text-end">

            </div>
        </div>
    </div>
</div>

<br>

    <select class="form-select mb-4" name="address" aria-label="Default select example" required>
        <option selected>Escoge la dirección...</option>
        <?php $__currentLoopData = $addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dir): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($dir->calle); ?> <?php echo e($dir->exterior); ?>, <?php echo e($dir->colonia); ?>, <?php echo e($dir->municipio); ?>, <?php echo e($dir->estado); ?>"><?php echo e($dir->calle); ?> <?php echo e($dir->exterior); ?>, <?php echo e($dir->colonia); ?>, <?php echo e($dir->municipio); ?>, <?php echo e($dir->estado); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <a href="/direcciones" class="btn btn-black mb-4">Agregar una dirección</a>


    <div class="col-md-4 mb-4">
        <div class="card mb-4">
            <div class="card-header py-3">
                <h5 class="mb-0"><strong>Resumen</strong></h5>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li
                        class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                        Productos
                        <span><?php echo e($viewData['total']); ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        Envio
                        <span>Gratis</span>
                    </li>
                    <li
                        class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                        <div>
                            <strong>Total</strong>

                            <p class="mb-0">(Incluyendo IVA)</p>

                        </div>
                        <span><strong><?php echo e($viewData['total']); ?></strong></span>
                    </li>
                </ul>

                <?php if(count($viewData['products']) > 0): ?>
                    <button type="submit" button class="btn btn-black mb-2">Pagar</button>
                <?php endif; ?>

</form>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Arthu\Documents\Marktech\Marktech2\resources\views/cart/address.blade.php ENDPATH**/ ?>