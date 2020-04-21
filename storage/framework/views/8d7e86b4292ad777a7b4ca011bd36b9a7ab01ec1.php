<?php $__env->startSection('title', __('Not Found')); ?>
<?php $__env->startSection('code', '404'); ?>

<?php $__env->startSection('Contenido'); ?>
    <div class="row">
        <div class="col-6">
            <h3 class="Helvetica font-weight-bold">No hemos encontrado la página que buscas. Navega usando el menú superior.</h3>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('message', __('Not Found')); ?>
<?php echo $__env->make('Pagina Maestra.PaginaMaestraPrincipal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProyectoPVIT\resources\views/errors/404.blade.php ENDPATH**/ ?>