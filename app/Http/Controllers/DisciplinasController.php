<?php

namespace App\Http\Controllers;

use App\Models\Disciplinas;
use Illuminate\Http\Request;


class DisciplinasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disciplinas = Disciplinas::orderBy('nome')->get();
        return view('disciplinas.lista', compact('disciplinas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('disciplinas.create');
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
        $disciplina = new disciplinas();
        $disciplina->nome = $nome;
        $disciplina->save();

        $mensagem = 'Disciplina Salva!';
        return view('disciplinas.sucesso', compact('mensagem'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalhes = Disciplinas::find($id);
        return view('disciplinas.detalhes', compact('detalhes'));
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
        $disciplina = Disciplinas::find($id);

        // exibe form de edicao do aluno e evia dos dados do aluno
        return view('disciplinas.editar', compact('disciplina'));
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
       
        $disciplina = Disciplinas::find($id);

        $disciplina->nome = $nome;

        $disciplina->save();

        $mensagem = 'Disciplina Editada!';
        return view('disciplinas.sucesso', compact('mensagem'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Disciplinas::destroy($id);
        $mensagem = 'Disciplina Excluida!';
        return view('disciplinas.sucesso', compact('mensagem'));
    }
}
