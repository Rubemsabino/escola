<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use App\Models\AlunosNotas;
use App\Models\Disciplinas;
use Illuminate\Http\Request;

class NotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alunos=Alunos::orderBy('nome')->get();
        $disciplinas=Disciplinas::orderBy('nome')->get();
            return view('notas.create',compact('alunos','disciplinas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_aluno= $request->input('id-aluno');
        $id_disciplinas= $request->input('id-disciplina');
        $unidade= $request->input('unidade');
        $projeto= $request->input('projeto');
        $teste= $request->input('teste');
        $prova= $request->input('prova');

        $nota = new AlunosNotas;
        $nota ->alunos_id=$id_aluno;
        $nota ->disciplina_id=$id_disciplinas;
        $nota ->unidade=$unidade;
        $nota ->projeto=$projeto;
        $nota ->teste=$teste;
        $nota ->prova=$prova;
            
        $nota->save();

        
        $mensagem = 'Notas Salvas!';
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
        //
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
        //
    }
}
