<?php switch($Departamento):
    case ("AE"): ?>
        <?php 
            $Parrafo1 = "Párrafo 1 de AE";

            $Parrafo2 = "Párrafo 2 de AE";

            

            $Banner = "BannerAE.";
        ?>
    <?php break; ?>
    <?php case ("BIOMASA"): ?>
        <?php 
            $Parrafo1 = "Párrafo 1 de BIOMASA";

            $Parrafo2 = "Párrafo 2 de BIOMASA";

            $Banner = "BannerBIOMASA.";
        ?>
    <?php break; ?>
    <?php case ("EAUT"): ?>
        <?php 
            $Parrafo1 = "Párrafo 1 de EAUT";

            $Parrafo2 = "Párrafo 2 de EAUT";

            $Banner = "BannerEAUT.";
        ?>
    <?php break; ?>
    <?php case ("PVIT"): ?>
        <?php 
            $Parrafo1 = "Párrafo 1 del PVIT";

            $Parrafo2 = "Párrafo 2 del PVIT";
            
            $Banner = "BannerPVIT.";
        ?>
    <?php break; ?>
<?php endswitch; ?>

<div class="row">
    <div class="col-12 px-0">
    
        <img src="<?php echo e(asset('../resources/Imagenes/Nosotros/Banners/'.$Banner.'svg')); ?>" alt="Imagen de Nosotros" class="img-fluid">
    </div>
</div>

<div class="row">
    <div class="col-12 col-lg-6 pt-5 pt-lg-7">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-9 text-center">
                <h1 class="Helvetica font-weight-bold" style="font-size: 3.5rem;">Nuestros servicios</h1>
            </div>
        </div>               
        <div class="row justify-content-center">
            <div class="col-3 col-sm-2 col-xl-3 py-1 mr-0 w-100 bg-blue">                    
            </div>
            <div class="col-7 col-sm-6 col-xl-6 py-1 w-100 bg-lightblue">
            </div>
        </div>
        <div class="row justify-content-center pt-4 pb-5">
            <div class="col-9 col-sm-7 col-xl-8">
                <p class="Helvetica font-weight-normal text-blue">
                    <?php echo e($Parrafo1); ?>

                </p>
                <p class="Helvetica font-weight-normal text-blue">
                    <?php echo e($Parrafo2); ?>

                </p>
            </div>
        </div>
    </div>
<?php /**PATH C:\xampp\htdocs\ProyectoPVIT\resources\views/Vista parcial/Servicios1.blade.php ENDPATH**/ ?>