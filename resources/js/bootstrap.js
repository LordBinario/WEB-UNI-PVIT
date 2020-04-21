window._ = require('lodash');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */
/*Creando un manejador de errores para establecer el símbolo a ocupar para la librería JQuery
Esto se escribe en el archivo "bootstrap.js" que crea por defecto laravel en un proyecto.
A traves de las líneas de comandos se puede instalar la nueva versión de bootstrap, eliminando primero la actual*/
try 
{
    //require(librería) manda a llamar las librerías javascript a ocupar para el proyecto siempre y cuando esten
    //instaladas en el mismo
    window.$ = window.jQuery = require('jquery');
    
    window.WOW = window.WOW = require('wow.js');

    require('bootstrap');
}
catch (e)
{}

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
