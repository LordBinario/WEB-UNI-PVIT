{{--Este formulario es el que se envía como HTML al receptor del correo o al que recibe el correo--}}
@php 
    header('Content-type:text/html; charset=UTF-8');
@endphp
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/app.css">
        <title>UNI | PVIT</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="jumbotron border border-black rounded bg-info">
                        <h5 class="display-4 text-white">Mensaje desde Página Web UNI | PVIT</h5>
                        <hr class="my-4 bg-white py-1">
                        <p class="helvetica font-weight-bold text-white">
                            Ha recibido un mensaje de: <span class="font-weight-normal">{{$NomApell}}.</span>
                        </p>
                        <p class="helvetica font-weight-bold text-white">
                            El contenido del mensaje es: <span class="font-weight-normal">{{$MensajeCorreo}}.</span><br>
                            El correo del emisor es: <span class="font-weight-normal">{{$EmisorCorreo}}.</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>