<?php $__env->startSection('Contenido'); ?>
    <div class="row">
        <div class="col-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="resources/Imagenes/Imagen1.svg" class="d-block w-100" alt="Imagen 1">
                    </div>
                    <div class="carousel-item">
                        <img src="resources/Imagenes/Imagen2.svg" class="d-block w-100" alt="Imagen 2">
                    </div>
                    <div class="carousel-item">
                        <img src="resources/Imagenes/Imagen3.svg" class="d-block w-100" alt="Imagen 3">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-4 mb-0">
        <div class="col-10">
            <h4 class="helvetica font-weight-bold text-center">BIENVENIDOS A UNI PVIT</h4>
            <br>
            <p class="helvetica font-weight-normal text-justify">
                Toda organización, independientemente del giro de negocio a que se dedique, necesita desarrollar
                una estrategia de vinculación con el medio que justificó su creación, que le permita mantener un
                balance entre “insumos” (INPUTS) y “resultados” (OUTPUTS); dicha estrategia le permitirá aprovechar
                mejor tal relación, pues en ese medio deposita productos y servicios (soluciones), y de él también
                toma los medios necesarios para operar.
            </p>
            <p class="helvetica font-weight-normal text-justify">
                Las universidades cuentan con un universo variado y rico de constituyentes, entre los que se
                pueden mencionar empresas, instituciones, organismos, municipalidades, y otros; los que
                normalmente son establecidos por su mandato, o por las necesidades apremiantes del país
                (oficialmente por el Plan Nacional de Desarrollo Humano), pero también son “determinados” de
                acuerdo a las propias prioridades de los centros educativos, sobre el crecimiento que
                experimentan y las especialidades o temas en que se han concentrado.            
            </p>
            <p class="helvetica font-weight-normal text-justify">
                Considerando los nuevos retos que establece el proceso de mundialización a los países pequeños,
                y a lo interno a sus casas de estudio, es que el modelo de vinculación de la UNI, se encuentra bajo
                escrutinio en aras de conocer cómo se lleva actualmente tal proceso, y cómo se podría potencializar,
                implementado inicialmente en pequeña escala, pero priorizando sobre todo el enfoque institucional, de
                cara a resolver los problemas prioritarios del país, y considerando una mejor racionalización de sus
                recursos.
            </p>
            <p class="helvetica font-weight-normal text-justify">
                Las autoridades universitarias están conscientes de que el mundo UNI es uno muy variado, y de
                que esta casa de estudios es más que una planta docente, también es cooperación nacional e
                internacional, es vinculación y/o extensión con las comunidades más necesitadas, es deporte, es
                cultura, investigación y servicios empresariales y tecnológicos, etc., y la importancia histórica
                que representa para Nicaragua apoyar la decisión de establecer el PVIT, y existe consenso en que es
                una iniciativa que hay que llevarla hasta su implementación, sin mediar “tiquete de retorno”, donde
                el grueso de los cambios debe de seguir un modelo ‘bottom-up’, como se dijo antes, en que los gestores
                de dicho cambio son tanto los responsables de cada línea de trabajo, como los representantes de las
                facultades, pero movidos racionalmente por los retos que sus mercados les establece, y apuntar en todo
                momento a aquellas acciones que busquen la sostenibilidad a largo plazo.
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-6 col-sm-6 col-lg-3">
            <!--Estableciendo la url enviando como 1er parámetro el prefijo y de 2do parámetro las variables con su valores
            que tendrá esa url-->
            <a href="<?php echo e(url('/Nosotros', ['Departamento' => 'AE'])); ?>">
                <img src="<?php echo e(asset('../resources/Imagenes/Inicio/logos/LogoAE.svg')); ?>" alt="Logo de Atención Empresarial" class="img-fluid">
            </a>
        </div>
        <div class="col-6 col-sm-6 col-lg-3">
            <a href="<?php echo e(url('/Nosotros', ['Departamento' => 'BIOMASA'])); ?>">
                <img src="<?php echo e(asset('../resources/Imagenes/Inicio/logos/LogoBIOMASA.svg')); ?>" alt="Logo de BIOMASA" class="img-fluid">
            </a>
        </div>
        <div class="col-6 col-lg-3">
            <a href="<?php echo e(url('/Nosotros', ['Departamento' => 'EAUT'])); ?>">
                <img src="<?php echo e(asset('../resources/Imagenes/Inicio/logos/LogoEAUT.svg')); ?>" alt="Logo de EAUT" class="img-fluid">
            </a>
        </div>
        <div class="col-6 col-lg-3">
            <!--<a href="<?php echo e(url('/Nosotros', ['Departamento' => 'RedEmprendedores'])); ?>">-->
                <img src="<?php echo e(asset('../resources/Imagenes/Inicio/logos/LogoRedE.svg')); ?>" alt="Logo de Red de emprendedores" class="img-fluid">
            <!--</a>-->
        </div>
    </div>

    <div class="row mt-5 py-4 bg-gris">
        <div class="col-12 text-center">
            <h3 class="helvetica font-weight-bold">NUESTRAS CAPACITACIONES</h3>
            <br>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-6">
                    <img src="resources/Imagenes/Curso1.svg" alt="Curso 1">
                </div>
                <div class="col-12 col-sm-6 col-lg-6">
                    <img src="resources/Imagenes/Curso2.svg" alt="Curso 2">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-6">
                    <img src="resources/Imagenes/Curso3.svg" alt="Curso 3">
                </div>
                <div class="col-12 col-sm-6 col-lg-6">
                    <img src="resources/Imagenes/Curso4.svg" alt="Curso 4">
                </div>
            </div>
        </div>
    </div>

    <div class="row py-4">
        <div class="col-12 text-center">
            <h3 class="helvetica font-weight-bold">QUIENES NOS APOYAN</h3>
            <br>
            <div class="row justify-content-center">
                <div class="col-6 col-sm-3 col-lg-2">
                    <img src="<?php echo e(asset('../resources/Imagenes/Inicio/logos/LogoFAO.svg')); ?>" alt="Logo de FAO" class="img-fluid">
                </div>
                <div class="col-6 col-sm-3 col-lg-2">
                    <img src="<?php echo e(asset('../resources/Imagenes/Inicio/logos/LogoCSUCA.svg')); ?>" alt="Logo de CSUCA" class="img-fluid">
                </div>
                <div class="col-6 col-sm-3 col-lg-2">
                    <img src="<?php echo e(asset('../resources/Imagenes/Inicio/logos/LogoINTA.svg')); ?>" alt="Logo del INTA" class="img-fluid">
                </div>
                <div class="col-6 col-sm-3 col-lg-2">
                    <img src="<?php echo e(asset('../resources/Imagenes/Inicio/logos/LogoIPSA.svg')); ?>" alt="Logo del IPSA" class="img-fluid">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6 col-sm-4 col-lg-2">
                    <img src="<?php echo e(asset('../resources/Imagenes/Inicio/logos/LogoCNU.svg')); ?>" alt="Logo del CNU" class="img-fluid">
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <img src="<?php echo e(asset('../resources/Imagenes/Inicio/logos/LogoMEFCCA.svg')); ?>" alt="Logo del MEFCCA" class="img-fluid">
                </div>
                <div class="col-8 col-sm-4 col-lg-2">
                    <img src="<?php echo e(asset('../resources/Imagenes/Inicio/logos/LogoMINSA.svg')); ?>" alt="Logo del MINSA" class="img-fluid">                    
                </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Pagina Maestra.PaginaMaestraPrincipal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProyectoPVIT\resources\views/Inicio.blade.php ENDPATH**/ ?>