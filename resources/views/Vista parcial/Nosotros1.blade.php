<div class="row">
    <div class="col-12 px-0 mx-0">
    {{--Concatenando variable con string, se concatena usando el signo "." y la variable tiene el signo de "$"--}}
        <img src="{{asset('Imagenes/Nosotros/Banners/'.$Banner.'svg')}}" alt="Imagen de Nosotros" class="img-fluid">
    </div>
</div>

<div class="container-xl">
    <div class="row py-4">
        <div class="col-12 text-center text-blue">
            <h3 class="helvetica font-weight-bold">¿Qué es {{$Depto}}?</h3>
            <br>
            {{--La variable "$Texto" es un arreglo--}}
            @foreach($Texto as $Parrafo)
                <p class="helvetica font-weight-normal text-justify">{{$Parrafo}}</p>
            @endforeach
        </div>
    </div>
</div>