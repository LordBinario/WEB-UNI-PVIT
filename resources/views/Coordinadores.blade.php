@extends('Pagina Maestra.PaginaMaestraPrincipal')

@php
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
@endphp

@section('Contenido')
    @include('Vista parcial.BannerCoordinadoresTexto')

    <div class="container-fluid">           
        <div class="row justify-content-center py-5 d-block d-sm-none d-lg-block">
            <div class="col-12 text-center">
                <h4 class="helvetica font-weight-normal">Director del P-VIT y coordinadores de línea</h4>
            </div>
            <div class="card-deck">
                @foreach($Depto as $Division)                    
                        <a href="{{url('/Coordinador', ['Departamento' => $Division, 'Coordinador' => $Cargo[$i]])}}" class="card">    
                            <img style="z-index: 1;" src="{{asset('Imagenes/Coordinadores/'. $FotoCoordinador[$i] . '.svg')}}" alt="Imagen de Coordinador" class="card-img-top">                           
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
                                                {{$CoordinadorDepto[$i]}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-3 col-sm-4 col-lg-2 text-right px-0 mr-1 pb-2">
                                            <img src="{{asset('Imagenes/Inicio/Iconos footer/Telefono.svg')}}" alt="Icono de telefono" class="img-fluid w-50">
                                        </div>
                                        <div class="col-8 col-lg-8 align-self-center px-1">
                                            <p class="helvetica text-white font-weight-normal mb-1">
                                                {{--El switch compara los valores de cada cargo o de cada division que compone al P-VIT--}}
                                                {{--Al encontrar el valore correspondiente inicializa la variable "$j" para usarla como valor inicial en la directiva "@for"--}}
                                                @switch($Division) 
                                                    @case('P-VIT')
                                                        @php 
                                                            $j = 0;
                                                        @endphp
                                                    @break
                                                    @case('AE')
                                                        @php 
                                                            $j = 1;
                                                        @endphp
                                                    @break
                                                    @case('EAUT')
                                                        @php 
                                                            $j = 2;
                                                        @endphp
                                                    @break
                                                    @case('BIOMASA')
                                                        @php 
                                                            $j = 3;
                                                        @endphp
                                                    @break
                                                @endswitch
                                                {{--La variable "$x" toma el valor de "$j" q lo recibe en la directiva "@switch" y como solo se requiere recorrer el ciclo 1 sola vez--}}
                                                {{--el valor de la variable "$x" se compara con la suma de "($j + 1)"--}}
                                                @for($x = $j; $x < ($j + 1); $x++)
                                                    {{$TelefonoCoordinador[$x]}}
                                                @endfor
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-3 col-sm-2 col-lg-2 text-center px-0">
                                            <img src="{{asset('Imagenes/Inicio/Iconos footer/Correo.svg')}}" alt="Icono de correo" class="img-fluid w-50">
                                        </div>
                                        <div class="col-9 col-lg-10 text-lg-center px-0">
                                            @switch($Division) 
                                                @case('P-VIT')
                                                    @php 
                                                        $j = 0;
                                                        $y = 2;
                                                    @endphp
                                                @break
                                                @case('AE')
                                                    @php 
                                                        $j = 3;
                                                        $y = 4;
                                                    @endphp
                                                @break
                                                @case('EAUT')
                                                    @php 
                                                        $j = 4;
                                                        $y = 6;
                                                    @endphp
                                                @break
                                                @case('BIOMASA')
                                                    @php 
                                                        $j = 6;
                                                        $y = 8;
                                                    @endphp
                                                @break
                                            @endswitch
                                            @for($x = $j; $x < $y; $x++)
                                                <p class="helvetica text-white font-weight-normal mb-1">
                                                    {{$CorreoCoordinadorD[$x]}}
                                                </p>                                            
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>                     
                        </a>
                    @php
                        $i += 1;
                    @endphp
                @endforeach
            </div>
        </div>

        <div class="row justify-content-center py-5 d-none d-sm-block d-lg-none">
            <div class="col-12 text-center">
                <h4 class="helvetica font-weight-normal">Director del P-VIT y coordinadores de línea</h4>
            </div>
            <div class="card-deck">
                @for($i = 0; $i < 2; $i++)                    
                    <a href="{{url('/Coordinador', ['Departamento' => $Depto[$i], 'Coordinador' => $Cargo[$i]])}}" class="card">    
                        <img style="z-index: 1;" src="{{asset('Imagenes/Coordinadores/'. $FotoCoordinador[$i] . '.svg')}}" alt="Imagen de Coordinador" class="card-img-top">
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
                                            {{$CoordinadorDepto[$i]}}
                                        </p>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-sm-2 col-lg-2 text-right px-0 mr-1 pb-2">
                                        <img src="{{asset('Imagenes/Inicio/Iconos footer/Telefono.svg')}}" alt="Icono de telefono" class="img-fluid w-50">
                                    </div>
                                    <div class="col-sm-8 col-lg-8 align-self-center px-1">
                                        <p class="helvetica text-white font-weight-normal mb-1">
                                                {{--El switch compara los valores de cada cargo o de cada division que compone al P-VIT--}}
                                                {{--Al encontrar el valore correspondiente inicializa la variable "$j" para usarla como valor inicial en la directiva "@for"--}}
                                                @switch($Depto[$i]) 
                                                    @case('P-VIT')
                                                        @php 
                                                            $j = 0;
                                                        @endphp
                                                    @break
                                                    @case('AE')
                                                        @php 
                                                            $j = 1;
                                                        @endphp
                                                    @break
                                                @endswitch
                                                {{--La variable "$x" toma el valor de "$j" q lo recibe en la directiva "@switch" y como solo se requiere recorrer el ciclo 1 sola vez--}}
                                                {{--el valor de la variable "$x" se compara con la suma de "($j + 1)"--}}
                                                @for($x = $j; $x < ($j + 1); $x++)
                                                    {{$TelefonoCoordinador[$x]}}
                                                @endfor
                                        </p>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-sm-2 col-lg-2 text-center px-0">
                                        <img src="{{asset('Imagenes/Inicio/Iconos footer/Correo.svg')}}" alt="Icono de correo" class="img-fluid w-50">
                                    </div>
                                    <div class="col-sm-10 col-lg-10 text-lg-center px-0">
                                        @switch($Depto[$i]) 
                                            @case('P-VIT')
                                                @php 
                                                    $j = 0;
                                                    $y = 2;
                                                @endphp
                                            @break
                                            @case('AE')
                                                @php 
                                                    $j = 3;
                                                    $y = 4;
                                                @endphp
                                            @break
                                        @endswitch
                                        @for($x = $j; $x < $y; $x++)
                                            <p class="helvetica text-white font-weight-normal mb-1">
                                                {{$CorreoCoordinadorD[$x]}}
                                            </p>                                            
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>                     
                    </a>
                @endfor
            </div>
            <div class="card-deck mt-4">
                @for($i = 2; $i < 4; $i++)                    
                    <a href="{{url('/Coordinador', ['Departamento' => $Depto[$i], 'Coordinador' => $Cargo[$i]])}}" class="card">    
                        <img style="z-index: 1;" src="{{asset('Imagenes/Coordinadores/'. $FotoCoordinador[$i] . '.svg')}}" alt="Imagen de Coordinador" class="card-img-top">
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
                                            {{$CoordinadorDepto[$i]}}
                                        </p>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-sm-2 col-lg-2 text-right px-0 mr-1 pb-2">
                                        <img src="{{asset('Imagenes/Inicio/Iconos footer/Telefono.svg')}}" alt="Icono de telefono" class="img-fluid w-50">
                                    </div>
                                    <div class="col-sm-8 col-lg-8 align-self-center px-1">
                                        <p class="helvetica text-white font-weight-normal mb-1">
                                            {{--El switch compara los valores de cada cargo o de cada division que compone al P-VIT--}}
                                            {{--Al encontrar el valore correspondiente inicializa la variable "$j" para usarla como valor inicial en la directiva "@for"--}}
                                            @switch($Depto[$i]) 
                                                @case('EAUT')
                                                    @php 
                                                        $j = 2;
                                                    @endphp
                                                @break
                                                @case('BIOMASA')
                                                    @php 
                                                        $j = 3;
                                                    @endphp
                                                @break
                                            @endswitch
                                            {{--La variable "$x" toma el valor de "$j" q lo recibe en la directiva "@switch" y como solo se requiere recorrer el ciclo 1 sola vez--}}
                                            {{--el valor de la variable "$x" se compara con la suma de "($j + 1)"--}}
                                            @for($x = $j; $x < ($j + 1); $x++)
                                                {{$TelefonoCoordinador[$x]}}
                                            @endfor
                                        </p>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-sm-2 col-lg-2 text-center px-0">
                                        <img src="{{asset('Imagenes/Inicio/Iconos footer/Correo.svg')}}" alt="Icono de correo" class="img-fluid w-50">
                                    </div>
                                    <div class="col-sm-10 col-lg-10 text-lg-center px-0">
                                        @switch($Depto[$i]) 
                                            @case('EAUT')
                                                @php 
                                                    $j = 4;
                                                    $y = 6;
                                                @endphp
                                            @break
                                            @case('BIOMASA')
                                                @php 
                                                    $j = 6;
                                                    $y = 8;
                                                @endphp
                                            @break
                                        @endswitch
                                        @for($x = $j; $x < $y; $x++)
                                            <p class="helvetica text-white font-weight-normal mb-1">
                                                {{$CorreoCoordinadorD[$x]}}
                                            </p>                                            
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>                     
                    </a>
                @endfor
            </div>
        </div>
    </div>
@endsection