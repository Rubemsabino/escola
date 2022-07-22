<?php

namespace App\Http\Controllers;

use App\Models\Professores;
use App\Models\Turmas;
use Illuminate\Http\Request;

class TurmasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turmas = Turmas::orderBy('nome')->get();
    return view('turmas.lista', compact('turmas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $professores= Professores::orderBy('nome')->get();
        return view('turmas.create', compact('professores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nome = $request->input('nome');
        $prof = $request->input('prof');



        $aluno = new Turmas();
        $aluno->nome = $nome;
        $aluno->id_professor = $prof;
        $aluno->save();

        $mensagem = 'Turma Salva!';
        return view('turmas.sucesso', compact('mensagem'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalhes = Turmas::find($id);
        return view('turmas.detalhes', compact('detalhes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        //pega aluno do BD
        $turma = Turmas::find($id);
        $professores= Professores::orderBy('nome')->get();
        // exibe form de edicao do aluno e evia dos dados do aluno
        return view('turmas.editar', compact('turma','professores'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nome = $request->input('nome');
        $prof = $request->input('prof');


        $aluno = Turmas::find($id);

        $aluno->nome = $nome;
        $aluno->id_professor = $prof;

        $aluno->save();

        $mensagem = 'Turma Editada!';
        return view('turmas.sucesso', compact('mensagem'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Turmas::destroy($id);
        $mensagem = 'Turma Excluido!';
        return view('turmas.sucesso', compact('mensagem'));
    }
}
