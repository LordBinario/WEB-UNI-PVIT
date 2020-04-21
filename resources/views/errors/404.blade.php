{{--Todos los errores que pueden ser generados en una web deben de estar guardados en una carpeta llamada "errors"--}}
{{--para que la web ignore los diseños de errores existentes por defecto y tome en cuenta los creados por el desarrollador--}}
@extends('Pagina Maestra.PaginaMaestraPrincipal')

@section('title', __('Not Found'))
@section('code', '404')

@section('Contenido')
    <div class="row">
        <div class="col-6">
            <h3 class="Helvetica font-weight-bold">No hemos encontrado la página que buscas. Navega usando el menú superior.</h3>
        </div>
    </div>
@endsection

@section('message', __('Not Found'))