@extends('Pagina Maestra.PaginaMaestraPrincipal')

@section('Contenido')
    @include('ImagenCoordinadoresTexto')
    <div class="container">
        <div class="row justify-content-center py-4">
            <div class="col-3" style="z-index: 1;">
                <div class="row bg-blue">
                    <div class="col-12">
                        <img src="resources/Imagenes/Foto.svg" alt="Imagen de Carlos">
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-2">
                        <img src="resurces/Imagenes/IconoTelefono.svg" alt="Icono de telefono">
                    </div>
                    <div class="col-6">
                        <p class="helvetica text-blue font-weight-normal">
                            +505 0000-0000
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-2">
                        <img src="resurces/Imagenes/IconoCorreo.svg" alt="Icono de correo">
                    </div>
                    <div class="col-9">
                        <p class="helvetica text-blue font-weight-normal">
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

                <div class="row mb-0 pb-0 pt-4">
                    <div class="col-12">
                        <h3 class="helvetica font-weight-bold text-blue">Títulos</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="ml-3 col-3 w-100 bg-blue pt-1"></div>
                    <div class="col-8 w-100 bg-lightblue pt-1"></div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <img src="resources/Imagenes/Titulo1.svg" alt="Imagen del Título 1">
                    </div>
                    <div class="col-3">
                        <img src="resources/Imagenes/Titulo1.svg" alt="Imagen del Título 2">
                    </div>
                    <div class="col-3">
                        <img src="resources/Imagenes/Titulo1.svg" alt="Imagen del Título 3">
                    </div>
                    <div class="col-3">
                        <img src="resources/Imagenes/Titulo1.svg" alt="Imagen del Título 4">
                    </div>
                </div>
                <div class="row">                    
                    <div class="col-3">
                        <img src="resources/Imagenes/Titulo1.svg" alt="Imagen del Título 5">
                    </div>
                    <div class="col-3">
                        <img src="resources/Imagenes/Titulo1.svg" alt="Imagen del Título 6">
                    </div>
                    <div class="col-3">
                        <img src="resources/Imagenes/Titulo1.svg" alt="Imagen del Título 7">
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="row pt-5 pb-0">
                    <div class="col-12 text-left">
                        <h3 class="helvetica font-weight-bold text-blue">Puesto</h3>
                        <p class="helvetica font-weight-normal text-blue">
                            Ing. de diseño de computadoras cuánticas
                        </p>
                    </div>
                </div>
                <div class="row mb-0 pb-0 pt-4">
                    <div class="col-12">
                        <h3 class="helvetica font-weight-bold text-blue">Acerca de</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="ml-3 col-1 w-100 bg-blue pt-1"></div>
                    <div class="col-5 w-100 bg-lightblue pt-1"></div>
                </div>
                <div class="row pt-4">
                    <div class="col-12">
                        <p class="helvetica font-weight-normal text-blue">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur deserunt quaerat cupiditate quos quae ullam sunt perspiciatis, odio esse accusamus, hic nesciunt veniam corporis voluptatum numquam dicta voluptates voluptas modi?
                        </p>
                        <p class="helvetica font-weight-normal text-blue">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur deserunt quaerat cupiditate quos quae ullam sunt perspiciatis, odio esse accusamus, hic nesciunt veniam corporis voluptatum numquam dicta voluptates voluptas modi?
                        </p>
                        <p class="helvetica font-weight-normal text-blue">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur deserunt quaerat cupiditate quos quae ullam sunt perspiciatis, odio esse accusamus, hic nesciunt veniam corporis voluptatum numquam dicta voluptates voluptas modi?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection