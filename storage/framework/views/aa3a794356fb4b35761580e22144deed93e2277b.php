<?php $__env->startSection('title', $viewData['title']); ?>
<?php $__env->startSection('content'); ?>
    <div class="card mb-4">
        <div class="card-header">
            Agregar Pedido
        </div>
        <div class="card-body">
            <?php if($errors->any()): ?>
                <ul class="alert alert-danger list-unstyled">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li> - <?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endif; ?>
            <form method="POST" action="<?php echo e(route('admin.order.store')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Total:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="total" value="<?php echo e(old('total')); ?>" type="number" class="form-control">
                            </div>
                        </div>
                <div class="mb-3">
                    <label class="form-label">Usuario</label>
                    <input name="user_id" value="<?php echo e(old('user_id')); ?>" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Estado</label>
                    <input name="paid" value="<?php echo e(old('paid')); ?>" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Dirección de envio</label>
                    <input name="address" value="<?php echo e(old('address')); ?>" type="text" class="form-control">
                </div>
                <select class="form-select mb-4" name="status" value="<?php echo e(old('status')); ?>" aria-label="Default select example" required>
                    <option selected>Estado de envio...</option>
                    <option value="Preparando Pedido">Preparando Pedido</option>
                    <option value="Enviado">Enviado</option>
                </select>

                <button type="submit" class="btn btn-black">Confirmar</button>
        </div>
        </form>
    </div>

    <div class="card">
        <div class="card-header">
            Pedidos Pagados
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Total</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Envio</th>
                        <th scope="col">Modificar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $viewData['pagados']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($product->getId()); ?></td>
                            <td><?php echo e($product->getTotal()); ?></td>
                            <td><?php echo e($product->getUserId()); ?></td>
                            <td><?php echo e($product->getState()); ?></td>
                            <td><?php echo e($product->getAddress()); ?></td>
                            <td><?php echo e($product->getEstado()); ?></td>
                            <td>
                                <a class="btn btn-black"
                                    href="<?php echo e(route('admin.order.edit', ['id' => $product->getId()])); ?>">
                                    <i class="bi-pencil"></i>
                                </a>
                            </td>
                            <td>
                                <form action="<?php echo e(route('admin.order.delete', $product->getId())); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger">
                                        <i class="bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Administrar productos
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Total</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Envio</th>
                        <th scope="col">Modificar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $viewData['products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($product->getId()); ?></td>
                            <td><?php echo e($product->getTotal()); ?></td>
                            <td><?php echo e($product->getUserId()); ?></td>
                            <td><?php echo e($product->getState()); ?></td>
                            <td><?php echo e($product->getAddress()); ?></td>
                            <td><?php echo e($product->getEstado()); ?></td>
                            <td>
                                <a class="btn btn-black"
                                    href="<?php echo e(route('admin.order.edit', ['id' => $product->getId()])); ?>">
                                    <i class="bi-pencil"></i>
                                </a>
                            </td>
                            <td>
                                <form action="<?php echo e(route('admin.order.delete', $product->getId())); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger">
                                        <i class="bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Arthu\Documents\Marktech\Marktech2\resources\views/admin/order/index.blade.php ENDPATH**/ ?>