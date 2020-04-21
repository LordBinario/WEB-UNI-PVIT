<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis; 

class CacheController extends Controller
{
    //
    function AlmacenarCache()
    {
        Redis::set('name', 'Sam');
        /*Cache::tags(['Página web PVIT UNI'])->forever('Rutas', './routes/web.php');
        Cache::tags(['Página web PVIT UNI'])->forever('Secciones', './resources/views/Coordinador.blade.php');*/

        return view('Inicio', ['Departamento' => 'PVIT']);
    }
}
