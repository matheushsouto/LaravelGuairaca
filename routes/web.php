<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExemploController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exemplo', [ExemploController::class, 'index']);
Route::get('/contato', [ContactController::class, 'index']);

Route::post(
    '/contato-salvar',
    [ContactController::class, 'storeDataEncrypt']
)->name('contato.salvar');

