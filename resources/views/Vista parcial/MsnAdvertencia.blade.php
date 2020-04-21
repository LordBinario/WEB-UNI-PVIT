@php 
    $Band = false;
@endphp
{{--Se cuenta la cantidad de errores que existen en la variable global $errors"--}}
{{--El método "all()" devuelve un arreglo con los mensajes de error--}}
@if(count($errors->all()) > 0)
    @php 
        $Band = true;
    @endphp
@endif

{{--Si la variable "$Band" es true significa que hay errores en la validacion de los campos del formulario,
sino existe una variable de tipo "session" llamada "Band" con el valor de true, lo que significa que se envió
el correo--}}
@if($Band == true || session('Band') == true)    
    @section('Scripts')
        @parent
        <script type="text/javascript" charset="utf-8">
            $('#ModalMensaje').modal(
                {
                    show: true,
                    focus: true,
                    keyboard: true,
                    hide: true
                }
            );
        </script>
    @endsection
@endif

    <div id="ModalMensaje" class="modal fade show" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    @if($Band == true)
                        <h4 class="modal-title text-warning">Advertencia</h4>
                    @else
                        <h4 class="modal-title text-blue">Información</h4>
                    @endif
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">            
                    <div class="container-fluid">
                        @if($Band == true)
                            <h5 class="helvetica font-weight-normal">Corrija los siguientes errores:</h5>
                            <ul class="list-group list-group-flush">
                                @foreach($errors->all() as $Error)
                                    <li class="helvetica font-weight-normal list-group-item">{{$Error}}</li>
                                @endforeach        
                            </ul>
                        @else
                            <h4 class="helvetica font-weight-normal">Su mensaje ha sido enviado satisfactoriamente.</h4>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>