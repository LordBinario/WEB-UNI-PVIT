@extends('Pagina Maestra.PaginaMaestraPrincipal')

@switch($Departamento)
    @case("P-VIT")
        @php
            $Mision = "El P-VIT es una instancia de la Universidad Nacional de Ingeniería, comprometida con el ambiente y la sociedad; dedicada a la vinculación e innovación tecnológica con el sector privado, instituciones del estado, organismos nacionales e internacionales a través del fomento de proyectos sociales, formación continua que van desde capacitaciones, talleres, posgrado y maestrías, fomento al emprendimiento y la prestación de servicios profesionales contribuyendo al desarrollo del país.";

            $Vision = "El P-VIT de la UNI, se consolida como una instancia que fomenta la vinculación e innovación tecnológica, para el mejoramiento de la calidad de vida de la sociedad nicaragüense, en armonía con el ambiente.";
            
            $FinesObjetivos[0] = "Vincular a la UNI con el sector privado, instituciones y organismos nacionales e internacionales.";

            $FinesObjetivos[1] = "Transferir conocimientos al sector privado, instituciones y organismos para el desarrollo sostenible del país.";

            $FinesObjetivos[2] = "Fomentar el emprendimiento a lo interno y externo de la institución para la creación de nuevos negocios.";

            $FinesObjetivos[3] = "Contribuir a la solución de problemas sociales en el país en armonía con el ambiente.";

            $Texto[0] = "El Programa de Vinculación e Innovación Tecnológica (P-VIT), ha realizado un sin número de
                acciones de trabajo pensando en que nos espera laboralmente en un futuro.";

            $Texto[1] = "El objetivo del P-VIT, es capacitar a las personas correctas para la posición correcta, haciendo las cosas
                correctas para lograr los objetivos de sus empresas, instituciones u organismos.";

            $Texto[2] = "El P-VIT, dentro de sus principales objetivos establece la conformación de sus tres líneas de trabajo para poder brindar soluciones a diversos temas, siempre con un enfoque de desarrollo a través del fomento de la innovación y la vinculación universidad y sociedad para que todos tengan acceso a la transferencia de conocimientos y de esta manera con experiencia se logre generar nuevo conocimiento para elevar las capacidades y habilidades de todas las personas, erradicando con la pobreza.";

            $Banner = "BannerPVIT.";

            $Depto = "Programa de Vinculación e Innovación Tecnológica (P-VIT)";
        @endphp
    @break
    @case("BIOMASA")
        @php
            $Mision = "Generar, desarrollar y divulgar los resultados de las investigaciones sobre la dinámica física, química y biológica del funcionamiento de la tecnología en los sistemas de tratamientos de los desechos líquidos y sólidos de origen agroindustrial o domésticos para la Tratabilidad de las aguas.";

            $Vision = "Ser una línea de trabajo líder y autosostenible, en la investigación y el desarrollo de certificaciones de nuevas tecnologías en los sistemas de tratamientos de desechos líquidos y sólidos en nuestro país.";

            $FinesObjetivos[0] = "Desarrollar nuevas aplicaciones tecnológicas para el tratamiento de desechos de origen agroindustriales y domésticos que mejoren y protejan el medio ambiente.";

            $FinesObjetivos[1] = "Generar transferencia tecnológica a partir de la construcción de unidades demostrativas en diferentes escalas con el fin de verificar la Tratabilidad de aguas residuales domésticas e industriales en reactores o Biodigestores, para el aprovechamiento de sus subproductos (Biogás y abono líquido). involucrando a diferentes instancias a nivel gubernamental y privados.";

            $Texto[0] = "Es una línea de trabajo dedicado a la investigación, desarrollo, apropiación, innovación, transferencia y gestión tecnológica para el uso de los recursos biomasicos, contribuyendo a la generación, difusión de conocimientos y al desarrollo socio económico del país.";
        
            $Banner = "BannerBIOMASA.";

            $Depto = "BIOMASA";
        @endphp
    @break
    @case("EAUT")
        @php
            $Mision = "Generar, transferir y divulgar conocimientos y tecnologías que permiten identificar y valorar los estados de equilibrio/desequilibrio ambiental en los escenarios del territorio, producto de la interacción de los individuos con su medio ambiente, contribuyendo de esta forma al desarrollo sostenible.";

            $Vision = "Consolidarse como una línea de trabajo autosostenible con metodologías de investigación especializada, formación posgraduada y calidad de servicios (académicos y profesionales), brindados a instituciones públicas y privadas.";

            $FinesObjetivos[0] = "Contribuir a cualificar ambientalmente las ciudades y los asentamientos humanos a través de un enfoque integral del ambiente urbano y territorial sustentado en la ínter, multi y transdisciplina, desarrollando actividades de Investigación, Docencia y Consultoría.";

            $Texto[0] = "EAUT es una línea de trabajo del Programa de Vinculación e Innovación Tecnológica (P-VIT) de la Universidad Nacional de Ingeniería, cuyas actividades se desarrollan en el marco de la problemática del hábitat de los asentamientos humanos y el medio ambiente, mediante una gestión fundamentada en los avances teóricos, en los métodos y las técnicas de análisis ambiental y del ordenamiento ambiental del territorio.";

            $Banner = "BannerEAUT.";

            $Depto = "Estudios Ambientales Urbano Territoriales (EAUT)";
        @endphp
    @break
    @case("AE")
        @php
            $Mision = "Vincular a las empresas con la universidad, para brindar servicios de desarrollo empresarial a: estudiantes, emprendedores, pymes y empresarios, generando capacidades individuales y colectivas; creando y desarrollando negocios más sostenibles en el tiempo y con mayor capacidad de generar empleo, para contribuir al desarrollo económico local y nacional, mediante asesoramiento, capacitaciones, seminarios, investigaciones y el acompañamiento a la Red Emprendedores UNI, para la conformación de nuevas empresas y la gestión de crédito.";

            $Vision = "Ser una entidad comprometida con la transferencia de conocimiento fortaleciendo las capacidades de los emprendedores, mipymes para la creación de nuevas empresas, mejorando capacidades empresariales en su entorno competitivo.";

            $FinesObjetivos[0] = "Promover el desarrollo de proyectos de vida y espíritu empresarial en los estudiantes, profesionales y empresarios para contribuir a reducir el desempleo del país, mejorando las condiciones de vida de la sociedad y erradicar la pobreza.";

            $Texto[0] = "Es una línea de trabajo del P-VIT, que apoya la creación y consolidación de nuevas empresas en Nicaragua.";

            $Texto[1] = "El área de acción y de impacto de Atención Empresarial es a nivel nacional, donde se benefician estudiantes universitarios, egresados, profesionales y Mipymes.";

            $Texto[2] = "La generación de nuevos emprendimientos y el impulso del espíritu empresarial, se ha convertido, para la Universidad Nacional de Ingeniería (UNI), en un reto. Por lo que Atención Empresarial tiene como finalidad promover y desarrollar el espíritu empresarial generando la creación y consolidación de empresas, con lo que se pretende contribuir a reducir el desempleo en el país, a mejorar las condiciones de vida del beneficiario y su familia, facilitar los vínculos empresariales generados por la empresa, facilitar un entorno más favorable a los emprendedores y emprendedoras para la implementación de los Planes de Negocios.";

            $Texto[3] = "AE realiza visita de seguimiento a emprendedores beneficiados por el fondo “Creación de Empresa”, para saber la situación actual en la que se encuentra y en que se le puede colaborar.";

            $Banner = "BannerAE.";

            $Depto = "Atención Empresarial (AE)";
        @endphp
    @break
