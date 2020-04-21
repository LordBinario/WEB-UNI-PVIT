<?php $__env->startSection('Contenido'); ?>
    <?php echo $__env->make('Vista parcial.BannerCoordinadoresTexto', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container">      
        <div class="row justify-content-center py-5">
        <?php if($Departamento == "PVIT"): ?>
            <div class="col-3">
                <a href="<?php echo e(url('/Coordinadores', ['Departamento' => $Departamento, 'Coordinador' => 'Director'])); ?>">
                    <div class="card">
                        <img src="resources/Imagenes/CoordinadorPVIT.svg" alt="Imagen de Coordinador Director" class="card-img-top">
                        <div class="card-body bg-blue">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <p class="helvetica font-weight-bold text-white">
                                        Msc. Ing. Leonardo Chavarría Carrión
                                    </p>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-2">
                                    <img src="resurces/Imagenes/IconoTelefono.svg" alt="Icono de telefono">
                                </div>
                                <div class="col-6">
                                    <p class="helvetica text-white font-weight-normal">
                                        +505 0000-0000
                                    </p>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-2">
                                    <img src="resurces/Imagenes/IconoCorreo.svg" alt="Icono de correo">
                                </div>
                                <div class="col-9">
                                    <p class="helvetica text-white font-weight-normal">
                                        correo@empresa.com.ni
                                    </p>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-2">
                                    <img src="resources/Imagenes/IconoFacebook.svg" alt="Icono de Facebook"class="rounded-circle">
                                </div>
                                <div class="col-2">
                                    <img src="resources/Imagenes/IconoTwitter.svg" alt="Icono de Twitter"class="rounded-circle">
                                </div>
                                <div class="col-2">
                                    <img src="resources/Imagenes/IconoGoogle.svg" alt="Icono de Google"class="rounded-circle">
                                </div>
                                <div class="col-2">
                                    <img src="resources/Imagenes/IconoInstagram.svg" alt="Icono de Instagram"class="rounded-circle">
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php elseif($Departamento == "AE"): ?>
            <div class="col-3">
                <a href="<?php echo e(url('/Coordinadores', ['Departamento' => $Departamento, 'Coordinador' => 'Coordinador AE'])); ?>">
                    <div class="card">
                        <img src="resources/Imagenes/CoordinadorAE.svg" alt="Imagen de Coordinador AE" class="card-img-top">
                        <div class="card-body bg-blue">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <p class="helvetica font-weight-bold text-white">
                                        MBA. Ing. Karla Julissa Quiñonez Rojas
                                    </p>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-2">
                                    <img src="resurces/Imagenes/IconoTelefono.svg" alt="Icono de telefono">
                                </div>
                                <div class="col-6">
                                    <p class="helvetica text-white font-weight-normal">
                                        +505 8465-9191
                                    </p>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-2">
                                    <img src="resurces/Imagenes/IconoCorreo.svg" alt="Icono de correo">
                                </div>
                                <div class="col-9">
                                    <p class="helvetica text-white font-weight-normal">
                                        karla.quinonez@pvit.uni.edu.ni
                                    </p>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-2">
                                    <img src="resources/Imagenes/IconoFacebook.svg" alt="Icono de Facebook"class="rounded-circle">
                                </div>
                                <div class="col-2">
                                    <img src="resources/Imagenes/IconoTwitter.svg" alt="Icono de Twitter"class="rounded-circle">
                                </div>
                                <div class="col-2">
                                    <img src="resources/Imagenes/IconoGoogle.svg" alt="Icono de Google"class="rounded-circle">
                                </div>
                                <div class="col-2">
                                    <img src="resources/Imagenes/IconoInstagram.svg" alt="Icono de Instagram"class="rounded-circle">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        <?php elseif($Departamento == "BIOMASA"): ?>
            <div class="col-3">
                <div class="card">
                    <a href="<?php echo e(url('/Coordinadores', ['Departamento' => $Departamento, 'Coordinador' => 'Coordinador BIOMASA'])); ?>">
                        <img src="resources/Imagenes/CoordinadorBIOMASA.svg" alt="Imagen de Coordinador" class="card-img-top">
                        <div class="card-body bg-blue">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <p class="helvetica font-weight-bold text-white">
                                        Msc. Ing. Dionisio Vidal Cáceres
                                    </p>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-2">
                                    <img src="resurces/Imagenes/IconoTelefono.svg" alt="Icono de telefono">
                                </div>
                                <div class="col-6">
                                    <p class="helvetica text-white font-weight-normal">
                                        +505 0000-0000
                                    </p>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-2">
                                    <img src="resurces/Imagenes/IconoCorreo.svg" alt="Icono de correo">
                                </div>
                                <div class="col-9">
                                    <p class="helvetica text-white font-weight-normal">
                                        correo@empresa.com.ni
                                    </p>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-2">
                                    <img src="resources/Imagenes/IconoFacebook.svg" alt="Icono de Facebook"class="rounded-circle">
                                </div>
                                <div class="col-2">
                                    <img src="resources/Imagenes/IconoTwitter.svg" alt="Icono de Twitter"class="rounded-circle">
                                </div>
                                <div class="col-2">
                                    <img src="resources/Imagenes/IconoGoogle.svg" alt="Icono de Google"class="rounded-circle">
                                </div>
                                <div class="col-2">
                                    <img src="resources/Imagenes/IconoInstagram.svg" alt="Icono de Instagram"class="rounded-circle">
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php elseif($Departamento == "EAUT"): ?>
            <div class="col-3">
                <div class="card">
                    <a href="<?php echo e(url('/Coordinadores', ['Departamento' => $Departamento, 'Coordinador' => 'Coordinador EAUT'])); ?>">
                        <img src="resources/Imagenes/CoordinadorEAUT.svg" alt="Imagen de Coordinador" class="card-img-top">
                        <div class="card-body bg-blue">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <p class="helvetica font-weight-bold text-white">
                                        Msc. Ing. Wilfredo Varela Fonseca
                                    </p>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-2">
                                    <img src="resurces/Imagenes/IconoTelefono.svg" alt="Icono de telefono">
                                </div>
                                <div class="col-6">
                                    <p class="helvetica text-white font-weight-normal">
                                        +505 0000-0000
                                    </p>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-2">
                                    <img src="resurces/Imagenes/IconoCorreo.svg" alt="Icono de correo">
                                </div>
                                <div class="col-9">
                                    <p class="helvetica text-white font-weight-normal">
                                        correo@empresa.com.ni
                                    </p>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-2">
                                    <img src="resources/Imagenes/IconoFacebook.svg" alt="Icono de Facebook"class="rounded-circle">
                                </div>
                                <div class="col-2">
                                    <img src="resources/Imagenes/IconoTwitter.svg" alt="Icono de Twitter"class="rounded-circle">
                                </div>
                                <div class="col-2">
                                    <img src="resources/Imagenes/IconoGoogle.svg" alt="Icono de Google"class="rounded-circle">
                                </div>
                                <div class="col-2">
                                    <img src="resources/Imagenes/IconoInstagram.svg" alt="Icono de Instagram"class="rounded-circle">
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Pagina Maestra.PaginaMaestraPrincipal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProyectoPVIT\resources\views/Coordinadores.blade.php ENDPATH**/ ?>