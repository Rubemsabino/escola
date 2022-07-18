<?php

use App\Http\Controllers\Aluno;
use App\Http\Controllers\AlunosController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Alunos;
use App\Models\Professores;
use App\Models\Disciplinas;
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
Route::get('/', function () {
    return view('menu');
});

Route::get('/alunos/criar',  [AlunosController::class, 'create'])->name("aluno.create");
Route::get('/alunos/listar', [AlunosController::class,'index'])->name("aluno.lista");
Route::get('/alunos/detalhes/{id}',[AlunosController::class,'show'])->name("detalhe_ALUNO.lista");
Route::post('/alunos/salvar', [AlunosController::class,'store'])->name("aluno.salvar");
Route::get ('/alunos/deletar/{id}', [AlunosController::class,'destroy'])->name("deletar.aluno");


            //PROFESSOR
// exebir formulario para cadastro do professro
Route::get('/novo_professor', function () {
    return view('professores.create');
})->name("professor.create");

Route::get('/professores/list', function () {
    $professores = professores::orderBy('nome')->get();
    //dd($alunos);//serve para ver se chamou os alunos no BD
    return view('professores.lista', compact('professores'));
})->name("professor.lista");

Route::get('/detalhes_PROFESSORES/list/{id}', function ($id) {
    $detalhes = professores::find($id);
    return view('professores.detalhes', compact('detalhes'));
})->name("detalhe_PROFESSOR.lista");

Route::post('/professores/salvar', function (Request $request) {
    $nome = $request->input('nome');
    $celular = $request->input('celular');
    $formacao = $request->input('formacao');

    $professor = new Professores();
    $professor->nome = $nome;
    $professor->celular = $celular;
    $professor->formacao = $formacao;
    $professor->save();

    return view('professores.sucesso');
})->name("professor.salvar");

            //DISCIPLINA
// exebir formulario para cadastro de disciplina
Route::get('/nova_disciplina', function () {
    return view('disciplinas.create');
})->name("disciplina.create");

Route::get('/disciplinas/list', function () {
    $disciplinas = disciplinas::orderBy('nome')->get();
    return view('disciplinas.lista', compact('disciplinas'));
})->name("disciplina.lista");

Route::get('/detalhes_DISCIPLINAS/list/{id}', function ($id) {
    $detalhes = disciplinas::find($id);
    return view('disciplinas.detalhes', compact('detalhes'));
})->name("detalhe_DISCIPLINA.lista");

Route::post('disciplinas/salvar', function (Request $request) {
    $nome = $request->input('nome');


    $disciplina = new disciplinas();
    $disciplina->nome = $nome;
    $disciplina->save();

    return view('disciplinas.sucesso');
})->name("disciplinas.salvar");

            //TURMAS
// exibe formulario da turma
Route::get('/nova_turma', function () {
    return view('turmas.create');
})->name("turma.create");

Route::get('/turmas/list', function () {
    $turmas = turmas::orderBy('nome')->get();
    //dd($alunos);//serve para ver se chamou os alunos no BD
    return view('turmas.lista', compact('turmas'));
})->name("turma.lista");

Route::get('/detalhes_TURMAS/list/{id}', function ($id) {
    $detalhes = turmas::find($id);
    return view('turmas.detalhes', compact('detalhes'));
})->name("detalhe_TURMA.lista");

//envias os dados para o banco de dados
Route::post('/turma/salvar', function (Request $request) {
    $nome = $request->input('nome');
    $prof = $request->input('prof');


    $aluno = new Turmas();
    $aluno->nome = $nome;
    $aluno->id_professor = $prof;
    $aluno->save();

    return view('turma-sucesso');
})->name("turma.salvar");

