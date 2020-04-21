<?php
    $i = 0;
    $j = 0;
    /*P-VIT*/
    $CoordinadorDepto[0] = "Director Msc. Ing. Leonardo Chavarría Carrión";

    $FotoCoordinador[0] = "CoordinadorPVIT";                    

    $TelefonoCoordinador[0] = "+505 8872-9608";

    $CorreoCoordinadorD[0] = "leoant@pvit.uni.edu.ni";

    $CorreoCoordinadorD[1] = "leoant71@yahoo.com";

    $CorreoCoordinadorD[2] = "pvit@portal.uni.edu.ni";

    $Cargo[0] = "Director";

    $Depto[0] = "P-VIT";
    
    /*AE*/
    $CoordinadorDepto[1] = "MBA. Ing. Karla Julissa Quiñonez Rojas";
    
    $TelefonoCoordinador[1] = "+505 8465-9191";

    $CorreoCoordinadorD[3] = "karla.quinonez@pvit.uni.edu.ni";

    $FotoCoordinador[1] = "CoordinadorAE";

    $Cargo[1] = "Coordinador AE";

    $Depto[1] = "AE";

    /*EAUT*/
    $CoordinadorDepto[2] = "Msc. Ing. Wilfredo Varela Fonseca";
    
    $TelefonoCoordinador[2] = "+505 7535-9817";

    $CorreoCoordinadorD[4] = "wilfredo.varela@pvit.uni.edu.ni";

    $CorreoCoordinadorD[5] = "wvarelafonseca@gmail.com";

    $FotoCoordinador[2] = "CoordinadorEAUT";

    $Cargo[2] = "Coordinador EAUT";

    $Depto[2] = "EAUT";

    /*BIOMASA*/
    $CoordinadorDepto[3] = "Msc. Ing. Dionisio Vidal Cáceres";
    
    $TelefonoCoordinador[3] = "+505 8887-4573";

    $CorreoCoordinadorD[6] = "vidal.caceres@pvit.uni.edu.ni";

    $CorreoCoordinadorD[7] = "vidacla62@yahoo.com";

    $FotoCoordinador[3] = "CoordinadorBIOMASA";

    $Cargo[3] = "Coordinador BIOMASA";

    $Depto[3] = "BIOMASA";
?>

