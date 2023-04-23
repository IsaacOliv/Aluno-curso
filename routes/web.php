<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\AlunoCursoController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;



Route::controller(AlunoCursoController::class)->group(function () {
    Route::get('/', 'index')->name('dashboard');
    Route::get('cursos/gerenciar/{id_curso}','gerenciar')->name('gerenciar');
    Route::post('cursos/gerenciar/{id_curso}','vincularAlunoCurso')->name('vincular.aluno');
});
Route::controller(AlunoController::class)->prefix('alunos')->group(function () {
    Route::get('', 'index')->name('alunos.dashboard');
    Route::get('/cadastro', 'create')->name('alunos.create');
    Route::get('/edit/{id_aluno}', 'edit')->name('alunos.edit');
    Route::post('/cadastro', 'store')->name('alunos.store');
    Route::delete('/{id_aluno}', 'destroy')->name('alunos.destroy');
    Route::put('/{id_aluno}', 'update')->name('alunos.update');

});
Route::controller(CursoController::class)->prefix('cursos')->group(function (){
    Route::get('','index')->name('cursos.dashboard');
    Route::get('/cadastro', 'create')->name('cursos.create');
    Route::post('/cadastro', 'store')->name('cursos.store');
    Route::get('/edit/{id_curso}', 'edit')->name('cursos.edit');
    Route::put('/{id_curso}','update')->name('cursos.update');
    Route::delete('/{id_curso}}', 'destroy')->name('cursos.destroy');
});






