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

Route::get('/', function () {    return view('welcome');});



Route::get('/alunos/novo', function () {    return view('alunos');});
Route::post('/alunos/novo', function (Request $request) {
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

dd('ok');
});

// exebir formulario para cadastro do professro
Route::get('/professores/novo', function () {    return view('professores');});
Route::post('/professores/novo', function (Request $request) {
    $nome=$request->input('nome');
    $celular=$request->input('celular');
    $formacao=$request->input('formacao');

    $professor=new Professores();
    $professor->nome=$nome;
    $professor->celular=$celular;
    $professor->formacao=$formacao;
    $professor->save();

dd('ok');
});

// exebir formulario para cadastro de disciplina
Route::get('/disciplina/novo', function () {    return view('disciplina');});
Route::post('/disciplina/novo', function (Request $request) {
    $nome=$request->input('nome');


    $disciplina=new Disciplina();
    $disciplina->nome=$nome;
    $disciplina->save();

    dd('ok');
});


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