<?php $__env->startSection('Contenido'); ?>
    <?php echo $__env->make('Vista parcial.BannerCoordinadoresTexto', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container-fluid">           
        <div class="row justify-content-center py-5 d-block d-sm-none d-lg-block">
            <div class="col-12 text-center">
                <h4 class="helvetica font-weight-normal">Director del P-VIT y coordinadores de línea</h4>
            </div>
            <div class="card-deck">
                <?php $__currentLoopData = $Depto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Division): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                    
                        <a href="<?php echo e(url('/Coordinador', ['Departamento' => $Division, 'Coordinador' => $Cargo[$i]])); ?>" class="card">    
                            <img style="z-index: 1;" src="<?php echo e(asset('Imagenes/Coordinadores/'. $FotoCoordinador[$i] . '.svg')); ?>" alt="Imagen de Coordinador" class="card-img-top">                           
                            <div class="row" style="z-index: 2; position: absolute;">
                                <div class="col-10 align-self-end text-right pr-0">
                                    <h6 class="helvetica font-weight-normal">Clic aquí</h6>
                                </div>
                                <div class="col-2 align-self-end pl-0">
                                    <div class="spinner-grow bg-blue" role="status"></div>
                                </div>
                            </div> 
                            <div class="card-body bg-blue">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <p class="helvetica font-weight-bold text-white">
                                                <?php echo e($CoordinadorDepto[$i]); ?>

                                            </p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-3 col-sm-4 col-lg-2 text-right px-0 mr-1 pb-2">
                                            <img src="<?php echo e(asset('Imagenes/Inicio/Iconos footer/Telefono.svg')); ?>" alt="Icono de telefono" class="img-fluid w-50">
                                        </div>
                                        <div class="col-8 col-lg-8 align-self-center px-1">
                                            <p class="helvetica text-white font-weight-normal mb-1">
                                                
                                                
                                                <?php switch($Division): 
                                                    case ('P-VIT'): ?>
                                                        <?php 
                                                            $j = 0;
                                                        ?>
                                                    <?php break; ?>
                                                    <?php case ('AE'): ?>
                                                        <?php 
                                                            $j = 1;
                                                        ?>
                                                    <?php break; ?>
                                                    <?php case ('EAUT'): ?>
                                                        <?php 
                                                            $j = 2;
                                                        ?>
                                                    <?php break; ?>
                                                    <?php case ('BIOMASA'): ?>
                                                        <?php 
                                                            $j = 3;
                                                        ?>
                                                    <?php break; ?>
                                                <?php endswitch; ?>
                                                
                                                
                                                <?php for($x = $j; $x < ($j + 1); $x++): ?>
                                                    <?php echo e($TelefonoCoordinador[$x]); ?>

                                                <?php endfor; ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-3 col-sm-2 col-lg-2 text-center px-0">
                                            <img src="<?php echo e(asset('Imagenes/Inicio/Iconos footer/Correo.svg')); ?>" alt="Icono de correo" class="img-fluid w-50">
                                        </div>
                                        <div class="col-9 col-lg-10 text-lg-center px-0">
                                            <?php switch($Division): 
                                                case ('P-VIT'): ?>
                                                    <?php 
                                                        $j = 0;
                                                        $y = 2;
                                                    ?>
                                                <?php break; ?>
                                                <?php case ('AE'): ?>
                                                    <?php 
                                                        $j = 3;
                                                        $y = 4;
                                                    ?>
                                                <?php break; ?>
                                                <?php case ('EAUT'): ?>
                                                    <?php 
                                                        $j = 4;
                                                        $y = 6;
                                                    ?>
                                                <?php break; ?>
                                                <?php case ('BIOMASA'): ?>
                                                    <?php 
                                                        $j = 6;
                                                        $y = 8;
                                                    ?>
                                                <?php break; ?>
                                            <?php endswitch; ?>
                                            <?php for($x = $j; $x < $y; $x++): ?>
                                                <p class="helvetica text-white font-weight-normal mb-1">
                                                    <?php echo e($CorreoCoordinadorD[$x]); ?>

                                                </p>                                            
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>                     
                        </a>
                    <?php
                        $i += 1;
                    ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <div class="row justify-content-center py-5 d-none d-sm-block d-lg-none">
            <div class="col-12 text-center">
                <h4 class="helvetica font-weight-normal">Director del P-VIT y coordinadores de línea</h4>
            </div>
            <div class="card-deck">
                <?php for($i = 0; $i < 2; $i++): ?>                    
                    <a href="<?php echo e(url('/Coordinador', ['Departamento' => $Depto[$i], 'Coordinador' => $Cargo[$i]])); ?>" class="card">    
                        <img style="z-index: 1;" src="<?php echo e(asset('Imagenes/Coordinadores/'. $FotoCoordinador[$i] . '.svg')); ?>" alt="Imagen de Coordinador" class="card-img-top">
                        <div class="row" style="z-index: 2; position: absolute;">
                            <div class="col-10 align-self-end text-right pr-0">
                                <h6 class="helvetica font-weight-normal">Clic aquí</h6>
                            </div>
                            <div class="col-2 align-self-end pl-0">
                                <div class="spinner-grow bg-blue" role="status"></div>
                            </div>
                        </div> 
                        <div class="card-body bg-blue">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <p class="helvetica font-weight-bold text-white">
                                            <?php echo e($CoordinadorDepto[$i]); ?>

                                        </p>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-sm-2 col-lg-2 text-right px-0 mr-1 pb-2">
                                        <img src="<?php echo e(asset('Imagenes/Inicio/Iconos footer/Telefono.svg')); ?>" alt="Icono de telefono" class="img-fluid w-50">
                                    </div>
                                    <div class="col-sm-8 col-lg-8 align-self-center px-1">
                                        <p class="helvetica text-white font-weight-normal mb-1">
                                                
                                                
                                                <?php switch($Depto[$i]): 
                                                    case ('P-VIT'): ?>
                                                        <?php 
                                                            $j = 0;
                                                        ?>
                                                    <?php break; ?>
                                                    <?php case ('AE'): ?>
                                                        <?php 
                                                            $j = 1;
                                                        ?>
                                                    <?php break; ?>
                                                <?php endswitch; ?>
                                                
                                                
                                                <?php for($x = $j; $x < ($j + 1); $x++): ?>
                                                    <?php echo e($TelefonoCoordinador[$x]); ?>

                                                <?php endfor; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-sm-2 col-lg-2 text-center px-0">
                                        <img src="<?php echo e(asset('Imagenes/Inicio/Iconos footer/Correo.svg')); ?>" alt="Icono de correo" class="img-fluid w-50">
                                    </div>
                                    <div class="col-sm-10 col-lg-10 text-lg-center px-0">
                                        <?php switch($Depto[$i]): 
                                            case ('P-VIT'): ?>
                                                <?php 
                                                    $j = 0;
                                                    $y = 2;
                                                ?>
                                            <?php break; ?>
                                            <?php case ('AE'): ?>
                                                <?php 
                                                    $j = 3;
                                                    $y = 4;
                                                ?>
                                            <?php break; ?>
                                        <?php endswitch; ?>
                                        <?php for($x = $j; $x < $y; $x++): ?>
                                            <p class="helvetica text-white font-weight-normal mb-1">
                                                <?php echo e($CorreoCoordinadorD[$x]); ?>

                                            </p>                                            
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            </div>
                        </div>                     
                    </a>
                <?php endfor; ?>
            </div>
            <div class="card-deck mt-4">
                <?php for($i = 2; $i < 4; $i++): ?>                    
                    <a href="<?php echo e(url('/Coordinador', ['Departamento' => $Depto[$i], 'Coordinador' => $Cargo[$i]])); ?>" class="card">    
                        <img style="z-index: 1;" src="<?php echo e(asset('Imagenes/Coordinadores/'. $FotoCoordinador[$i] . '.svg')); ?>" alt="Imagen de Coordinador" class="card-img-top">
                        <div class="row" style="z-index: 2; position: absolute;">
                            <div class="col-10 align-self-end text-right pr-0">
                                <h6 class="helvetica font-weight-normal">Clic aquí</h6>
                            </div>
                            <div class="col-2 align-self-end pl-0">
                                <div class="spinner-grow bg-blue" role="status"></div>
                            </div>
                        </div> 
                        <div class="card-body bg-blue">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <p class="helvetica font-weight-bold text-white">
                                            <?php echo e($CoordinadorDepto[$i]); ?>

                                        </p>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-sm-2 col-lg-2 text-right px-0 mr-1 pb-2">
                                        <img src="<?php echo e(asset('Imagenes/Inicio/Iconos footer/Telefono.svg')); ?>" alt="Icono de telefono" class="img-fluid w-50">
                                    </div>
                                    <div class="col-sm-8 col-lg-8 align-self-center px-1">
                                        <p class="helvetica text-white font-weight-normal mb-1">
                                            
                                            
                                            <?php switch($Depto[$i]): 
                                                case ('EAUT'): ?>
                                                    <?php 
                                                        $j = 2;
                                                    ?>
                                                <?php break; ?>
                                                <?php case ('BIOMASA'): ?>
                                                    <?php 
                                                        $j = 3;
                                                    ?>
                                                <?php break; ?>
                                            <?php endswitch; ?>
                                            
                                            
                                            <?php for($x = $j; $x < ($j + 1); $x++): ?>
                                                <?php echo e($TelefonoCoordinador[$x]); ?>

                                            <?php endfor; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-sm-2 col-lg-2 text-center px-0">
                                        <img src="<?php echo e(asset('Imagenes/Inicio/Iconos footer/Correo.svg')); ?>" alt="Icono de correo" class="img-fluid w-50">
                                    </div>
                                    <div class="col-sm-10 col-lg-10 text-lg-center px-0">
                                        <?php switch($Depto[$i]): 
                                            case ('EAUT'): ?>
                                                <?php 
                                                    $j = 4;
                                                    $y = 6;
                                                ?>
                                            <?php break; ?>
                                            <?php case ('BIOMASA'): ?>
                                                <?php 
                                                    $j = 6;
                                                    $y = 8;
                                                ?>
                                            <?php break; ?>
                                        <?php endswitch; ?>
                                        <?php for($x = $j; $x < $y; $x++): ?>
                                            <p class="helvetica text-white font-weight-normal mb-1">
                                                <?php echo e($CorreoCoordinadorD[$x]); ?>

                                            </p>                                            
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            </div>
                        </div>                     
                    </a>
                <?php endfor; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Pagina Maestra.PaginaMaestraPrincipal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProyectoPVIT\ProyectoPVIT\resources\views/Coordinadores.blade.php ENDPATH**/ ?>