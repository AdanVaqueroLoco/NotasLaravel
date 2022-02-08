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

Route::get('/', function () {
    $notas = [
        'Mi primera nota',
        'Mi segunda nota',
        'Mi tercera nota',
        'Mi cuarta nota',
    ];

    return view('notas', ['notas' => $notas]);
})->name('listar');

Route::get('notas/{id}', function ($id) {
    return 'Aquí veremos el detalle de la nota: '.$id;
});

Route::get('agregar', function () {
    return view('agregar');
})->name('nuevanota');

Route::get('editar', function () {
    return view('editar');
});
