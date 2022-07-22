<?php


use App\Http\Controllers\AlunosController;
use App\Http\Controllers\DisciplinasController;
use App\Http\Controllers\ProfessoresController;
use App\Http\Controllers\TurmasController;

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
Route::get('/alunos/editar/{id}', [AlunosController::class,'edit'])->name("editar.aluno");
Route::post('/alunos/atualizar/{id}', [AlunosController::class,'update'])->name("atualizar.aluno");
Route::get('/alunos/busca', [AlunosController::class,'busca'])->name("aluno.busca");

Route::get('/disciplinas/list', [DisciplinasController::class,'index'])->name("disciplina.lista");
Route::get('/disciplina/criar', [DisciplinasController::class, 'create'])->name("disciplina.create");
Route::post('disciplinas/salvar', [DisciplinasController::class,'store'])->name("disciplinas.salvar");
Route::get('/disciplinas/detalhes/{id}', [DisciplinasController::class,'show'])->name("detalhe_DISCIPLINA.lista");
Route::get ('/disciplinas/deletar/{id}', [DisciplinasController::class,'destroy'])->name("deletar.disciplina");
Route::get('/disciplinas/editar/{id}', [DisciplinasController::class,'edit'])->name("editar.disciplina");
Route::post('/disciplinas/atualizar/{id}', [DisciplinasController::class,'update'])->name("atualizar.disciplina");

Route::get('/professores/list', [ProfessoresController::class,'index'])->name("professor.lista");
Route::get('/professores/criar', [ProfessoresController::class, 'create'])->name("professor.create");
Route::post('/professores/salvar', [ProfessoresController::class,'store'])->name("professor.salvar");
Route::get('/professores/detalhes/{id}', [ProfessoresController::class,'show'])->name("detalhe_PROFESSOR.lista");
Route::get ('/professores/deletar/{id}', [ProfessoresController::class,'destroy'])->name("deletar.professor");
Route::get('/professores/editar/{id}', [ProfessoresController::class,'edit'])->name("editar.professor");
Route::post('/professores/atualizar/{id}', [ProfessoresController::class,'update'])->name("atualizar.professor");

Route::get('/turmas/list', [TurmasController::class,'index'])->name("turma.lista");
Route::get('/turmas/criar', [TurmasController::class, 'create'])->name("turma.create");
Route::post('/turma/salvar', [TurmasController::class,'store'])->name("turma.salvar");
Route::get('/turma/detalhes/{id}', [TurmasController::class,'show'])->name("detalhe_TURMA.lista");
Route::get ('/turmas/deletar/{id}', [TurmasController::class,'destroy'])->name("deletar.turma");
Route::get('/turmas/editar/{id}', [TurmasController::class,'edit'])->name("editar.turma");
Route::post('/turmas/atualizar/{id}', [TurmasController::class,'update'])->name("atualizar.turma");
