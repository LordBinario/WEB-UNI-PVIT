@extends('Pagina Maestra.PaginaMaestraPrincipal')

@php 
    $TotalCurso4 = 0;
@endphp
@switch($Departamento)
    @case("AE")
        @php
            $IconoCurso1 = "IconoAsesorias.";
            $NombreCurso1 = "Asesorías";
            $TotalCurso1 = 9;
            $Curso1[0] = "Planes de negocios.";
            $Curso1[1] = "Generación de ideas.";
            $Curso1[2] = "Técnicas de creatividad.";
            $Curso1[3] = "Gestión de la innovación.";
            $Curso1[4] = "Herramientas de gestión.";
            $Curso1[5] = "Gestión del talento humano.";
            $Curso1[6] = "Modelos de negocios.";
            $Curso1[7] = "Administración y control de gastos.";
            $Curso1[8] = "Identidad corporativa.";

            $IconoCurso2 = "IconoCursos.";
            $NombreCurso2 = "Cursos";
            $TotalCurso2 = 11;
            $Curso2[0] = "Redacción técnica.";
            $Curso2[1] = "Informática y sistemas.";
            $Curso2[2] = "Gestión de la innovación.";
            $Curso2[3] = "Gestión Empresarial.";
            $Curso2[4] = "Gestión de la calidad.";
            $Curso2[5] = "Gestión del talento humano.";
            $Curso2[6] = "Excel básico intermedio.";
            $Curso2[7] = "Excel avanzado financiero.";
            $Curso2[8] = "Excel para pymes.";
            $Curso2[9] = "Contabilidad básica para pymes.";
            $Curso2[10] = "Finanzas para no financiero.";

            $IconoCurso3 = "IconoAsistencia.";
            $NombreCurso3 = "Asistencia técnica";
            $TotalCurso3 = 7;
            $Curso3[0] = "Mercadeo.";
            $Curso3[1] = "Administración.";
            $Curso3[2] = "Producción.";
            $Curso3[3] = "Finanzas.";
            $Curso3[4] = "Capacitación de capital humano.";
            $Curso3[5] = "Asesoría técnica a microempresarios y empresarios.";
            $Curso3[6] = "Consultoría especializada.";

            $IconoCurso4 = "IconoServicios.";
            $NombreCurso4 = "Creación de empresas";
            $TotalCurso4 = 4;
            $Curso4[0] = "Apoyo a emprendedores para desarrollar y mejorar su idea.";
            $Curso4[1] = "Apoyo en la elaboración de planes de negocios.";
            $Curso4[2] = "Capacitación especializada empresarial.";
            $Curso4[3] = "Capital semilla para emprendedores y mipymes.";
        @endphp
    @break
    @case("BIOMASA")
        @php
            $IconoCurso1 = "IconoAsistencia.";
            $NombreCurso1 = "Asistencia técnica";
            $TotalCurso1 = 4;
            $Curso1[0] = "Análisis físicos-químicos y biológicos que se brinda a la agroindustria nacional para el monitoreo de sus efluentes o de sus sistemas de tratamiento para cumplir con las reglamentaciones del decreto ambiental 21-2017.";
            $Curso1[1] = "Monitoreos y diseños de sistemas de tratamiento de efluentes líquidos y sólidos de procesos agroindustrial o de desechos domésticos.";
            $Curso1[2] = "Estudio de Impacto Ambiental, Programa de Gestión Ambiental, Diagnostico de la generación de desechos líquidos y sólidos.";
            $Curso1[3] = "Diseño y supervisión de la construcción de Sistema de Tratamiento de aguas residuales domésticas e industriales.";

            $IconoCurso2 = "IconoServicios.";
            $NombreCurso2 = "Servicios";
            $TotalCurso2 = 4;
            $Curso2[0] = "Asesoría en proyectos para la producción de compost.";
            $Curso2[1] = "Capacitación en la operación y mantenimiento de sistemas de trabajo.";
            $Curso2[2] = "Análisis de laboratorios, caracterización de aguas residuales, domésticas, industriales y desechos sólidos.";
            $Curso2[3] = "Supervisión de la construcción de los sistemas diseñados (Aguas residuales, etc..).";
        
            $IconoCurso3 = "IconoCursos.";
            $NombreCurso3 = "Cursos";
            $TotalCurso3 = 3;
            $Curso3[0] = "Muestreo y análisis físico-químicos en aguas residuales.";
            $Curso3[1] = "Biofiltros";
            $Curso3[2] = "Taller de biodigestores y biogas.";
        @endphp
    @break
    @case("EAUT")
        @php 
            $IconoCurso1 = "IconoPosgrado.";
            $NombreCurso1 = "Posgrado";
            $TotalCurso1 = 11;
            $Curso1[0] = "Gestión del riesgo.";
            $Curso1[1] = "Gestión del cambio climático.";
            $Curso1[2] = "Gestión ambiental.";
            $Curso1[3] = "Desarrollo urbano.";
            $Curso1[4] = "Vivienda social y calidad de vida.";
            $Curso1[5] = "Desarrollo ambiental turístico.";
            $Curso1[6] = "Planificación de proyectos ambientales.";
            $Curso1[7] = "Gerencia de proyectos ambientales.";
            $Curso1[8] = "Herramientas para la gestión del riesgo.";
            $Curso1[9] = "Evaluación ambiental de los desastres.";
            $Curso1[10] = "Manejo post desastre.";

            $IconoCurso2 = "IconoConsultoria.";
            $NombreCurso2 = "Consultorías ambientales";
            $TotalCurso2 = 12;
            $Curso2[0] = "Estudio de impacto ambiental de proyectos de desarrollo.";
            $Curso2[1] = "Diseño de sistemas de gestión ambiental municipal y/o empresarial.";
            $Curso2[2] = "Evaluación de sitios para el emplazamiento de proyectos de desarrollo.";
            $Curso2[3] = "Evaluación de calidad de vida en asentamientos humanos.";
            $Curso2[4] = "Evaluación de ciclo de vida de proyectos.";
            $Curso2[5] = "Planificación territorial con énfasis en riesgo.";
            $Curso2[6] = "Planes ambientales turísticos.";
            $Curso2[7] = "Planes de ordenamiento y desarrollo municipal.";
            $Curso2[8] = "Planes de respuesta municipales ante desastres.";
            $Curso2[9] = "Formulación de proyectos de agua potable y saneamiento.";
            $Curso2[10] = "Planes de manejo de desechos Sólidos.";
            $Curso2[11] = "Asesorías en seguimiento de proyectos de agua potable y saneamiento.";

            $IconoCurso3 = "IconoCapacitacion.";
            $NombreCurso3 = "Capacitaciones especializadas";
            $TotalCurso3 = 4;
            $Curso3[0] = "Defensa y protección de recursos naturales.";
            $Curso3[1] = "Educación ambiental en gestión de riesgo.";
            $Curso3[2] = "Educación ambiental en manejo de desechos sólidos.";
            $Curso3[3] = "Educación ambiental para la conservación  de los recursos hídricos.";

            $IconoCurso4 = "IconoEspecialidad.";
            $NombreCurso4 = "Especializaciones";
            $TotalCurso4 = 4;
            $Curso4[0] = "Gestión integral del riesgo y adaptación al cambio climático.";
            $Curso4[1] = "Desarrollo urbano territorial.";
            $Curso4[2] = "Gestión ambiental de alternativas tecnológicas.";
            $Curso4[3] = "Prevención y mitigación de desastres.";
        @endphp
    @break
