<?php switch($Departamento):
    case ("AE"): ?>
        <?php 
            $Banner = "BannerAE.";
        ?>
    <?php break; ?>
    <?php case ("BIOMASA"): ?>
        <?php 
            $Banner = "BannerBIOMASA.";
        ?>
    <?php break; ?>
    <?php case ("EAUT"): ?>
        <?php 
            $Banner = "BannerEAUT.";
        ?>
    <?php break; ?>
<?php endswitch; ?>

<div class="row">
    <div class="col-12 px-0">
    
        <img src="<?php echo e(asset('Imagenes/Nosotros/Banners/'.$Banner.'svg')); ?>" alt="Imagen de Nosotros" class="img-fluid">
    </div>
</div>

<div class="row">
    <div class="col-12 pt-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center wow bounceIn">
                <h1 class="Helvetica font-weight-bold text-blue">Nuestros servicios</h1>
            </div>
        </div>               
        <div class="row justify-content-center">
            <div class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 py-1 mr-0 w-100 bg-blue">                    
            </div>
            <div class="col-7 col-sm-4 col-md-3 col-lg-2 col-xl-2 py-1 w-100 bg-lightblue">
            </div>
        </div>
    </div>
</div>

<?php $__env->startSection('Scripts'); ?>
    ##parent-placeholder-381e3298b2b8f6caeb2208b57d805ada38402f0b##
    <script>
        new WOW().init();
    </script>
<?php $__env->stopSection(); ?><?php /**PATH C:\xampp\htdocs\ProyectoPVIT\ProyectoPVIT\resources\views/Vista parcial/Servicios1.blade.php ENDPATH**/ ?>