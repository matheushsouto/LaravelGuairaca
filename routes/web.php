<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\EmprestimoController;
use App\Http\Controllers\LivroController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware('auth')->group(function () {
    Route::resource('/alunos', AlunoController::class);
    Route::resource('/livros', LivroController::class);

    Route::resource('/emprestimos', EmprestimoController::class);

    Route::post('/emprestimos/{emprestimo}/devolver', [EmprestimoController::class, 'devolver'])
        ->name('emprestimos.devolver');
});

require __DIR__.'/auth.php';
