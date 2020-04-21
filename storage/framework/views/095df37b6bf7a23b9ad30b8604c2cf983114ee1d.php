<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="Index, Follow" />
    <meta name="keywords" content="Universidad Nacional de Ingeniería, UNI | PVIT, Programa de Vinculación e Innovación Tecnológica"/>
    <meta name="description" content="El objetivo del P-VIT es capacitar a las personas correctas para la posición correcta, haciendo las cosas correctas para lograr los objetivos de sus empresas, instituciones u organismos." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="NinjaSoft">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <title>UNI | PVIT</title>
</head>
<body>
    <header>
        <?php 
            $RedE = false;
        ?>
        
        <?php if(!isset($Departamento)): ?>
            <?php 
                $Departamento = "P-VIT";
            ?>
        <?php endif; ?>
        
        
        <?php switch($Departamento):
            case ("P-VIT"): ?>
                <?php
                    $LogoUNI = "LogoUNI.";
                    $LogoDepto = "LogoPVIT.";
                    $BandServicios = false;
                    $TelefonoCoordinador = "+505 8872-9608";

                    $CorreoCoordinador[0] = "leoant@pvit.uni.edu.ni";

                    $CorreoCoordinador[1] = "leoant71@yahoo.com";

                    $CorreoCoordinador[2] = "pvit@portal.uni.edu.ni";

                    $Depto = "del Programa de Innovación e Innovación Tecnológica (P-VIT).";
                ?>
            <?php break; ?>
            <?php case ("AE"): ?>
                <?php
                    $LogoUNI = "LogoUNIPVIT.";
                    $LogoDepto = "LogoAE.";
                    $RedE = true;
                    $BandServicios = true;
                    $TelefonoCoordinador = "+505 8465-9191";

                    $CorreoCoordinador[0] = "karla.quinonez@pvit.uni.edu.ni";

                    $CorreoCoordinador[1] = "samuelvallecillo@hotmail.com";

                    $Depto = "Atención Empresarial (AE).";

                    $Coordinador = "AE";
                ?>
            <?php break; ?>
            <?php case ("EAUT"): ?>
                <?php 
                    $LogoUNI = "LogoUNIPVIT.";
                    $LogoDepto = "LogoEAUT.";
                    $BandServicios = true;
                    $TelefonoCoordinador = "+505 7535-9817";

                    $CorreoCoordinador[0] = "wilfredo.varela@pvit.uni.edu.ni";

                    $CorreoCoordinador[1] = "wvarelafonseca@gmail.com";

                    $Depto = "de Estudio Ambientales Urbano Territoriales (EAUT).";

                    $Coordinador = "EAUT";
                ?>
            <?php break; ?>
            <?php case ("BIOMASA"): ?>
                <?php 
                    $LogoUNI = "LogoUNIPVIT.";
                    $LogoDepto = "LogoBIOMASA.";
                    $BandServicios = true;
                    $TelefonoCoordinador = "+505 8887-4573";

                    $CorreoCoordinador[0] = "vidal.caceres@pvit.uni.edu.ni";

                    $CorreoCoordinador[1] = "vidacla62@yahoo.com";

                    $Depto = "de BIOMASA.";

                    $Coordinador = "BIOMASA";
                ?>
            <?php break; ?>
            <?php default: ?>
                <?php
                    $LogoUNI = "LogoUNI.";
                    $LogoDepto = "LogoPVIT.";
                ?>
        <?php endswitch; ?>

        <div class="container-fluid">
            <div class="row bg-white">
                <div class="col-6 col-sm-3 text-center align-self-md-start my-3">
                    
                    
                    <a href="https://uni.edu.ni/#/" rel="noreferrer" target="_blank">
                        <img id="ImgLogoUNI" src="<?php echo e(asset('Imagenes/Inicio/logos/'.$LogoUNI.'svg')); ?>" alt="Logo de la UNI" class="ml-md-5 img-fluid" title="Ir a página oficial de la universidad.">
                    </a>
                </div>
                <div class="d-none d-sm-block col-sm-2 my-3"></div>
                <div class="col-6 col-sm-5 col-md-4 text-center align-self-md-start my-3 wow heartBeat">
                    <a href="<?php echo e(url('/Inicio', ['Departamento' => 'P-VIT'])); ?>">
                        <?php if($Departamento == "EAUT"): ?>
                            <img id="ImgLogoDepto" src="<?php echo e(asset('Imagenes/Inicio/logos/'.$LogoDepto.'svg')); ?>" alt="Logo del PVIT" class="img-fluid w-50" title="Ir a inicio.">
                        <?php else: ?>
                            <img id="ImgLogoDepto" src="<?php echo e(asset('Imagenes/Inicio/logos/'.$LogoDepto.'svg')); ?>" alt="Logo del PVIT" class="img-fluid" title="Ir a inicio.">
                        <?php endif; ?>                        
                    </a>
                </div>
                <div class="d-none d-sm-block col-sm-2 col-md-3"></div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-blue">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li id="LinkInicio" class="nav-item ml-1 mr-0">
                        <a class="nav-link text-white" href="<?php echo e(url('/Inicio', ['Departamento' => 'P-VIT'])); ?>">Inicio</a>
                    </li>
                    <li id="LinkNosotros" class="nav-item ml-1 mr-0">
                        
                        <a class="nav-link text-white" href="<?php echo e(url('/Nosotros', ['Departamento' => $Departamento])); ?>">Somos</a>
                    </li>
                    <?php if($BandServicios == false): ?>             
                        <li id="LinkCoordinadores" class="nav-item ml-1 mr-0">
                            <a class="nav-link text-white" href="<?php echo e(url('/Coordinador', ['Departamento' => 'P-VIT'])); ?>">Coordinadores</a>
                        </li>
                    <?php endif; ?>
                    <?php if($BandServicios == true): ?>             
                        <li id="LinkCoordinador" class="nav-item ml-1 mr-0">
                            <a class="nav-link text-white" href="<?php echo e(url('/Coordinador', ['Departamento' => $Departamento, 'Coordinador' => $Coordinador])); ?>">Coordinador</a>
                        </li>
                        <li id="LinkServicios" class="nav-item ml-1 mr-0">
                            <a class="nav-link text-white" href="<?php echo e(url('/Servicios', ['Departamento' => $Departamento])); ?>">Servicios</a>
                        </li>
                    <?php endif; ?>
                    <?php if($RedE == true): ?>
                        <li id="LinkRedE" class="nav-item ml-1 mr-0">
                            <a class="nav-link text-white" href="#">Red de Emprendedores UNI</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container-fluid">
        <?php echo $__env->yieldContent('Contenido'); ?>
    </div>

    <footer class="container-fluid bg-blue text-white pt-4 pb-0">
        <div class="row justify-content-center py-3">
            <div class="col-12 col-sm-5">
                <h5 class="helvetica font-weight-bold">Información de contacto <?php echo e($Depto); ?></h5>
                <br>
                <div class="row justify-content-center">
                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-1 text-right">
                        <img src="<?php echo e(asset('Imagenes/Inicio/Iconos footer/Ubicacion.svg')); ?>" alt="Icono de ubicación" class="img-fluid">
                    </div>
                    <div class="col-9 col-sm-10 col-md-9 col-xl-10 align-self-center">
                        <p class="helvetica font-weight-normal text-justify">
                            Universidad Nacional de Ingeniería. Recinto universitario "Simón Bolívar". Edificio de posgrado, 2da planta.
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center my-3 my-md-2">
                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-1 text-right">
                        <img src="<?php echo e(asset('Imagenes/Inicio/Iconos footer/Telefono.svg')); ?>" alt="Icono de telefono" class="img-fluid">
                    </div>
                    <div class="col-9 col-sm-10 col-md-9 col-xl-10 align-self-center">
                        <p class="helvetica font-weight-normal">
                            <?php echo e($TelefonoCoordinador); ?>

                        </p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-1 text-right">
                        <img src="<?php echo e(asset('Imagenes/Inicio/Iconos footer/Correo.svg')); ?>" alt="Icono de correo" class="img-fluid">
                    </div>
                    <div class="col-9 col-sm-10 col-md-9 col-xl-10 align-self-center">
                        <?php $__currentLoopData = $CorreoCoordinador; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Correo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                            
                            <p class="helvetica font-weight-normal mb-1">
                                <?php echo e($Correo); ?>

                            </p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-2 align-self-md-center my-sm-auto">
                <div class="row justify-content-center">
                    <div class="order-5 order-sm-1 order-md-5 order-lg-1 col-3 col-sm-8 col-md-7 col-lg-4 col-xl-3 mx-md-auto mt-md-5 mr-md-1 align-self-center wow wobble">                        
                        <a id="RedFacebook" rel="noreferrer" href="https://www.facebook.com/profile.php?id=100010627875017" target="_blank">    
                            <p class="text-white helvetica font-weight-bold mb-0 pb-0">
                                Síguenos
                            </p>
                            <div>                            
                                <img src="<?php echo e(asset('Imagenes/Inicio/Iconos footer/facebook.svg')); ?>" alt="Icono de facebook" class="img-fluid" title="Ir a FanPage del P-VIT.">
                            </div>
                        </a>
                    </div>
                    
                </div>
            </div>
            <div class="col-11 col-sm-5 col-lg-4 mt-5">
                <h5 class="helvetica font-weight-bold">Envíanos un mensaje</h5>               
                <form method="post" accept-charset="utf8" action="<?php echo e(url('EnviarMensaje/')); ?>">
                    <!--Campo oculta que evita ataques del tipo cross-site creando un token por cada usuario que use la web-->
                    <?php echo csrf_field(); ?>
                    <label for="txtNomApell" class="text-white font-weight-normal helvetica mb-0">Nombre y apellido completo:</label>
                    <input type="text" name="txtNomApell" id="txtNomApell" placeholder="Nombre y apellido completo" class="form-control form-control-sm bg-black text-blue font-weight-bold">
                    <label for="txtCorreo" class="text-white font-weight-normal helvetica mb-0 mt-1">Correo electrónico:</label>
                    <input type="email" name="txtCorreo" id="txtCorreo" placeholder="E-mail" class="form-control form-control-sm bg-black text-blue font-weight-bold">
                    <label for="txtMensaje" class="text-white font-weight-normal helvetica mb-0 mt-2">Mensaje a escribir:</label>
                    <textarea name="txtMensaje" id="txtMensaje" rows="3" placeholder="Mensaje" class="form-control form-control-sm bg-black text-blue font-weight-bold"></textarea>
                    <?php $__currentLoopData = $CorreoCoordinador; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Correo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <input type="hidden" name="txtCorreos[]" value="<?php echo e($Correo); ?>">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="text-center text-md-right mt-1">
                        <input type="submit" value="Enviar" class="btn btn-blue text-white">
                    </div>
                </form>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12 text-center">
                <h6 class="helvetica font-weight-bold text-white mb-0">Creada por</h6>
            </div>
        </div>
        <div class="row justify-content-center">            
            <div class="col-4 col-sm-3 col-md-2 col-lg-2 text-center">
                <img src="https://drive.google.com/uc?id=1NJlGgwupp_PXCOKT34D2JWsOhH_li1We" alt="Logo de NinjaSoft" class="img-fluid w-75" title="Logo de la empresa que desarrolló esta página web.">
            </div>
        </div>
    </footer>

    <?php echo $__env->make('Vista parcial.MsnAdvertencia', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    

    
    <?php $__env->startSection('Scripts'); ?>
        <script type="text/javascript" charset="utf-8">
            function Carga()
            {
                //var Depto = json(Route::current()->parameter("Departamento"));
                //console.log(Depto);
                //json() convierte los datos a formato JSON
                //Route::current() obtiene la url actual y el método getPrefix() devuelve el prefijo establecido para la ruta de la url
                var Prefijo = <?php echo json_encode(Route::current()->getPrefix(), 15, 512) ?>;
                switch(Prefijo)
                {
                    case "/Nosotros":
                        document.getElementById('LinkNosotros').classList.add('active');
                        <?php if($BandServicios == false): ?>
                            document.getElementById('LinkCoordinadores').classList.remove('active');
                        <?php endif; ?>
                        <?php if($BandServicios == true): ?>
                            document.getElementById('LinkCoordinador').classList.remove('active');
                            document.getElementById('LinkServicios').classList.remove('active');
                        <?php endif; ?>                        
                        document.getElementById('LinkInicio').classList.remove('active');
                    break;
                    case "/Coordinador":
                        document.getElementById('LinkCoordinadores').classList.add('active');
                        /*document.getElementById('LinkCoordinador').classList.add('active');*/
                        <?php if($BandServicios == true): ?>
                            document.getElementById('LinkCoordinador').classList.remove('active');
                            document.getElementById('LinkServicios').classList.remove('active');
                        <?php endif; ?>  
                        document.getElementById('LinkInicio').classList.remove('active');
                    break;
                    case "/Servicios":
                        document.getElementById('LinkServicios').classList.add('active');       
                        <?php if($BandServicios == false): ?>
                            document.getElementById('LinkCoordinadores').classList.remove('active');
                        <?php endif; ?>
                        document.getElementById('LinkCoordinador').classList.remove('active');
                        document.getElementById('LinkNosotros').classList.remove('active');
                        document.getElementById('LinkInicio').classList.remove('active');
                    break;
                    case "/Inicio":
                        document.getElementById('LinkInicio').classList.add('active');
                        document.getElementById('LinkCoordinadores').classList.remove('active');
                        <?php if($BandServicios == true): ?>
                            document.getElementById('LinkCoordinador').classList.remove('active');
                            document.getElementById('LinkServicios').classList.remove('active');
                        <?php endif; ?>  
                        document.getElementById('LinkNosotros').classList.remove('active');
                    break;
                }
                //console.log(Prefijo);
            }

            window.onload = Carga();
        </script>
        <script src="<?php echo e(asset('js/app.min.js')); ?>"></script>
        
    <?php echo $__env->yieldSection(); ?>
    </body>
</html><?php /**PATH C:\xampp\htdocs\ProyectoPVIT\ProyectoPVIT\resources\views/Pagina Maestra/PaginaMaestraPrincipal.blade.php ENDPATH**/ ?>