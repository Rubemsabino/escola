<?php

namespace App\Http\Controllers;
use App\Models\Professores;
use Illuminate\Http\Request;

class ProfessoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professores = Professores::orderBy('nome')->get();
        return view('professores.lista', compact('professores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('professores.create');
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
        $celular = $request->input('celular');
        $formacao = $request->input('formacao');

        $professor = new Professores();
        $professor->nome = $nome;
        $professor->celular = $celular;
        $professor->formacao = $formacao;
        $professor->save();

        $mensagem = 'Professor Salvo!';
        return view('professores.sucesso', compact('mensagem'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalhes = Professores::find($id);
    return view('professores.detalhes', compact('detalhes'));
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
        $professor = Professores::find($id);

        // exibe form de edicao do aluno e evia dos dados do aluno
        return view('professores.editar', compact('professor'));
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
        $celular = $request->input('celular');
        $formacao = $request->input('formacao');

        $professor = Professores::find($id);

        $professor->nome = $nome;
        $professor->celular = $celular;
        $professor->formacao = $formacao;

        $professor->save();

        $mensagem = 'Professor Editado!';
        return view('professores.sucesso', compact('mensagem'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Professores::destroy($id);
        $mensagem = 'Professor Excluido!';
        return view('alunos.sucesso', compact('mensagem'));
    }
}
