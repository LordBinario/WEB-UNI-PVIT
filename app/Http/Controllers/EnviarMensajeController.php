<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\WebEnviaCorreo;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class EnviarMensajeController extends Controller
{
    //La variable "$request" recibe los parámetros enviados por el método "POST"
    function EnviarMsn(Request $request)
    {
        //Se establece las reglas que debe de cumplir cada campo del "form".
        $ReglasValidacion = [
            //La validación "bail" se utiliza para que si alguna regla de validación no se cumple en un campo del "form",
            //deje de revisar el resto de validaciones de ese campo y lanze el error.
            //Se escribe el nombre del campo seguido de "=>" y entre corchetes la lista de validaciones.
            'txtNomApell' => ['bail', 'required', 'min:10', 'string'],
            'txtCorreo' => ['required', 'email'],
            'txtMensaje' => ['bail', 'required', 'min:10', 'string'],
            'txtCorreos[]' => ['bail', 'email', 'min:10']
        ];
        
        //Se establece los mensajes de error que deben de mostrarse por cada campo del "form", se define un mensaje de error
        //personalizado por cada validacion del campo.
        $MensajesValidacion = [
            //Se escribe el nombre del campo seguido de "." y seguido de la validación, se usa "=>" y luego se escribe
            //el mensaje personalizado.
            'txtNomApell.required' => 'No ha ingresado su nombre y apellido. Verifique.',
            'txtNomApell.min' => 'La cantidad de texto mínimo para su nombre y apellido es de 10 caracteres.',
            'txtCorreo.required' => 'No ha ingresado su dirección de correo electrónico. Verifique.',
            'txtCorreo.email' => 'La dirección de correo electrónico escrita no es válida. Verifique.',
            'txtMensaje.required' => 'No ha ingresado el mensaje. Verifique.',
            'txtMensaje.min' => 'La cantidad de texto mínimo para el mensaje es de 10 caracteres.',
            'txtCorreos[].email' => 'No se ha utilizado ningún correo electrónico como receptor de los datos de este formulario. Intente recargar la web.',
            'txtCorreos[].min' => 'No se ha utilizado ningún correo electrónico como receptor de los datos de este formulario. Intente recargar la web.'
        ];
        
        
        //El método "make" de la clase "Validator" asigna las propiedades a validar (reglas de validación y mensajes personalizados de error)
        //para cada campo de un "form". La variable "$Respuesta" obtiene el resultado de la validación
        $Respuesta = Validator::make($request->all(), $ReglasValidacion, $MensajesValidacion)->validate();
        //Después de que se realiza la validación si devuelve error laravel regresa a la página anterior automáticamente
        //y se puede usar la variable global $errors para poder visualizar el o los errores, sino hay error al realizar la
        //validación la variable global $errors es nula.

        //"to" recibe la dirección(es) (1 dirección o 1 array de direcciones) de correo del emisor y "send" envía la clase que genera el correo
        //Esta clase recibe como parámetro la variable que tiene los valores del formulario de envío de correo
        Mail::to($request['txtCorreos'])->send(new \App\Mail\WebEnviaCorreo($Respuesta));
        //Si el correo se envía de forma satisfactoria se ejecuta la siguiente línea de código y se envía una variable
        //de tipo "session" con el valor de true para usarse en el mensaje que se muestra al usuario al usar el formulario
        //de contacto
        return redirect()->back()->with('Band', true);
    }
}
