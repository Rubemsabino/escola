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
Route::get('/novo-aluno', function () {    return view('alunos.create');})->name("aluno.create");
Route::get('/alunos/list', function () {
    $alunos= Alunos::orderBy('nome')->get();
    //dd($alunos);//serve para ver se chamou os alunos no BD
    return view('alunos.lista',compact('alunos'));
})->name("aluno.lista");

//envias os dados para o banco de dados
Route::post('/aluno_novo/salvar', function (Request $request) {
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
Route::get('/novo_professor', function () {    return view('professores/professor_create');})->name("professor.create");
Route::post('/professores/salvar', function (Request $request) {
    $nome=$request->input('nome');
    $celular=$request->input('celular');
    $formacao=$request->input('formacao');

    $professor=new Professores();
    $professor->nome=$nome;
    $professor->celular=$celular;
    $professor->formacao=$formacao;
    $professor->save();

    return view('professores/professor-sucesso');
})->name("professores.salvar");

// exebir formulario para cadastro de disciplina
Route::get('/nova_disciplina', function () {    return view('disciplinas/disciplina_create');})->name("disciplina.create");
Route::post('disciplinas/salvar', function (Request $request) {
    $nome=$request->input('nome');


    $disciplina=new disciplinas();
    $disciplina->nome=$nome;
    $disciplina->save();

    return view('disciplinas-sucesso');
})->name("disciplinas.salvar");

// exibe formulario da turma
Route::get('/nova_turma', function () {    return view('turmas/turma-create');})->name("turma.create");
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

















