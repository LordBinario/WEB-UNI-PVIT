@switch($Departamento)
    @case("AE")
        @php 
            $Banner = "BannerAE.";
        @endphp
    @break
    @case("BIOMASA")
        @php 
            $Banner = "BannerBIOMASA.";
        @endphp
    @break
    @case("EAUT")
        @php 
            $Banner = "BannerEAUT.";
        @endphp
    @break
@endswitch

<div class="row">
    <div class="col-12 px-0">
    {{--Concatenando variable con string, se concatena usando el signo "." y la variable tiene el signo de "$"--}}
        <img src="{{asset('Imagenes/Nosotros/Banners/'.$Banner.'svg')}}" alt="Imagen de Nosotros" class="img-fluid">
    </div>
</div>

<div class="row">
    <div class="col-12 pt-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center wow bounceIn">{{-- style="font-size: 3.5rem;"--}}
                <h1 class="Helvetica font-weight-bold text-blue">Nuestros servicios</h1>
            </div>
        </div>               
        <div class="row justify-content-center">
            <div class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 py-1 mr-0 w-100 bg-blue">                    
            </div>
            <div class="col-7 col-sm-4 col-md-3 col-lg-2 col-xl-2 py-1 w-100 bg-lightblue">
            </div>
        </div>
    </div>
</div>

@section('Scripts')
    @parent
    <script>
        new WOW().init();
    </script>
@endsection