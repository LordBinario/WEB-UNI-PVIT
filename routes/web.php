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

Route::get('/', function(){
    return view('Inicio');
});

Route::get('Inicio/', function () {
    return view('Inicio');
});

Route::group(['prefix' => 'PVIT'], function(){
    Route::get('Nosotros/', function(){
        return view('Nosotros');
    });
});

//Grupo de rutas para la sección de Coordinadores
Route::group(['prefix' => 'Coordinadores'], function(){
    Route::get('{Departamento}/', function($Departamento){
        return view('Coordinadores', ['Departamento' => $Departamento]);
    });

    Route::get('{Departamento}/{Coordinador}/', function(){
        return view('Carlos');
    });
});
