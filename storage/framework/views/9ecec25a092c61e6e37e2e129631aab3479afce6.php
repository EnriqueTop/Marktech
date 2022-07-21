<?php $__env->startSection('title', $viewData['title']); ?>
<?php $__env->startSection('content'); ?>
    <div class="card mb-4">
        <div class="card-header">
            Agregar Usuario
        </div>
        <div class="card-body">
            <?php if($errors->any()): ?>
                <ul class="alert alert-danger list-unstyled">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li> - <?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endif; ?>
            <form method="POST" action="<?php echo e(route('admin.user.store')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nombre:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="name" value="<?php echo e(old('name')); ?>" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Correo Electronico:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="email" value="<?php echo e(old('email')); ?>" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Contraseña:</label>
                    <input name="password" value="<?php echo e(old('password')); ?>" type="text" class="form-control">
                </div>
                <select class="form-select mb-4" name="role" value="<?php echo e(old('role')); ?>" aria-label="Default select example" required>
                    <option selected>Tipo de usuario...</option>
                    <option value="client">Cliente</option>
                    <option value="admin">Administrador</option>
                </select>
                <button type="submit" class="btn btn-black">Confirmar</button>
        </div>
        </form>
    </div>

    <div class="card">
        <div class="card-header">
            Administrar usuarios
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Contraseña(Encriptada)</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Modificar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $viewData['products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($product->getId()); ?></td>
                            <td><?php echo e($product->getName()); ?></td>
                            <td><?php echo e($product->getEmail()); ?></td>
                            <td><?php echo e($product->getPassword()); ?></td>
                            <td><?php echo e($product->getRole()); ?></td>
                            <td>
                                <a class="btn btn-black"
                                    href="<?php echo e(route('admin.user.edit', ['id' => $product->getId()])); ?>">
                                    <i class="bi-pencil"></i>
                                </a>
                            </td>
                            <td>
                                <form action="<?php echo e(route('admin.user.delete', $product->getId())); ?>" method="POST">
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Arthu\Documents\Marktech\Marktech2\resources\views/admin/user/index.blade.php ENDPATH**/ ?>