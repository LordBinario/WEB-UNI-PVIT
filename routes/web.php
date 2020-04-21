<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*Las rutas definidas para la web usan la variable {Departamento}/$Departamento para poder especificar en cada página que compone a la web
en que departamento se quiere ver información, la variable recibe el valor del departamento de la UNI de la cual se quiere ver
información--*/
//Route::get('/', 'CacheController@AlmacenarCache');//{
    //return view('Inicio', ['Departamento' => "PVIT"]);
//});
Route::get('/', function(){
    return view('Inicio', ['Departamento' => "P-VIT"]);
});

Route::group(['prefix' => 'Inicio'], function(){
    Route::get('{Departamento}/', function($Departamento) {
        return view('Inicio', ['Departamento' => $Departamento]);
    });
});

//Grupo de rutas para la sección Nosotros
Route::group(['prefix' => 'Nosotros'], function(){
    Route::get('{Departamento}/', function($Departamento){
        return view('Nosotros', ['Departamento' => $Departamento]);
    });
});

//Grupo de rutas para la sección de Coordinadores
Route::group(['prefix' => 'Coordinador'], function(){
    Route::get('{Departamento}/', function(){
        return view('Coordinadores', ['Departamento' => 'P-VIT']);
    });

    Route::get('{Departamento}/{Coordinador}', function($Departamento, $Coordinador){
        return view('Coordinador', ['Departamento' => $Departamento, 'Coordinador' => $Coordinador]);
    });
});

//Grupo de rutas para la sección de servicios
Route::group(['prefix' => 'Servicios'], function(){
    Route::get('{Departamento}/', function($Departamento){
        return view('Servicios', ['Departamento' => $Departamento]);
    });
});

//fallback se usa al haber un error en la URL de la web y se usa el método abort() para especificar el tipo de error que ocurre
Route::fallback(function(){
    //Código 404 implica que el recurso no está disponible o no se encuentra
    abort(404);
});

//La ruta "EnviarMensaje" apunta al controlador llamado "EnviarMensaje" al método "EnviarMsn"
Route::post('EnviarMensaje/', 'EnviarMensajeController@EnviarMsn');

Route::post('Cache', 'CacheController@AlmacenarCache');