<?php

use App\Http\Controllers\Aluno;
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

            //ALUNOS
// exibe formulario de alunos
Route::get('/novo-aluno', function () {
    return view('alunos.create');
})->name("aluno.create");

Route::get('/alunos/list', function () {
    $alunos = Alunos::orderBy('nome')->get();
    //dd($alunos);//serve para ver se chamou os alunos no BD
    return view('alunos.lista', compact('alunos'));
})->name("aluno.lista");

Route::get('/detalhes_ALUNOS/list/{id}', function ($id) {
    $detalhes = Alunos::find($id);
    // $alunoTurma = $detalhes->AlunoTurma;
    // $idTurma = @$alunoTurma->turmas_id;
    // $turma = Turmas::find($idTurma);
    //dd($alunos);//serve para ver se chamou os alunos no BD
    return view('alunos.detalhes', compact('detalhes'));
})->name("detalhe_ALUNO.lista");


//envias os dados para o banco de dados
Route::post('/alunos/salvar', function (Request $request) {
    $nome = $request->input('nome');
    $mae = $request->input('mae');
    $pai = $request->input('pai');
    $celular = $request->input('celular');

    $aluno = new Alunos;
    $aluno->nome = $nome;
    $aluno->nomedamae = $mae;
    $aluno->nomedopai = $pai;
    $aluno->celular = $celular;
    $aluno->save();

    return view('alunos.sucesso');
})->name("aluno.salvar");

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

