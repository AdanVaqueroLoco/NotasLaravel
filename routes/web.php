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
    $notas = DB::table('notas')->get();


    return view('notas', ['notas' => $notas]);
})->name('listar');

Route::get('notas', function () {
    $notas = DB::table('notas')->get();


    return view('notas', ['notas' => $notas]);
})->name('notas.index');

Route::get('notas/{id}', function ($id) {
    return 'Aquí veremos el detalle de la nota: '.$id;
});

Route::get('agregar', function () {
    return view('agregar');
})->name('nuevanota');

Route::get('notas/{id}/editar', function ($id) {
    $nota = DB::table('notas')
    ->where('id', $id)
    ->first();
    return 'Aquí se van a editar las notas'.$id;
})->name('notas.edit');

Route::get('editar', function () {
    return view('editar');
});
