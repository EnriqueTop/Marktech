<?php $__env->startSection('content'); ?>

<?php $__env->startSection('title', 'Marktech - Carrito'); ?>
<div class="card">
    <div class="card-body">
        <table class="table table-borderless table-striped text-center">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Código de Producto</th>
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
                        
                        
                        <td><?php echo e($product->getPrice()); ?></td>
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
                <a><b>Total:</b> $<?php echo e($viewData['total']); ?></a>
                
                <br><br />
                <?php if(count($viewData['products']) > 0 && !Auth::guest()): ?>
                    <a href="<?php echo e(route('cart.address')); ?>">
                        <button class="btn btn-black mb-2">
                            Realizar pedido
                        </button>
                    </a>
                    <a href="<?php echo e(route('cart.delete')); ?>">
                        <button class="btn btn-danger mb-2">
                            Eliminar articulos
                        </button>
                    </a>
                <?php elseif(count($viewData['products']) > 0): ?>
                    <a href="/IniciarSesion">
                        <button class="btn btn-black mb-2">
                            Iniciar Sesión
                        </button>
                    </a>
                    <a href="<?php echo e(route('cart.delete')); ?>">
                        <button class="btn btn-danger mb-2">
                            Eliminar articulos
                        </button>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Arthu\Documents\Marktech\Marktech2\resources\views/cart/index.blade.php ENDPATH**/ ?>