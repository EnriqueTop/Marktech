<?php $__env->startSection('title', $viewData['title']); ?>
<?php $__env->startSection('content'); ?>
    <div class="card mb-4">
        <div class="card-header">
            Agregar productos
        </div>
        <div class="card-body">
            <?php if($errors->any()): ?>
                <ul class="alert alert-danger list-unstyled">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li> - <?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endif; ?>
            <form method="POST" action="<?php echo e(route('admin.product.store')); ?>" enctype="multipart/form-data">
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
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Precio:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="price" value="<?php echo e(old('price')); ?>" type="number" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Imagen:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input class="form-control" type="file" name="image">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        &nbsp;
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Cant. de Descuento</label>
                    <input name="discounted_price" value="<?php echo e(old('discounted_price')); ?>" type="number" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Descripción</label>
                    <textarea class="form-control" name="description" rows="3"><?php echo e(old('description')); ?></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Marca</label>
                    <input name="trademark" value="<?php echo e(old('trademark')); ?>" type="text" class="form-control" style="text-transform:lowercase">
                </div>
                <h5>Categoria</h5>
                <select class="form-select mb-4" name="category" value="<?php echo e(old('category')); ?>" aria-label="Default select example" required>
                    <option value="hardware" selected>Hardware</option>
                    <option value="accesorios">Accesorios</option>
                    <option value="computadoras">Computadoras</option>
                    <option value="electronica">Electronica</option>
                </select>
                <h5>SubCategoria</h5>
                <select class="form-select mb-4" name="subcategory" value="<?php echo e(old('subcategory')); ?>" aria-label="Default select example" required>
                    <option value="procesadores" selected>Hardware - Procesadores</option>
                    <option value="gabinetes">Hardware - Gabinetes</option>
                    <option value="gpu">Hardware - Targetas de video</option>
                    <option value="ram">Hardware - Memorias RAM</option>
                    <option value="disipadores">Hardware - Disipadores</option>
                    <option value="ssd">Hardware - SSD</option>
                    <option value="hdd">Hardware - Discos Duros</option>
                    <option value="usb">Hardware - USB/SD</option>
                    <option value="motherboard">Hardware - Targetas Madre</option>
                    <option value="audifonos">Accesorios - Audifonos</option>
                    <option value="alfombrillas">Accesorios - Alfombrillas</option>
                    <option value="mouse">Accesorios - Mouse</option>
                    <option value="teclados">Accesorios - Teclados</option>
                    <option value="laptop">Computadoras - Laptop</option>
                    <option value="escritorio">Computadoras - Escritorio</option>
                    <option value="consolas">Electronica - Consolas</option>
                    <option value="tv">Electronica - Televisores</option>
                    <option value="monitores">Electronica - Monitores</option>
                    <option value="bocinas">Electronica - Bocinas</option>
                    <option value="camaras">Electronica - Cámaras</option>
                    <option value="telefonos">Electronica - Telefonos</option>
                </select>
                <h5>¿Destacado?</h5>
                <select class="form-select mb-4" name="featured" value="<?php echo e(old('featured')); ?>" aria-label="Default select example" required>
                    <option value="0" selected>No</option>
                    <option value="1">Si</option>
                </select>
                <button type="submit" class="btn btn-black">Confirmar</button>
        </div>
        </form>
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
                        <th scope="col">Nombre</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Subcategoria</th>
                        <th scope="col">¿Destacado?</th>
                        <th scope="col">Modificar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $viewData['products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($product->getId()); ?></td>
                            <td><?php echo e($product->getName()); ?></td>
                            <td><?php echo e($product->getTrademark()); ?></td>
                            <td><?php echo e($product->getPrice()); ?></td>
                            <td><?php echo e($product->getCategory()); ?></td>
                            <td><?php echo e($product->getSubcategory()); ?></td>
                            <td><?php echo e($product->getFeatured()); ?></td>
                            <td>
                                <a class="btn btn-black"
                                    href="<?php echo e(route('admin.product.edit', ['id' => $product->getId()])); ?>">
                                    <i class="bi-pencil"></i>
                                </a>
                            </td>
                            <td>
                                <form action="<?php echo e(route('admin.product.delete', $product->getId())); ?>" method="POST">
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Arthu\Documents\Marktech\Marktech2\resources\views/admin/product/index.blade.php ENDPATH**/ ?>