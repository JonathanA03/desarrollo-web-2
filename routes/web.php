<?php

use Illuminate\Support\Facades\Route;

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
/*route:: get ('/', function() {
    return "Bienvenido";
}):*/

/*
Route::get('saludo/{nombre?}', function ($nombre = "Invitado") {
    return "Hola ".$nombre;
});
*/
Route:: get ('/contacto', function(){
    return "Seccion de Contactos";
})->name('Contacto');

route :: get ('/', function () {
    echo "<a href = 'contacto'>Contacto 1</a><br>";
    echo "<a href = 'contacto'>Contacto 2</a><br>";
    echo "<a href = 'contacto'>Contacto 3</a><br>";
})

/*Route::get('/', function (){
    $nombre = "Jonathan";
    return view('home', compact('nombre'));
})->name('home');*/
    
