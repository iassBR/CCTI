<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seletivo;
use App\Escolaridade;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class SeletivoController extends Controller
{
protected function validarSeletivo($request){
    $validator = Validator::make($request->all(), [
            "nomeSeletivo" => "required",
            "dataInicio"=> "required",
            "dataTermino" => "required",
            "tempoExperiencia" => "required",
            "cargoDesejado" => "required"

   ]);
   return $validator;
}


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seletivos = Seletivo::all();
        return view('seletivos.index', compact('seletivos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seletivos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $validator = $this->validarSeletivo($request);
    if($validator->fails()){
        return redirect()->back()->withErrors($validator->errors());
    }

        $dados = $request->all();
        Seletivo::create($dados);

        return redirect()->route('seletivos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $imovel = Seletivo::find($id);
 
        return view('seletivos.show', compact('seletivo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $imovel = Seletivo::find($id);
 
        return view('seletivos.edit', compact('seletivo'));
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
        $validator = $this->validarSeletivo($request);
         
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }
 
        $seletivo = Seletivo::find($id);
        $dados = $request->all();
        $seletivo->update($dados);
         
        return redirect()->route('seletivo.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Seletivo::find($id)->delete();
        return redirect()->route('seletivos.index');
    }
    public function remover($id)
    {
        $seletivo = Seletivo::find($id);
 
        return view('seletivos.remove', compact('seletivo'));
    }
}
