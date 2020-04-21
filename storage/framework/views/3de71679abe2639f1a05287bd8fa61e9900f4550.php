<div class="row">
    <div class="col-12 px-0 mx-0">
    
        <img src="<?php echo e(asset('../resources/Imagenes/Nosotros/Banners/'.$Banner.'svg')); ?>" alt="Imagen de Nosotros" class="img-fluid">
    </div>
</div>

<div class="container-xl">
    <div class="row py-4">
        <div class="col-12 text-center text-blue">
            <h3 class="helvetica font-weight-bold">¿QUÉ ES <?php echo e($Departamento); ?>?</h3>
            <br>
            
            <?php $__currentLoopData = $Texto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Parrafo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p class="helvetica font-weight-normal text-justify"><?php echo e($Parrafo); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\ProyectoPVIT\resources\views/Vista parcial/Nosotros1.blade.php ENDPATH**/ ?>