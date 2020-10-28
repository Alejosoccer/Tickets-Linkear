<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


Route::get('/migrate', function() {
    Artisan::call('migrate');
   echo "tablas creadas";
});


Route::get('/reset', function() {
    Artisan::call('migrate:reset');
   echo "tablas creadas";
});



Route::get('/clear', function() {
    Artisan::call('config:clear');
   echo "config is cleared";
     
     Artisan::call('cache:clear');
    echo "Cache is cleared";
    

    Artisan::call('view:clear');
    echo "Cache is cleared";
    

    Artisan::call('config:cache');
    echo "Cache y config is cleared";
});



Route::get('/', function () {

    return view('welcome', compact('ticket', 'contador'));
});

Auth::routes();


//Rutas para la sesión de inicio
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/verificar', 'HomeController@ticket');
Route::get('/select/{id}/{origen}/{destino}/{fecha}', 'HomeController@indexAsiento')->name('select');
Route::post('/reservar', 'HomeController@reservaTicket');
Route::delete('delete/boleto/{id}/{cooperativa}', 'HomeController@eliminarTicket');


//Rutas para administrador
Route::get('/cooperativa', 'CooperativeController@index')->name('cooperativa');
Route::post('/crear/cooperativa', 'CooperativeController@store');
