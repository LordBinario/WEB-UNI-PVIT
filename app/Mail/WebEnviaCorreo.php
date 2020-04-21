<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

//Esta clase se usa para enviar correos, en la carpeta "config", en la clase "mail.php" se configuran los valores que
//usarán las clases que hereden de la clase "Mailable"
class WebEnviaCorreo extends Mailable
{
    use Queueable, SerializesModels;

    public $NomApell, $EmisorCorreo, $MensajeCorreo;
    //Inicializando/Creando un arreglo con ningún valor
    public $Correos = [];
    


    /**
     * Create a new message instance.
     *
     * @return void
     */
    //El constructor recibe un arreglo, el arreglo corresponde a los campos del formulario
    public function __construct($CamposFormulario)
    {
        //Al usar la palabra reservada "$this" no se utiliza el signo "$" antes del nombre de una variable
        $this->NomApell = $CamposFormulario["txtNomApell"];
        $this->EmisorCorreo = $CamposFormulario["txtCorreo"];
        $this->MensajeCorreo = $CamposFormulario["txtMensaje"];        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //Las variables del constructor de esta clase pasan a la siguiente vista.
        //Esta vista "Correo" es la que se envía a la persona que recibe el correo, se agrega "subject" para
        //establecer el asunto del correo.
        return $this->view('emails.Correo')
                    ->subject('Correo desde la web del P-VIT');
    }
}
