<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>UNI | PVIT</title>
</head>
<body>
    <header>
        <div class="container-fuid">
        <div class="row bg-white">
            <div class="col-5">
                <img src="resources/Imagenes/LogoUNI.svg" alt="Logo de la UNI">
            </div>
            <div class="col-7">
                <img src="resources/Imagenes/LogoPVIT.svg" alt="Logo del PVIT">
            </div>
        </div>
        </div>
        <nav class="navbar navbar-expand-lg bg-primary">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="#">Descripción<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Sobre nosotros</a>
                    </li>                
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Coordinandores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Líneas de trabajo</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container-fluid">
        @yield('Contenido')
    </div>

    <footer class="container-fluid bg-primary text-white py-4">
        <div class="row justify-content-center">
            <div class="col-4">
                <h6>Información de contacto</h6>
                <br>
                <div class="row">
                    <div class="col-2">
                        <img src="resources/Imagenes/Ubicacion.svg" alt="Icono de ubicación">
                    </div>
                    <div class="col-10">
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic harum ratione perferendis aperiam.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <img src="resources/Imagenes/Telefono.svg" alt="Icono de telefono">
                    </div>
                    <div class="col-10">
                        <p>
                            Lorem ipsum dolor sit amet.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <img src="resources/Imagenes/Correo.svg" alt="Icono de correo">
                    </div>
                    <div class="col-10">
                        <p>
                            Lorem ipsum dolor sit amet.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <h6>Envíanos un mensaje</h6>
                <br>
                <div class="row">
                    <input type="text" name="txtNomApell" id="txtNomApell" placeholder="Nombre y apellido completo" class="form-control form-control-sm bg-dark text-primary">
                    <input type="email" name="txtCorreo" id="txtCorreo" placeholder="E-mail" class="form-control form-control-sm bg-dark text-primary mt-1">
                    <textarea name="txtMensaje" id="txtMensaje" rows="3" placeholder="Mensaje" class="form-control form-control-sm bg-dark text-primary mt-2"></textarea>
                    <input type="submit" value="Enviar" class="btn btn-warning text-white mt-1 ml-md-auto">
                </div>
            </div>
        </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>