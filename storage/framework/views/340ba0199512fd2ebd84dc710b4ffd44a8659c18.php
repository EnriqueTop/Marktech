<?php $__env->startSection('content'); ?>

<?php $__env->startSection('title', 'Formulario'); ?>

<h1>Envia tu opinión:</h1>
<form action=<?php echo e(route('contact')); ?> method="POST">
    <?php echo e(csrf_field()); ?>


    <div class="form-group">
        <label for="name">*Correo:</label>
        <input type="email" name="name" type="text" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="name">*Mensaje:</label>
        <input name="msg" type="text" class="form-control" required>
    </div>

    <div class="form-group">
        <button type="submit" id='btn-contact' class="btn">Enviar</button>
    </div>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/artur/Downloads/marktech/resources/views/form.blade.php ENDPATH**/ ?>