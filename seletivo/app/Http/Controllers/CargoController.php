<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cargo;
use App\Escolaridade;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;


class CargoController extends Controller
{
protected function validarCargo($request){
    $validator = Validator::make($request->all(), [
            "nomeCargo" => "required"

   ]);
   return $validator;
}


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){

        $qtd = $request['qtd'] ?: 8;
        $page = $request['page'] ?: 1;
        $buscar = $request['buscar'];
 
        Paginator::currentPageResolver(function () use ($page){
            return $page;
        });
 
        if($buscar){
            $cargos = Cargo::where('nomeCargo','=', $buscar)->paginate($qtd);
        }else{  
            $cargos = Cargo::paginate($qtd);
 
        }
        $cargos = $cargos->appends(Request::capture()->except('page'));
        return view('cargos.index', compact('cargos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $escolaridades = Escolaridade::all();
        return view('cargos.create', compact('escolaridades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $validator = $this->validarCargo($request);
    if($validator->fails()){
        return redirect()->back()->withErrors($validator->errors());
    }

        $dados = $request->all();
        Cargo::create($dados);

        return redirect()->route('cargos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cargo = Cargo::find($id);
 
        return view('cargos.show', compact('cargo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $escolaridades = Escolaridade::all();
       $cargo = Cargo::find($id);
 
        return view('cargos.edit', compact('cargo','escolaridades'));
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
        $validator = $this->validarCargo($request);
         
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }
 
        $cargo = Cargo::find($id);
        $dados = $request->all();
        $cargo->update($dados);
         
        return redirect()->route('cargos.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cargo::find($id)->delete();
        return redirect()->route('cargos.index');
    }
    public function remover($id)
    {
        $cargo = Cargo::find($id);
 
        return view('cargos.remove', compact('cargo'));
    }
}