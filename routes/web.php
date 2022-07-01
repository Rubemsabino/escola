<?php

use App\Http\Controllers\Aluno;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Alunos;
use App\Models\Professores;
use App\Models\disciplinas;
use App\Models\Turmas;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteSernomeviceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//exibe a pagina principla
Route::get('/', function () {    return view('principal');});


// exibe formulario de alunos
Route::get('/alunos/form', function () {    return view('alunos-form');})->name("alunos.form");
Route::get('/alunos/list', function () {    return view('aluno-list');})->name("aluno.list");

//envias os dados para o banco de dados
Route::post('/alunos/salvar', function (Request $request) {
    $nome=$request->input('nome');
    $mae=$request->input('mae');
    $pai=$request->input('pai');
    $celular=$request->input('celular');

    $aluno=new Alunos;
    $aluno->nome=$nome;
    $aluno->nomedamae=$mae;
    $aluno->nomedopai=$pai;
    $aluno->celular=$celular;
    $aluno->save();

    return view('aluno-sucesso');
})->name("aluno.salvar");

// exebir formulario para cadastro do professro
Route::get('/professores/form', function () {    return view('professores-form');})->name("professores.form");
Route::post('/professores/salvar', function (Request $request) {
    $nome=$request->input('nome');
    $celular=$request->input('celular');
    $formacao=$request->input('formacao');

    $professor=new Professores();
    $professor->nome=$nome;
    $professor->celular=$celular;
    $professor->formacao=$formacao;
    $professor->save();

    return view('professores-sucesso');
})->name("professores.salvar");

// exebir formulario para cadastro de disciplina
Route::get('/disciplinas/form', function () {    return view('disciplinas-form');})->name("disciplinas.form");
Route::post('disciplinas/salvar', function (Request $request) {
    $nome=$request->input('nome');


    $disciplina=new disciplinas();
    $disciplina->nome=$nome;
    $disciplina->save();

    return view('disciplinas-sucesso');
})->name("disciplinas.salvar");

// exibe formulario da turma
Route::get('/turma/form', function () {    return view('turma-form');})->name("turma.form");
//envias os dados para o banco de dados
Route::post('/turma/salvar', function (Request $request) {
    $nome=$request->input('nome');
    $prof=$request->input('prof');


    $aluno=new Turmas();
    $aluno->nome=$nome;
    $aluno->id_professor=$prof;
   ;
    $aluno->save();

    return view('turma-sucesso');
})->name("turma.salvar");

















