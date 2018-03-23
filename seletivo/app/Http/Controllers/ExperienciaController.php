<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seletivo;
use App\Candidato;
use App\ExperienciaProfissional;
class ExperienciaController extends Controller
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
    public function create(Seletivo $seletivo, Candidato $candidato)
    {
        return view('experiencia.create',compact('seletivo','candidato'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,  Seletivo $seletivo, Candidato $candidato)
    {
        $dados = $request->all();
        $experiencia = ExperienciaProfissional::create($dados);
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
    public function edit(Seletivo $seletivo, Candidato $candidato, ExperienciaProfissional $experiencia)
    {
        return view('experiencia.edit' , compact('seletivo','experiencia','candidato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seletivo $seletivo, Candidato $candidato, ExperienciaProfissional $experiencia)
    {
        $data = $request->all();
        $experiencia->update($data);
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
    public function destroy(Request $request, Seletivo $seletivo, Candidato $candidato, ExperienciaProfissional $experiencia)
    {
        $data = $request->all();
        ExperienciaProfissional::find($experiencia->id)->delete();

        return redirect()->route('candidatos.create', [
            $seletivo,
            'cpf' => $request->cpf 
            ] );
    }

    public function remove( Seletivo $seletivo, Candidato $candidato, ExperienciaProfissional $experiencia){
        return view('experiencia.remove' , compact('seletivo','experiencia','candidato'));
    }
}
