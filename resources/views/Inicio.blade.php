@extends('Pagina Maestra.PaginaMaestra')

@section('Contenido')
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

    <div class="row py-4">
        <div class="col-12 text-center">
            <h4 class="helvetica font-weight-bold">BIENVENIDOS A UNI PVIT</h4>
            <br>
            <p class="helvetica font-weight-normal">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit necessitatibus totam ab sunt inventore asperiores ducimus consequatur! Eligendi vel recusandae pariatur dignissimos, in ducimus eaque expedita, quae excepturi esse beatae!
            </p>
            <div class="row">
                <div class="col-3">
                    <img src="resources/Imagenes/LogoAE.svg" alt="Logo de Atención Empresarial">
                </div>
                <div class="col-3">
                    <img src="resources/Imagenes/LogoBIOMASA.svg" alt="Logo de BIOMASA">
                </div>
                <div class="col-3">
                    <img src="resources/Imagenes/LogoEAUT.svg" alt="Logo de EAUT">
                </div>
                <div class="col-3">
                    <img src="resources/Imagenes/LogoRedE.svg" alt="Logo de Red de emprendedores">
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5 py-4 bg-gris">
        <div class="col-12 text-center">
            <h3 class="helvetica font-weight-bold">NUESTRAS CAPACITACIONES</h3>
            <br>
            <div class="row">
                <div class="col-6">
                    <img src="resources/Imagenes/Curso1.svg" alt="Curso 1">
                </div>
                <div class="col-6">
                    <img src="resources/Imagenes/Curso2.svg" alt="Curso 2">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <img src="resources/Imagenes/Curso3.svg" alt="Curso 3">
                </div>
                <div class="col-6">
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
                <div class="col-2">
                    <img src="resources/Imagenes/LogoSUIZA.svg" alt="Logo de Suiza">
                </div>
                <div class="col-2">
                    <img src="resources/Imagenes/LogoCSUCA.svg" alt="Logo de CSUCA">
                </div>
                <div class="col-2">
                    <img src="resources/Imagenes/LogoBID.svg" alt="Logo del BID">
                </div>
                <div class="col-2">
                    <img src="resources/Imagenes/LogoGobierno.svg" alt="Logo del Gobierno">
                </div>
                <div class="col-2">
                    <img src="resources/Imagenes/LogoCNU.svg" alt="Logo del CNU">
                </div>
            </div>
        </div>
    </div>
@endsection