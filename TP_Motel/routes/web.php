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

use App\Produtos;

Route::get('/', function () {
    return view('layout.master');
});

Route::resource('apartamentos', 'ApartamentoController');
Route::resource('hospedagens', 'HospedagemController');
Route::resource('produtos', 'ProdutoController');
Route::resource('users', 'UserController');

/* Route::get('cidades', function () {
    $cidades = Cidade::all();
    return view('cidades.index')->with('cidades', $cidades);
});

Route::get('/cidades/{cidade}', function ($id) {
    $cidade = DB::table('cidades')->find($id);
    return view('cidades.show')->with('cidades', $cidade);
});

Route::get('estados', function () {
    $estados = Estado::all();
    return view('estados.index')->with('estados', $estados);
});

Route::get('/estados/{Estado}', function ($id) {
    $estado = DB::table('estados')->find($id);
    return view('estados.show')->with('estados', $estado);
}); */

Auth::routes();

Route::get('/home', 'HomeController@index');
