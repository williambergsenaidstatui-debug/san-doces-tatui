<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('san-doces.home');
})->name('san-doces.home');

Route::view('/produtos', 'san-doces.produtos')->name('san-doces.produtos');
Route::view('/sobre-nos', 'san-doces.sobre-nos')->name('san-doces.sobre-nos');
Route::view('/encomendas', 'san-doces.encomendas')->name('san-doces.encomendas');
Route::view('/contato', 'san-doces.contato')->name('san-doces.contato');

Route::get('/login', [LoginController::class, 'login_html']);

Route::get('/cadastro_usuario', [UsuarioController::class, 'cadastro_usuario_html']);
