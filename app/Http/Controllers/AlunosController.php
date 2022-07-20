<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use Illuminate\Http\Request;


class AlunosController extends Controller
{
    /**
     * Display a listing of the resource. / Exibir uma listagem do recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Alunos::orderBy('nome')->get();
        return view('alunos.lista', compact('alunos'));
    }

    /**
     * Show the form for creating a new resource. / Mostre o formulário para criar um novo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alunos.create');
    }

    /**
     * Store a newly created resource in storage. / Armazene um recurso recém-criado no armazenamento.
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
     * Display the specified resource. / Exibir o recurso especificado.
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
     * Show the form for editing the specified resource. / Mostre o formulário para editar o recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //pega aluno do BD
        $aluno = Alunos::find($id);

        // exibe form de edicao do aluno e evia dos dados do aluno
        return view('alunos.editar', compact('aluno'));
    }

    /**
     * Update the specified resource in storage. / Atualize o recurso especificado no armazenamento
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nome = $request->input('nome');
        $mae = $request->input('mae');
        $pai = $request->input('pai');
        $celular = $request->input('celular');

        $aluno = Alunos::find($id);
        $aluno->nome = $nome;
        $aluno->nomedamae = $mae;
        $aluno->nomedopai = $pai;
        $aluno->celular = $celular;
        $aluno->save();

        $mensagem = 'Aluno Editado!';
        return view('alunos.sucesso', compact('mensagem'));
    }

    /**
     * Remove the specified resource from storage. /
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