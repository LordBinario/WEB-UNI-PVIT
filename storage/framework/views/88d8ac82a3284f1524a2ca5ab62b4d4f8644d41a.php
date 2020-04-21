<?php $__env->startSection('Contenido'); ?>
    <div class="row">
        <div class="col-12 px-0">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="<?php echo e(asset('Imagenes/Inicio/SlideShow Principal/Imagen1.svg')); ?>" class="d-block w-100" alt="Imagen 1">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo e(asset('Imagenes/Inicio/SlideShow Principal/Imagen2.svg')); ?>" class="d-block w-100" alt="Imagen 2">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo e(asset('Imagenes/Inicio/SlideShow Principal/Imagen3.svg')); ?>" class="d-block w-100" alt="Imagen 3">
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

    <div class="row justify-content-center my-4 mb-0 wow fadeInDown">
        <div class="col-10">
            <h4 class="helvetica font-weight-bold text-center">BIENVENIDOS</h4>
            <br>
            <p class="helvetica font-weight-normal text-justify">
                Nuestro principal objetivo es hacer uso de la innovación tecnológica, para vincular la
                educación con el sector privado, instituciones del estado, organismos nacionales e
                internacionales, a través del fomento de proyectos sociales y de formación continua, elevando
                las capacidades y habilidades de los estudiantes, emprendedores, mipymes, empresas, para
                contribuir con el desarrollo del país. 
            </p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row">
                <div class="col-12 text-center">
                    <h4 class="helvetica font-weight-bold">Visualiza nuestras líneas de trabajo</h4>
                </div>
            </div>
            <div class="row justify-content-center mb-3 mb-md-0">
                <div class="col-4 col-sm-2 align-self-end text-right pr-0">
                    <h6 class="helvetica font-weight-normal">Clic sobre ellas</h6>
                </div>
                <div class="col-1 align-self-end pl-0">
                    <div class="spinner-grow bg-blue" role="status"></div>
                </div>
            </div>            
        </div>  
        <div class="col-6 col-md-3 col-lg-3 align-self-center wow fadeIn">
            
            <a href="<?php echo e(url('/Nosotros', ['Departamento' => 'AE'])); ?>">
                <img src="<?php echo e(asset('Imagenes/Inicio/logos/LogoAE.svg')); ?>" alt="Logo de Atención Empresarial" class="img-fluid">
            </a>
        </div>
        <div class="col-6 col-md-3 col-lg-3 align-self-center wow fadeIn">
            <a href="<?php echo e(url('/Nosotros', ['Departamento' => 'BIOMASA'])); ?>">
                <img src="<?php echo e(asset('Imagenes/Inicio/logos/LogoBIOMASA.svg')); ?>" alt="Logo de BIOMASA" class="img-fluid">
            </a>
        </div>
        <div class="col-6 col-md-3 col-lg-3 text-center mt-3 mt-md-0 wow fadeIn">
            <a href="<?php echo e(url('/Nosotros', ['Departamento' => 'EAUT'])); ?>">
                <img src="<?php echo e(asset('Imagenes/Inicio/logos/LogoEAUT.svg')); ?>" alt="Logo de EAUT" class="img-fluid w-75">
            </a>
        </div>
    </div>

    <div class="row mt-5 py-4 bg-gris">
        <div class="col-12 text-center">
            <h3 class="helvetica font-weight-bold">NUESTRAS CAPACITACIONES</h3>            
            <div class="row justify-content-center mb-3 mb-md-0">
                <div class="col-4 col-sm-2 align-self-end text-right pr-0">
                    <h6 class="helvetica font-weight-normal">Clic sobre ellas</h6>
                </div>
                <div class="col-1 text-left align-self-end pl-0">
                    <div class="spinner-grow bg-blue" role="status"></div>
                </div>
            </div> 
            <div class="row justify-content-center mt-2 mb-3">
                <a href="<?php echo e(url('/Servicios', ['Departamento' => 'AE'])); ?>" class="col-12 col-sm-9 col-md-5 col-lg-5">
                    <img src="<?php echo e(asset('Imagenes/Inicio/Curso1.svg')); ?>" alt="Curso 1" class="img-fluid">
                </a>
                <a href="<?php echo e(url('/Servicios', ['Departamento' => 'AE'])); ?>" class="col-12 col-sm-9 col-md-5 col-lg-5 mt-3 mt-md-0">
                    <img src="<?php echo e(asset('Imagenes/Inicio/Curso2.svg')); ?>" alt="Curso 2" class="img-fluid">
                </a>
            </div>
            
        </div>
    </div>

    <div class="row mt-3 bg-lightblue py-3">
        <div class="col-12 px-0 text-center">
            <div id="CarruselP-VIT" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#CarruselP-VIT" data-slide-to="0" class="active"></li>
                    <li data-target="#CarruselP-VIT" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-8 align-self-center">                                    
                                    <h3 class="helvetica font-weight-bold text-white">¿QUÉ SE DICE DEL P-VIT?</h3>
                                    <p class="helvetica font-weight-normal text-justify text-blue">
                                        Expresamos nuestro profundo agradecimiento por la excelente labor y buen desempeño que ha realizado el equipo del P-VIT, apoyando al Consejo Nacional de Ciencia y Tecnología (CONICYT) en diferentes actividades. Aprovecho la oportunidad para reiterar nuestro interés en continuar desarrollando iniciativas conjuntas en pro del crecimiento de la ciencia y tecnología en sus diversas escalas.
                                    </p>
                                </div>
                                <div class="col-12 col-md-3 align-self-start">
                                    <div class="row justify-content-center">
                                        <div class="col-8 col-sm-3 col-md-12">
                                            <img src="<?php echo e(asset('Imagenes/Inicio/logos/LogoCONICYT.png')); ?>" alt="Logo de FAO" class="img-fluid w-100">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <p class="helvetica font-weight-normal text-blue text-center mb-0">
                                                MSc. María Eunice Rivas Robleto                                       
                                            </p>  
                                            <p class="helvetica font-weight-normal text-blue text-center">
                                                Delegada para atender CONICYT                                        
                                            </p>
                                        </div>
                                    </div>              
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-8 align-self-center">                                
                                    <h3 class="helvetica font-weight-bold text-white">¿QUÉ SE DICE DEL P-VIT?</h3>
                                    <p class="helvetica font-weight-normal text-justify text-blue">
                                        Los cursos y posgrados relativos a la inocuidad de alimentos con la Universidad Nacional de Ingeniería (UNI), han dado sus resultados, fortaleciendo los conocimientos técnicos – científicos en cada uno de nuestros funcionarios que laboran en el ámbito de la protección y sanidad agropecuaria del país. Valoramos estas acciones como pasos muy relevantes para favorecer las bases y los principios de la inocuidad de alimentos, así como su aplicación a las condiciones de Nicaragua. 
                                    </p>
                                </div>
                                <div class="col-12 col-md-3 align-self-start">
                                    <div class="row justify-content-center">
                                        <div class="col-8 col-sm-3 col-md-12">
                                            <img src="<?php echo e(asset('Imagenes/Inicio/logos/LogoFAO.svg')); ?>" alt="Logo de FAO" class="img-fluid w-100">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <p class="helvetica font-weight-normal text-blue text-center mb-0">
                                                Iván Felipe León Ayala
                                            </p>
                                            <p class="helvetica font-weight-normal text-blue text-center">
                                                Representante de FAO Nicaragua
                                            </p>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#CarruselP-VIT" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#CarruselP-VIT" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12 text-center">
            <h3 class="helvetica font-weight-bold">QUIENES NOS APOYAN</h3>
            <div class="NoExiste">
                <div>
                    <img src="<?php echo e(asset('Imagenes/Inicio/logos/LogoFAO.svg')); ?>" alt="Logo de FAO" class="img-fluid w-100">
                </div>
                <div>
                    <img src="<?php echo e(asset('Imagenes/Inicio/logos/LogoINTA.svg')); ?>" alt="Logo del INTA" class="img-fluid w-100">
                </div>
                <div>
                    <img src="<?php echo e(asset('Imagenes/Inicio/logos/LogoIPSA.svg')); ?>" alt="Logo del IPSA" class="img-fluid w-100">
                </div>
                <div>
                    <img src="<?php echo e(asset('Imagenes/Inicio/logos/LogoCNU.svg')); ?>" alt="Logo del CNU" class="img-fluid w-100">
                </div>
                <div>
                    <img src="<?php echo e(asset('Imagenes/Inicio/logos/LogoMEFCCA.svg')); ?>" alt="Logo del MEFCCA" class="img-fluid w-100">
                </div>
                <div>
                    <img src="<?php echo e(asset('/Imagenes/Inicio/logos/LogoMINSA.svg')); ?>" alt="Logo del MINSA" class="img-fluid w-100">
                </div>
                <div>
                    <img src="<?php echo e(asset('Imagenes/Inicio/logos/LogoFISE.svg')); ?>" alt="Logo del FISE" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </div>

    <?php $__env->startSection('Scripts'); ?>
        ##parent-placeholder-381e3298b2b8f6caeb2208b57d805ada38402f0b##
        
            <script type="text/javascript" charset="utf-8">
                $(document).ready(function(){
                    $('.NoExiste').slick({
                        arrows: true,
                        autoplay: true,
                        autoplaySpeed: 2000,
                        accessibility: true,
                        infinite: true,
                        mobileFirst: true,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        responsive: [
                            {
                                breakpoint: 540,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 1,
                                }
                            },
                            {
                                breakpoint: 720,
                                settings: {
                                    slidesToShow: 3,
                                    slidesToScroll: 1,
                                }
                            },
                            {
                                breakpoint: 960,
                                settings: {
                                    slidesToShow: 4,
                                    slidesToScroll: 1,
                                }
                            },
                            {
                                breakpoint: 1140,
                                settings: {
                                    slidesToShow: 5,
                                    slidesToScroll: 1,
                                }
                            }
                        ]
                    });
                });
            </script>
            <script>
                new WOW().init();
            </script>
        
    <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Pagina Maestra.PaginaMaestraPrincipal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProyectoPVIT\ProyectoPVIT\resources\views/Inicio.blade.php ENDPATH**/ ?>