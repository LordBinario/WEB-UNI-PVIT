<?php switch($Departamento):
    case ("PVIT"): ?>
        <?php 
            $Banner = "BannerPVIT.";

            $Texto = "Texto para coordinadores del PVIT";
        ?>
    <?php break; ?>
    <?php case ("BIOMASA"): ?>
        <?php 
            $Banner = "BannerBIOMASA.";

            $Texto = "Texto para coordinadores de BIOMASA";
        ?>
    <?php break; ?>
    <?php case ("RedE"): ?>
        <?php 
            $Banner = "BannerRedE.";

            $Texto = "Texto para coordinadores de la Red de Emprendedores";
        ?>
    <?php break; ?>
    <?php case ("EAUT"): ?>
        <?php 
            $Banner ="BannerEAUT.";

            $Texto = "Texto para coordinadores del EAUT";
        ?>
    <?php break; ?>
    <?php case ("AE"): ?>
        <?php 
            $Banner = "BannerAE.";

            $Texto = "Texto para coordinadores de Atención Empresarial";
        ?>
    <?php break; ?>
    <?php default: ?>
        <?php 
            $Banner = "";

            $Texto = "No hemos encontrado la página que buscas. Navega usando el menú superior.";
        ?>
<?php endswitch; ?>
<div class="row">
    <div class="col-12 px-0">
        <img src="<?php echo e(asset('../resources/Imagenes/Nosotros/Banners/'.$Banner.'svg')); ?>" alt="Imagen de Coordinadores" class="Img-fluid">
    </div>
</div>

<?php if(empty($NoVacio)): ?>
    <div class="container">
        <div class="row justify-content-center pt-5 pb-0">
            <div class="col-12 text-center">
                <p class="helvetica font-weight-normal text-blue">
                    <?php echo e($Texto); ?>

                </p>
            </div>
        </div>
    </div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\ProyectoPVIT\resources\views/Vista parcial/BannerCoordinadoresTexto.blade.php ENDPATH**/ ?>