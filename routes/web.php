<?php


use App\Http\Controllers\AlunosController;
use App\Http\Controllers\DisciplinasController;
use App\Http\Controllers\ProfessoresController;


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

Route::get('/alunos/listar', [AlunosController::class,'index'])->name("aluno.lista");
Route::get('/alunos/criar',  [AlunosController::class, 'create'])->name("aluno.create");
Route::post('/alunos/salvar', [AlunosController::class,'store'])->name("aluno.salvar");
Route::get('/alunos/detalhes/{id}',[AlunosController::class,'show'])->name("detalhe_ALUNO.lista");
Route::get ('/alunos/deletar/{id}', [AlunosController::class,'destroy'])->name("deletar.aluno");

Route::get('/disciplinas/list', [DisciplinasController::class,'index'])->name("disciplina.lista");
Route::get('/disciplina/criar', [DisciplinasController::class, 'create'])->name("disciplina.create");
Route::post('disciplinas/salvar', [DisciplinasController::class,'store'])->name("disciplinas.salvar");
Route::get('/disciplinas/detalhes/{id}', [DisciplinasController::class,'show'])->name("detalhe_DISCIPLINA.lista");
Route::get ('/disciplinas/deletar/{id}', [DisciplinasController::class,'destroy'])->name("deletar.disciplina");

Route::get('/professores/list', [ProfessoresController::class,'index'])->name("professor.lista");
Route::get('/professores/criar', [ProfessoresController::class, 'create'])->name("professor.create");
Route::post('/professores/salvar', [ProfessoresController::class,'store'])->name("professor.salvar");
Route::get('/professores/detalhes/{id}', [ProfessoresController::class,'show'])->name("detalhe_PROFESSOR.lista");
Route::get ('/professores/deletar/{id}', [ProfessoresController::class,'destroy'])->name("deletar.professor");

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

