<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use Illuminate\Http\Request;


class AlunosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Alunos::orderBy('nome')->get();
        return view('alunos.lista', compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alunos.create');
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
        $mae = $request->input('mae');
        $pai = $request->input('pai');
        $celular = $request->input('celular');

        $aluno = new Alunos;
        $aluno->nome = $nome;
        $aluno->nomedamae = $mae;
        $aluno->nomedopai = $pai;
        $aluno->celular = $celular;
        $aluno->save();

        $mensagem = 'Aluno Salvo!';
        return view('alunos.sucesso', compact('mensagem'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalhes = Alunos::find($id);
        return view('alunos.detalhes', compact('detalhes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alunos::destroy($id);
        $mensagem = 'Aluno Excluido!';
        return view('alunos.sucesso', compact('mensagem'));
    }
}
