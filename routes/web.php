<?php

use App\Http\Controllers\Aluno;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Alunos;
use App\Models\Professores;
use App\Models\Disciplina;
use App\Models\AlunosTurmas;
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
Route::get('/alunos/form', function () {    return view('aluno-form');})->name("aluno.form");
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
Route::get('/disciplina/form', function () {    return view('disciplina-form');})->name("disciplina.form");
Route::post('disciplina/salvar', function (Request $request) {
    $nome=$request->input('nome');


    $disciplina=new Disciplina();
    $disciplina->nome=$nome;
    $disciplina->save();

    return view('disciplina-sucesso');
})->name("disciplina.salvar");


Route::get('/alunos/{id}', function (Request $request,$id) {
$aluno=Alunos::find($id);

    //dd($aluno->toString());
return $aluno;

});


Route::get('/turmas/{codigo}', function (Request $request,$codigo) {
    $at=AlunosTurmas::where('turmas_id','=',$codigo)->get();

        //dd($aluno->toString());
    return $at;

    });
