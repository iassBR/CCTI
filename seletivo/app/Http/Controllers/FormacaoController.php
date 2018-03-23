<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seletivo;
use App\Candidato;
use App\Formacao;
class FormacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Seletivo $seletivo, Candidato $candidato)
    {
        return view('formacao.create',compact('seletivo','candidato'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Seletivo $seletivo, Candidato $candidato)
    {
        $dados = $request->all();
        $formacao = Formacao::create($dados);
        return redirect()->route('candidatos.create', [
            $seletivo,
            'cpf' => $request->cpf 
            ] );
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
    public function edit( Seletivo $seletivo, Candidato $candidato, Formacao $formacao){            
        return view('formacao.edit' , compact('seletivo','formacao','candidato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seletivo $seletivo, Candidato $candidato, Formacao $formacao){
        //dd($request->cpf);
        $data = $request->all();
        $formacao->update($data);
        // 
        return redirect()->route('candidatos.create', [
            $seletivo,
            'cpf' => $request->cpf 
            ] );
    }   


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Seletivo $seletivo, Candidato $candidato, Formacao $formacao){
        $data = $request->all();
        Formacao::find($formacao->id)->delete();

        return redirect()->route('candidatos.create', [
            $seletivo,
            'cpf' => $request->cpf 
            ] );
    }  

    
    public function remove( Seletivo $seletivo, Candidato $candidato, Formacao $formacao){
        return view('formacao.remove' , compact('seletivo','formacao','candidato'));
    }

   
}