@endswitch

@section('Contenido')
    {{--Enviando variables con sus valores a vista parcial, enviando variables con su valor en forma de arreglo--}}
    {{--al enviar varias variables se separan con el signo "=>"--}}
    {{--@include() resive como 1er valor la ruta de la vista parcial y como 2do valor la lista de variables--}}
    @include('Vista parcial.Nosotros1', [$Texto[0] => $Banner])
        <div class="row justify-content-around justify-content-xl-center py-4 bg-gris">
            <div class="col-10 col-sm-6 col-md-4 col-xl-3">
                <div class="row justify-content-sm-center align-items-end wow fadeInDown">
                    <div class="col-4">
                        <img src="{{asset('Imagenes/Nosotros/Iconos/IconoMision.svg')}}" alt="Icono de la Misión" class="img-fluid">
                    </div>
                    <div class="col-8 col-sm-7 col-lg-8 text-center">
                        <h3 class="helvetica font-weight-bold text-blue">Misión</h3>
                    </div>
                </div>       
                <div class="row justify-content-sm-center">
                    <div class="col-4 py-1 w-100 bg-blue">                    
                    </div>
                    <div class="col-8 col-sm-7 py-1 w-100 bg-lightblue">
                    </div>
                </div>        
                <div class="row">
                    <div class="col-12">
                        <p class="helvetica font-weight-normal text-justify text-blue mt-4">
                            {{$Mision}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-10 col-sm-6 col-md-4 col-xl-3 my-5 my-sm-0 mx-xl-5">
                <div class="row justify-content-sm-center align-items-end wow fadeInDown">
                    <div class="col-4">
                        <img src="{{asset('Imagenes/Nosotros/Iconos/IconoVision.svg')}}" alt="Icono de la Visión" class="img-fluid">
                    </div>
                    <div class="col-8 col-sm-7 col-lg-8 text-center">
                        <h3 class="helvetica font-weight-bold text-blue">Visión</h3>
                    </div>
                </div>       
                <div class="row justify-content-sm-center">
                    <div class="col-4 py-1 w-100 bg-blue">                    
                    </div>
                    <div class="col-8 col-sm-7 py-1 w-100 bg-lightblue">
                    </div>
                </div>          
                <div class="row">
                    <div class="col-12">
                        <p class="helvetica font-weight-normal text-justify text-blue mt-4">
                            {{$Vision}}
                        </p>
                    </div>
                </div>           
            </div>

            <div class="col-10 col-sm-6 col-md-4 col-xl-3 mt-sm-5 mt-md-0">
                <div class="row justify-content-sm-center align-items-end wow fadeInDown">
                    <div class="col-4">
                        <img src="{{asset('Imagenes/Nosotros/Iconos/IconoFines.svg')}}" alt="Icono de los Fines" class="img-fluid">
                    </div>
                    <div class="col-8 col-sm-7 col-lg-8 text-center">
                        <h3 class="helvetica font-weight-bold text-blue">Fines y Objetivos</h3>
                    </div>
                </div>       
                <div class="row justify-content-sm-center">
                    <div class="col-4 py-1 w-100 bg-blue">                    
                    </div>
                    <div class="col-8 col-sm-7 py-1 w-100 bg-lightblue">
                    </div>
                </div>       
                <div class="row">
                    <div class="col-12">
                        @foreach($FinesObjetivos as $Objetivos)
                                <li class="helvetica font-weight-normal text-blue">
                                    {{$Objetivos}}
                                </li>
                        @endforeach
                    </div>
                </div>            
            </div>

        </div>
@endsection

@section('Scripts')
    @parent
    <script>
        new WOW().init();
    </script>
@endsection