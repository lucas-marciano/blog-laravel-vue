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
    $lista = \App\Artigo::listar(4);
    return view('site', compact('lista'));
})->name('site');

Route::get('/artigo/{id}/{titulo?}', function ($id) {
    $artigo = \App\Artigo::find($id);
    if(isset($artigo))
        return view('artigo', compact('artigo'));
    else
        return redirect()->route('site');
})->name('artigo');


Route::get('/home', function () {
    return redirect('admin');
});

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');

Route::middleware(['auth'])->prefix('admin')->namespace('Admin')->group(function () {
    Route::resource('artigos',          'ArtigosController');
    Route::resource('usuarios',         'UsuariosController');
    Route::resource('autores',          'AutoresController');
    Route::resource('administradores',  'AdminController');
});

