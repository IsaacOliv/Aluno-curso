<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\AlunoCursoController;
use Illuminate\Support\Facades\Route;



Route::controller(AlunoCursoController::class)->group(function () {
    Route::get('/', 'index')->name('dashboard');
});
Route::controller(AlunoController::class)->prefix('alunos')->group(function () {
    Route::get('', 'index')->name('alunos.dashboard');
    Route::get('/cadastro', 'create')->name('alunos.create');
    Route::get('/edit/{id_aluno}', 'edit')->name('alunos.edit');
    Route::post('/cadastro', 'store')->name('alunos.store');
    Route::delete('/{id_aluno}', 'destroy')->name('alunos.destroy');
    Route::put('/{id_aluno}', 'update')->name('alunos.update');

});




