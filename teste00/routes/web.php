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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro-transportadora', function() {
    return view('transportadora.cadastro');
});

Route::get('/cadastro-motorista', function() {
    return view('motorista.cadastro');
});

Route::get('/cadastro-caminhao', function() {
    return view('caminhao.cadastro');
});

Route::get('/cadastro-modelo', function() {
    return view('modelo.cadastro');
});

