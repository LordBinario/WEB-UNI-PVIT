<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('../bootstrap/CSS/bootstrap.min.css')); ?>">
    <!--Función asset() toma por defecto el directorio base donde está alojada la web-->
    <link rel="stylesheet" href="<?php echo e(asset('../bootstrap/CSS/Personalizado.css')); ?>">
    <link href="https://fonts.googleapis.com/css?family=Helvetica&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Corbel&display=swap" rel="stylesheet">
    <title>UNI | PVIT</title>
</head>
<body>
    <header>
        
        <?php if(!isset($Departamento)): ?>
            <?php 
                $Departamento = "PVIT";
            ?>
        <?php endif; ?>
        
        
        <?php switch($Departamento):
            case ("PVIT"): ?>
                <?php
                    $LogoUNI = "LogoUNI.";
                    $LogoDepto = "LogoPVIT.";
                ?>
            <?php break; ?>
            <?php case ("AE"): ?>
                <?php
                    $LogoUNI = "LogoUNIPVIT.";
                    $LogoDepto = "LogoAE.";
                ?>
            <?php break; ?>
            <?php case ("EAUT"): ?>
                <?php 
                    $LogoUNI = "LogoUNIPVIT.";
                    $LogoDepto = "LogoEAUT.";
                ?>
            <?php break; ?>
            <?php case ("BIOMASA"): ?>
                <?php 
                    $LogoUNI = "LogoUNIPVIT.";
                    $LogoDepto = "LogoBIOMASA.";
                ?>
            <?php break; ?>
            <?php case ("RedE"): ?>
                <?php
                    $LogoUNI = "LogoUNIPVIT.";
                    $LogoDepto = "LogoRedE.";
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
                <div class="col-12 col-sm-3 text-center align-self-md-start">
                    
                    
                    <img id="ImgLogoUNI" src="<?php echo e(asset('../resources/Imagenes/Inicio/logos/'.$LogoUNI.'svg')); ?>" alt="Logo de la UNI" class="ml-md-5 img-fluid">
                </div>
                <div class="d-none d-sm-block col-sm-2"></div>
                <div class="col-12 col-sm-5 col-md-4 text-center align-self-md-start">
                    <img id="ImgLogoDepto" src="<?php echo e(asset('../resources/Imagenes/Inicio/logos/'.$LogoDepto.'svg')); ?>" alt="Logo del PVIT" class="img-fluid">
                </div>
                <div class="d-none d-sm-block col-sm-2 col-md-3"></div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-blue">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li id="LinkDescrip" class="nav-item mx-2">
                        <a class="nav-link text-white" href="<?php echo e(url('/Descripcion', ['Departamento' => $Departamento])); ?>">Descripción<span class="sr-only">(current)</span></a>
                    </li>
                    <li id="LinkNosotros" class="nav-item mx-2">
                        
                        <a class="nav-link text-white" href="<?php echo e(url('/Nosotros', ['Departamento' => $Departamento])); ?>">Sobre nosotros</a>
                    </li>                
                    <li id="LinkCoordinadores" class="nav-item mx-2">
                        <a class="nav-link text-white" href="<?php echo e(url('/Coordinadores', ['Departamento' => $Departamento])); ?>">Coordinandores</a>
                    </li>
                    <li id="LinkLineas" class="nav-item mx-2">
                        <a class="nav-link text-white" href="<?php echo e(url('/Lineas', ['Departamento' => $Departamento])); ?>">Líneas de trabajo</a>
                    </li>
                    <li id="LinkServicios" class="nav-item mx-2">
                        <a class="nav-link text-white" href="<?php echo e(url('/Servicios', ['Departamento' => $Departamento])); ?>">Servicios</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container-fluid">
        <?php echo $__env->yieldContent('Contenido'); ?>
    </div>

    <footer class="container-fluid bg-blue text-white py-4">
        <div class="row justify-content-center py-3">
            <div class="col-12 col-sm-8 col-md-4 col-lg-3">
                <h5 class="helvetica font-weight-bold">Información de contacto</h5>
                <br>
                <div class="row">
                    <div class="col-3 col-sm-2 col-md-3 col-xl-2 align-self-center">
                        <img src="<?php echo e(asset('../resources/Imagenes/Inicio/Iconos footer/Ubicacion.svg')); ?>" alt="Icono de ubicación" class="img-fluid">
                    </div>
                    <div class="col-9 col-sm-10 col-md-9 col-xl-10 align-self-center">
                        <p class="helvetica font-weight-normal">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic harum ratione perferendis aperiam.
                        </p>
                    </div>
                </div>
                <div class="row my-3 my-md-0">
                    <div class="col-3 col-sm-2 col-md-3 col-xl-2 align-self-center">
                        <img src="<?php echo e(asset('../resources/Imagenes/Inicio/Iconos footer/Telefono.svg')); ?>" alt="Icono de telefono" class="img-fluid">
                    </div>
                    <div class="col-9 col-sm-10 col-md-9 col-xl-10 align-self-center">
                        <p class="helvetica font-weight-normal">
                            Lorem ipsum dolor sit amet.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 col-sm-2 col-md-3 col-xl-2 align-self-center">
                        <img src="<?php echo e(asset('../resources/Imagenes/Inicio/Iconos footer/Correo.svg')); ?>" alt="Icono de correo" class="img-fluid">
                    </div>
                    <div class="col-9 col-sm-10 col-md-9 col-xl-10 align-self-center">
                        <p class="helvetica font-weight-normal">
                            Lorem ipsum dolor sit amet.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-9 col-md-4 col-lg-4 align-self-md-center">
                <div class="row justify-content-center">
                    <div class="order-5 order-sm-1 order-md-5 order-lg-1 col-3 col-sm-2 col-md-3 col-lg-2 mx-auto mr-sm-5 mx-md-auto mt-md-5 mr-md-1 mr-lg-auto ml-lg-0 align-self-center">                        
                        <a id="RedFacebook" href="https://www.facebook.com/profile.php?id=100010627875017" target="_blank">    
                            <p class="helvetica font-weight-bold mb-0 pb-0">
                                Síguenos
                            </p>
                            <div>                            
                                <img src="<?php echo e(asset('../resources/Imagenes/Inicio/Iconos footer/facebook.svg')); ?>" alt="Icono de facebook" class="img-fluid">
                            </div>
                        </a>
                    </div>
                    <div class="order-1 order-sm-2 order-md-1 order-lg-2 col-3 col-sm-2 col-md-3 col-lg-2 align-self-start my-5 my-md-0">
                        <img src="<?php echo e(asset('../resources/Imagenes/Inicio/Iconos footer/Contador1.svg')); ?>" alt="Icono del Contador 1" class="img-fluid">
                        <h4 class="Corbel font-weight-bold">
                            846k+
                        </h4>
                    </div>
                    <div class="order-2 order-sm-3 order-md-2 order-lg-3 col-3 col-sm-2 col-md-3 col-lg-2 pt-5 align-self-end my-5 my-md-0">
                        <img src="<?php echo e(asset('../resources/Imagenes/Inicio/Iconos footer/Contador2.svg')); ?>" alt="Icono del Contador 1" class="img-fluid">
                        <h4 class="Corbel font-weight-bold">
                            15360+
                        </h4>                        
                    </div>
                    <div class="order-3 order-sm-4 order-md-3 order-lg-4 col-3 col-sm-2 col-md-3 col-lg-2 align-self-start my-5 my-md-0">
                        <img src="<?php echo e(asset('../resources/Imagenes/Inicio/Iconos footer/Contador3.svg')); ?>" alt="Icono del Contador 1" class="img-fluid">
                        <h4 class="Corbel font-weight-bold">
                            408+
                        </h4>                        
                    </div>
                    <div class="order-4 order-sm-5 order-md-4 order-lg-5 col-3 col-sm-2 col-md-3 col-lg-2 pt-2 align-self-end my-5 my-md-0">
                        <img src="<?php echo e(asset('../resources/Imagenes/Inicio/Iconos footer/Contador4.svg')); ?>" alt="Icono del Contador 1" class="img-fluid">
                        <h4 class="Corbel font-weight-bold">
                            1200+
                        </h4>                        
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-md-4 col-lg-3 mt-5 mt-sm-3 ml-lg-5 my-md-auto">
                <h5 class="helvetica font-weight-bold">Envíanos un mensaje</h5>               
                <form method="post" accept-charset="utf8" action="<?php echo e(url('EnviarMensaje/')); ?>">
                    <!--Campo oculta que evita ataques del tipo cross-site creadno un token por cada usuario que use la web-->
                    <?php echo csrf_field(); ?>
                    <input type="text" name="txtNomApell" id="txtNomApell" placeholder="Nombre y apellido completo" class="form-control form-control-sm bg-black text-blue">
                    <input type="email" name="txtCorreo" id="txtCorreo" placeholder="E-mail" class="form-control form-control-sm bg-black text-blue mt-1">
                    <textarea name="txtMensaje" id="txtMensaje" rows="3" placeholder="Mensaje" class="form-control form-control-sm bg-black text-blue mt-2"></textarea>
                    <div class="text-center text-md-right mt-1">
                        <input type="submit" value="Enviar" class="btn btn-blue text-white">
                    </div>
                </form>
            </div>
        </div>
    </footer>

    <?php echo $__env->make('Vista parcial.MsnAdvertencia', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <script type="text/javascript" charset="utf8">
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
                    document.getElementById('LinkCoordinadores').classList.remove('active');
                    document.getElementById('LinkServicios').classList.remove('active');
                    document.getElementById('LinkLineas').classList.remove('active');
                    document.getElementById('LinkDescrip').classList.remove('active');
                break;
                case "/Coordinadores":
                    document.getElementById('LinkCoordinadores').classList.add('active');
                    document.getElementById('LinkNosotros').classList.remove('active');
                    document.getElementById('LinkServicios').classList.remove('active');
                    document.getElementById('LinkLineas').classList.remove('active');
                    document.getElementById('LinkDescrip').classList.remove('active');
                break;
                case "/Servicios":
                    document.getElementById('LinkServicios').classList.add('active');                    
                    document.getElementById('LinkCoordinadores').classList.remove('active');
                    document.getElementById('LinkNosotros').classList.remove('active');
                    document.getElementById('LinkLineas').classList.remove('active');
                    document.getElementById('LinkDescrip').classList.remove('active');
                break;
                case "/Lineas":
                    document.getElementById('LinkLineas').classList.add('active');
                    document.getElementById('LinkCoordinadores').classList.remove('active');
                    document.getElementById('LinkServicios').classList.remove('active');
                    document.getElementById('LinkNosotros').classList.remove('active');
                    document.getElementById('LinkDescrip').classList.remove('active');
                break;
                case "/Descripcion":
                    document.getElementById('LinkDescrip').classList.add('active');
                    document.getElementById('LinkLineas').classList.remove('active');
                    document.getElementById('LinkCoordinadores').classList.remove('active');
                    document.getElementById('LinkServicios').classList.remove('active');
                    document.getElementById('LinkNosotros').classList.remove('active');                    
                break;
            }
            //console.log(Prefijo);
        }

        window.onload = Carga();
    </script>
    
    <script src="<?php echo e(asset('../bootstrap/JS/jquery-3.4.1.slim.min.js')); ?>"></script>
    <script src="<?php echo e(asset('../bootstrap/JS/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('../bootstrap/JS/bootstrap-4.4.1.min.js')); ?>"></script>
    </body>
</html><?php /**PATH C:\xampp\htdocs\ProyectoPVIT\resources\views/Pagina Maestra/PaginaMaestraPrincipal.blade.php ENDPATH**/ ?>