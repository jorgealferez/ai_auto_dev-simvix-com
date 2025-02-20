<?php

use Illuminate\Support\Facades\Route;

/*
|----------------------------------------------------------------------
| Rutas Web
|----------------------------------------------------------------------
|
| Aquí se definen las rutas web de la aplicación. La ruta raíz carga la
| vista welcome.blade.php, que extiende el layout de la aplicación.
|
*/

Route::get('/', function () {
    return view('welcome');
});
