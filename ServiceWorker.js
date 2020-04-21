const NombreCache = 'Página web PVIT UNI';
const ElementosACache = [
    //'./',
    //'./public/index.php',
    //Rutas de la página
    './routes/web.php',
    //ServiceWorker
    './ServiceWorker.js',
    //Secciones que componen la web
    './resources/views/Coordinador.blade.php',
    './resources/views/Coordinadores.blade.php',
    './resources/views/Descripcion.blade.php',
    './resources/views/Inicio.blade.php',
    './resources/views/Lineas.blade.php',
    './resources/views/Nosotros.blade.php',
    './resources/views/Servicios.blade.php',
    //Imagenes que ocupa la web
    './resources/Imagenes/Inicio/Iconos footer/Contador1.svg',
    './resources/Imagenes/Inicio/Iconos footer/Contador2.svg',
    './resources/Imagenes/Inicio/Iconos footer/Contador3.svg',
    './resources/Imagenes/Inicio/Iconos footer/Contador4.svg',
    './resources/Imagenes/Inicio/Iconos footer/Correo.svg',
    './resources/Imagenes/Inicio/Iconos footer/Facebook.svg',
    './resources/Imagenes/Inicio/Iconos footer/Telefono.svg',
    './resources/Imagenes/Inicio/Iconos footer/Ubicacion.svg',
    './resources/Imagenes/Inicio/logos/LogoAE.svg',
    './resources/Imagenes/Inicio/logos/LogoBIOMASA.svg',
    './resources/Imagenes/Inicio/logos/LogoCNU.svg',
    './resources/Imagenes/Inicio/logos/LogoCSUCA.svg',
    './resources/Imagenes/Inicio/logos/LogoEAUT.svg',
    './resources/Imagenes/Inicio/logos/LogoFAO.svg',
    './resources/Imagenes/Inicio/logos/LogoINTA.svg',
    './resources/Imagenes/Inicio/logos/LogoIPSA.svg',
    './resources/Imagenes/Inicio/logos/LogoMEFCCA.svg',
    './resources/Imagenes/Inicio/logos/LogoMINSA.svg',
    './resources/Imagenes/Inicio/logos/LogoPVIT.svg',
    './resources/Imagenes/Inicio/logos/LogoRedE.svg',
    './resources/Imagenes/Inicio/logos/LogoUNI.svg',
    //BootStrap
    './bootstrap/CSS/bootstrap.min.css',
    './bootstrap/CSS/Personalizado.css',
    './bootstrap/JS/bootstrap-4.4.1.min.js',
    './bootstrap/JS/jquery-3.4.1.slim.min.js',
    './bootstrap/JS/popper.min.js'
];

//Evento para registrar el ServiceWorker. Al registrar el ServiceWorker se debe de tomar en cuenta el alcance que se quiere dar,
//se registra en la raíz del proyecto para que el alcance del ServiceWorker sea todo el proyecto y así guarde en caché cualquier
//elemento del proyecto.
self.addEventListener('load', () => {
    navigator.serviceWorker.register('./../ServiceWorker.js').then(Registro => {
        console.log('ServiceWorker registrado');
    }).catch(error => console.log(`Error al intentar registrar el ServiceWorker ${error}`));
});

//Evento para crear la caché y los elementos a agregar al mismo
self.addEventListener('install', e => {
    //El método waitUntil devuelve el objeto "caches". El método "open" recibe el nombre de la caché,
    //si la caché no existe la crea, si existe la abre. Este método es del objeto "caches"
    e.waitUntil(caches.open(NombreCache).then(Cache => {
        //El párametro "Cache" recibe los métodos y atributos de la "promesa". El método "addAll"
        //toma un arreglo de url's, los recupera y agrega los objetos resultantes al caché dado.
        console.log('Service Worker instalado');
        return Cache.addAll(ElementosACache);
        //Se usa el "catch" para atrapar el error, en el caso de que la promesa no se realice correctamente.
    }).catch(error => console.log(`Error al instalar el Service Worker ${error}`)));
});

//Evento que actualiza la caché
self.addEventListener('activate', e => {
    const ElementosEnCache = [NombreCache];
    e.waitUntil(caches.keys().then(Caches => {
        return Promise.all(Caches.map(Cache => {
            if(ElementosEnCache.indexOf(Cache) === -1)
            {
                return caches.delete(Cache);
            }
        }));
    }).then( () => {
        console.log('La caché de la página web a sido actualizada');
    }));
});

//Evento para recuperar datos de la caché o de cualquier otro medio disponible
self.addEventListener('fetch', e => {
    console.log('Recuperando elementos del ServiceWorker');
    e.respondWith(caches.match(e.request).then(Respuesta => {
        if(Respuesta)
        {
            return Respuesta;
        }

        return fetch(e.request).then(Respuesta2 => {
            let RespuestaACache = Respuesta2.clone();
            caches.open(NombreCache).then(Cache => {
                Cache.put(e.request, RespuestaACache).catch(error => console.log(`Error en la solicitud: ${Request.url}: ${error.message}`));
            }).catch(error => console.log(`Error al abrir la caché: ${error.message}`))
            return Respuesta2;
        }).catch(error => console.log(`Error al hacer fetch en: ${e.request.url}: ${error.message} con número de estado: ${e.ok}`))
    }).catch(error => console.log(`Error en la solicitud: ${e.request.url} con la respuesta: ${error.message}`)))
});