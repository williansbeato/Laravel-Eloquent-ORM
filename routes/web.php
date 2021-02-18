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

// Route::get('/', 'CidadeController@index');
// Route::resource('cidade','CidadeController');

// Route::get('/', 'CursoController@index');

Route::resource('curso','CursoController');

Route::resource('professor','ProfessorController');

Route::resource('disciplina','DisciplinaController');

Route::resource('aluno','AlunoController');

Route::resource('matricula', 'MatriculaController');
