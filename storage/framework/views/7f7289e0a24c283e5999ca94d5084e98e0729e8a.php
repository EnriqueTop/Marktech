<?php $__env->startSection('title', $viewData['title']); ?>
<?php $__env->startSection('subtitle', $viewData['subtitle']); ?>
<?php $__env->startSection('content'); ?>
    <?php $__empty_1 = true; $__currentLoopData = $viewData["orders"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="card mb-4">
            <div class="card-header">
                <strong class="text-success"><?php echo e($order->getCreatedAt()); ?></strong>

            </div>
            <div class="card-body">
                <b>Número de Orden:</b> <?php echo e($order->getId()); ?><br>
                <b>Total:</b> $<?php echo e($order->getTotal()); ?><br />
                <?php if($order->getState() == 'No Pagado'): ?>
                    <b>Estado:</b> <span class="text-warning"><?php echo e($order->getState()); ?></span><br />
                <?php elseif($order->getState() == 'Pagado'): ?>
                    <b>Estado:</b> <span class="text-success"><?php echo e($order->getState()); ?></span><br />
                <?php endif; ?>
                <?php if($order->getEstado() == 'Preparando Pedido'): ?>
                <b>Estado de envio:</b> <span class="text-warning"><?php echo e($order->getEstado()); ?></span><br />
                <?php elseif($order->getEstado() == 'Enviado'): ?>
                <b>Estado de envio:</b> <span class="text-success"><?php echo e($order->getEstado()); ?></span><br />
                <?php endif; ?>

                <table class="table table-borderless table-striped text-center mt-3">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Id único</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Cantidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $order->getItems(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <a class="link-success"
                                        href="<?php echo e(route('product.show', ['id' => $item->getProduct()->getId()])); ?>">
                                        <?php echo e($item->getProduct()->getName()); ?>

                                    </a>
                                </td>
                                <td><?php echo e($item->getId()); ?></td>
                                <td>$<?php echo e($item->getPrice()); ?></td>
                                <td><?php echo e($item->getQuantity()); ?></td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="alert alert-danger" role="alert">
            No has realizado ningun pedido.
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Arthu\Documents\Marktech\Marktech2\resources\views/myaccount/orders.blade.php ENDPATH**/ ?>