@endswitch

@section('Contenido')
    @include('Vista parcial.Servicios1')

    <div class="d-block d-md-none">
        <div class="row mt-3">
            <div class="col-12 text-center">
                <h4 class="helvetica font-weight-normal text-blue">Clic en las siguientes opciones:</h4>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6">   
                <div class="accordion pb-3" id="accordionExample">
                    <div class="card border border-secondary">
                        <a data-toggle="collapse" href="#CollapCursos1" role="button" aria-expanded="false" aria-controls="CollapCursos1">
                            <h2>
                                <div class="row justify-content-center mb-0 pb-0">
                                    <div class="col-9 text-center pt-2">
                                        <img src="{{asset('Imagenes/Servicios/' . $IconoCurso1 . 'svg')}}" alt="Icono de curso 1" class="img-fluid">
                                        <h4 class="helvetica font-weight-bold text-blue">{{$NombreCurso1}}</h4>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-2 col-sm-2 col-md-1 ml-1 w-100 bg-blue pt-1"></div>
                                    <div class="col-3 col-sm-2 col-md-1 w-100 bg-lightblue pt-1"></div>
                                </div>                                
                            </h2>    
                        </a>            
                        <div id="CollapCursos1" class="collapse">
                            <div class="card-body">
                                <ul>
                                    @for($i = 0; $i < $TotalCurso1; $i++)
                                        <li class="helvetica font-weight-normal text-blue">{{$Curso1[$i]}}</li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card border border-secondary">
                        <a data-toggle="collapse" href="#CollapCursos2" role="button" aria-expanded="false" aria-controls="CollapCursos2">
                            <h2>
                                <div class="row justify-content-center mb-0 pb-0">
                                    <div class="col-9 text-center pt-2">
                                        <img src="{{asset('Imagenes/Servicios/' . $IconoCurso2 . 'svg')}}" alt="Icono de curso 2" class="img-fluid">
                                        <h4 class="helvetica font-weight-bold text-blue">{{$NombreCurso2}}</h4>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-2 col-sm-2 col-md-1 ml-1 w-100 bg-blue pt-1"></div>
                                    <div class="col-3 col-sm-2 col-md-1 w-100 bg-lightblue pt-1"></div>
                                </div>                                
                            </h2>    
                        </a>            
                        <div id="CollapCursos2" class="collapse">
                            <div class="card-body">
                                <ul>
                                    @for($i = 0; $i < $TotalCurso2; $i++)
                                        <li class="helvetica font-weight-normal text-blue">{{$Curso2[$i]}}</li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card border border-secondary">
                        <a data-toggle="collapse" href="#CollapCursos3" role="button" aria-expanded="false" aria-controls="CollapCursos3">
                            <h2>
                                <div class="row justify-content-center mb-0 pb-0">
                                    <div class="col-9 text-center pt-2">
                                        <img src="{{asset('Imagenes/Servicios/' . $IconoCurso3 . 'svg')}}" alt="Icono de curso 3" class="img-fluid">
                                        <h4 class="helvetica font-weight-bold text-blue">{{$NombreCurso3}}</h4>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-2 col-sm-2 col-md-1 ml-1 w-100 bg-blue pt-1"></div>
                                    <div class="col-3 col-sm-2 col-md-1 w-100 bg-lightblue pt-1"></div>
                                </div>                                
                            </h2>    
                        </a>            
                        <div id="CollapCursos3" class="collapse">
                            <div class="card-body">
                                <ul>
                                    @for($i = 0; $i < $TotalCurso3; $i++)
                                        <li class="helvetica font-weight-normal text-blue">{{$Curso3[$i]}}</li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                    </div>

                    @if($TotalCurso4 > 0)
                        <div class="card border border-secondary">
                            <a data-toggle="collapse" href="#CollapCursos4" role="button" aria-expanded="false" aria-controls="CollapCursos4">
                                <h2>
                                    <div class="row justify-content-center mb-0 pb-0">
                                        <div class="col-9 text-center pt-2">
                                            <img src="{{asset('Imagenes/Servicios/' . $IconoCurso4 . 'svg')}}" alt="Icono de curso 4" class="img-fluid">
                                            <h4 class="helvetica font-weight-bold text-blue">{{$NombreCurso4}}</h4>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-2 col-sm-2 col-md-1 ml-1 w-100 bg-blue pt-1"></div>
                                        <div class="col-3 col-sm-2 col-md-1 w-100 bg-lightblue pt-1"></div>
                                    </div>                                
                                </h2>    
                            </a>            
                            <div id="CollapCursos4" class="collapse">
                                <div class="card-body">
                                    <ul>
                                        @for($i = 0; $i < $TotalCurso4; $i++)
                                            <li class="helvetica font-weight-normal text-blue">{{$Curso4[$i]}}</li>
                                        @endfor
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="d-none d-md-block">
        <div class="row py-4 bg-gris">
            <div class="col-12">
                <div class="card-deck">
                    <div class="card bg-transparent border-0">
                        <img src="{{asset('Imagenes/Servicios/' . $IconoCurso1 . 'svg')}}" alt="Icono de curso 1" class="img-fluid">                
                        <div class="card-body">  
                            <div class="row justify-content-center align-items-end">      
                                {{--<div class="col-md-12 text-center px-0">
                                    <img src="{{asset('../resources/Imagenes/Servicios/' . $IconoCurso1 . 'svg')}}" alt="Icono de curso 1" class="img-fluid">
                                </div>--}}
                                <div class="col-md-12 text-center px-0">
                                    <h4 class="helvetica font-weight-bold">
                                        {{$NombreCurso1}}
                                    </h4>
                                </div>
                            </div>     
                            <div class="row justify-content-center mt-1 mb-0">
                                <div class="col-md-4 col-xl-3 py-1 w-100 bg-blue">                    
                                </div>
                                <div class="col-md-6 col-xl-4 py-1 w-100 bg-lightblue">
                                </div>
                            </div>        
                            <div class="row justify-content-center mt-0">
                                <div class="col-md-12 col-xl-9 px-0">
                                    <ul>
                                        @for($i = 0; $i < $TotalCurso1; $i++)
                                            <li class="helvetica font-weight-normal text-blue mt-2">
                                                {{$Curso1[$i]}}
                                            </li>
                                        @endfor
                                    </ul>
                                </div>
                            </div>              
                        </div>
                    </div>
                    <div class="card bg-transparent border-0">
                        <img src="{{asset('Imagenes/Servicios/' . $IconoCurso2 . 'svg')}}" alt="Icono de curso 2" class="img-fluid">
                        <div class="card-body">
                            <div class="row justify-content-center align-items-end">      
                                {{--<div class="col-lg-12 text-center">
                                    <img src="{{asset('../resources/Imagenes/Servicios/' . $IconoCurso2 . 'svg')}}" alt="Icono de curso 2" class="img-fluid">
                                </div>--}}
                                <div class="col-lg-12 text-center">
                                    <h4 class="helvetica font-weight-bold">
                                        {{$NombreCurso2}}
                                    </h4>
                                </div>
                            </div>              
                            <div class="row justify-content-center mt-1 mb-0">
                                <div class="col-md-4 col-xl-3 py-1 w-100 bg-blue">                    
                                </div>
                                <div class="col-md-6 col-xl-4 py-1 w-100 bg-lightblue">
                                </div>
                            </div>        
                            <div class="row justify-content-center mt-0">
                                <div class="col-md-12 col-xl-9 px-0">
                                    <ul>
                                        @for($i = 0; $i < $TotalCurso2; $i++)
                                            <li class="helvetica font-weight-normal text-blue mt-2">
                                                {{$Curso2[$i]}}
                                            </li>
                                        @endfor
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-transparent border-0">
                        <img src="{{asset('Imagenes/Servicios/' . $IconoCurso3 . 'svg')}}" alt="Icono de curso 3" class="img-fluid">
                        <div class="card-body">
                            <div class="row justify-content-center align-items-end">       
                                {{--<div class="col-md-7 text-center px-0 mx-auto">
                                    <img src="{{asset('../resources/Imagenes/Servicios/' . $IconoCurso3 . 'svg')}}" alt="Icono de curso 3" class="img-fluid">
                                </div>--}}
                                <div class="col-md-12 text-center px-0">
                                    <h4 class="helvetica font-weight-bold">
                                        {{$NombreCurso3}}
                                    </h4>
                                </div>
                            </div>
                            <div class="row justify-content-center mt-1 mb-0">
                                <div class="col-md-4 col-xl-3 py-1 w-100 bg-blue">                    
                                </div>
                                <div class="col-md-6 col-xl-4 py-1 w-100 bg-lightblue">
                                </div>
                            </div>        
                            <div class="row justify-content-center mt-0">
                                <div class="col-12 col-xl-9">
                                    <ul>
                                        @for($i = 0; $i < $TotalCurso3; $i++)
                                            <li class="helvetica font-weight-normal text-blue mt-2">
                                                {{$Curso3[$i]}}
                                            </li>
                                        @endfor
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($TotalCurso4 > 0)
                        <div class="card bg-transparent border-0">
                            <img src="{{asset('Imagenes/Servicios/' . $IconoCurso4 . 'svg')}}" alt="Icono de curso 4" class="img-fluid">
                            <div class="card-body">
                                <div class="row justify-content-center align-items-end">    
                                    {{--<div class="col-lg-12 text-center">
                                        <img src="{{asset('../resources/Imagenes/Servicios/' . $IconoCurso4 . 'svg')}}" alt="Icono de curso 4" class="img-fluid">
                                    </div>--}}
                                    <div class="col-lg-12 text-center px-0">
                                        <h4 class="helvetica font-weight-bold">
                                            {{$NombreCurso4}}
                                        </h4>
                                    </div>
                                </div>
                                <div class="row justify-content-center mt-1 mb-0">
                                    <div class="col-md-4 col-xl-3 py-1 w-100 bg-blue">                    
                                    </div>
                                    <div class="col-md-6 col-xl-4 py-1 w-100 bg-lightblue">
                                    </div>
                                </div>        
                                <div class="row justify-content-center mt-0">
                                    <div class="col-12 col-xl-9 px-0">
                                        <ul>
                                            @for($i = 0; $i < $TotalCurso4; $i++)
                                                <li class="helvetica font-weight-normal text-blue mt-2">
                                                    {{$Curso4[$i]}}
                                                </li>
                                            @endfor
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
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