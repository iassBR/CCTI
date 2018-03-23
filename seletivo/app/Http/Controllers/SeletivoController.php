<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seletivo;
use App\Cargo;
use App\Escolaridade;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;


class SeletivoController extends Controller
{
protected function validarSeletivo($request){
    $validator = Validator::make($request->all(), [
            "nomeSeletivo" => "required",
            "dataInicio"=> "required",
            "dataTermino" => "required"

   ]);
   return $validator;
}


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){

        if(Gate::denies('seletivo-view')){
            abort(403,"Não autorizado!");
        }   

        $qtd = $request['qtd'] ?: 8;
        $page = $request['page'] ?: 1;
        $buscar = $request['buscar'];
 
        Paginator::currentPageResolver(function () use ($page){
            return $page;
        });
 
        if($buscar){
            $seletivos = Seletivo::where('nomeSeletivo','=', $buscar)->paginate($qtd);
        }else{  
            $seletivos = Seletivo::paginate($qtd);
 
        }

        
        $seletivos = $seletivos->appends(Request::capture()->except('page'));

        return view('seletivos.index', compact('seletivos'));
    }

    public function getindex(Request $request){
        $qtd = $request['qtd'] ?: 3;
        $page = $request['page'] ?: 1;
        Paginator::currentPageResolver(function () use ($page){
            return $page;
        });
        $seletivos = DB::table('seletivos')->paginate($qtd);
        //$seletivos = Seletivo::paginate($qtd);
        $seletivos = $seletivos->appends(Request::capture()->except('page'));
        return $seletivos;

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if(Gate::denies('seletivo-create')){
            abort(403,"Não autorizado!");
        }  

        $cargos = Cargo::all();
        $escolaridades = Escolaridade::all();
        return view('seletivos.create', compact('cargos','escolaridades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Gate::denies('seletivo-store')){
            abort(403,"Não autorizado!");
        }  

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
   

        $seletivo = Seletivo::find($id);
        
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
        if(Gate::denies('seletivo-edit')){
            abort(403,"Não autorizado!");
        }  

    
       $seletivo = Seletivo::find($id);
 
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
        if(Gate::denies('seletivo-update')){
            abort(403,"Não autorizado!");
        }  

        $validator = $this->validarSeletivo($request);
         
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }
 
        $seletivo = Seletivo::find($id);
        $dados = $request->all();
        $seletivo->update($dados);
         
        return redirect()->route('seletivos.index');
    
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
        if(Gate::denies('seletivo-delete')){
            abort(403,"Não autorizado!");
        }  

        $seletivo = Seletivo::find($id);
 
        return view('seletivos.remove', compact('seletivo'));
    }
    public function cargo($id){

        $seletivo = Seletivo::find($id);
        $cargo = Cargo::all();
        return view('seletivos.cargos', compact('cargo','seletivo'));    
    }
    public function cargoStore(Request $request, $id){
        
        
         if(Gate::denies('cargoSeletivo-view')){
            abort(403,"Não autorizado!");
           }

          $seletivo = Seletivo::find($id);
          $dados = $request->all();
          $cargo = Cargo::find($dados['cargo_id']);
          $seletivo->adicionaCargo($cargo);
          return redirect()->back();
    }
    public function cargoDestroy($id,$seletivo_id)
    {
         if(Gate::denies('cargoSeletivo-view')){
             abort(403,"Não autorizado!");
           }
     
          $seletivo = Seletivo::find($id);
          $cargo = Cargo::find($seletivo_id);
          $seletivo->removeCargo($cargo);
          return redirect()->back();
        
        
    }
    public function escolaridade($id){
        if(Gate::denies('escolaridadeSeletivo-view')){
            abort(403,"Não autorizado!");
          }
        $seletivo = Seletivo::find($id);
        $escolaridade = Escolaridade::all();
        return view('seletivos.escolaridades', compact('escolaridade','seletivo'));    
    }
    public function EscolaridadeStore(Request $request, $id){
        if(Gate::denies('escolaridadeSeletivo-view')){
            abort(403,"Não autorizado!");
          }
          $seletivo = Seletivo::find($id);
          $dados = $request->all();
          $escolaridade = Escolaridade::find($dados['escolaridade_id']);
          $seletivo->adicionaEscolaridade($escolaridade);
          return redirect()->back();
    }
    public function escolaridadeDestroy($id,$seletivo_id){
        if(Gate::denies('escolaridadeSeletivo-view')){
            abort(403,"Não autorizado!");
          }
          $seletivo = Seletivo::find($id);
          $escolaridade = Escolaridade::find($seletivo_id);
          $seletivo->removeEscolaridade($escolaridade);
          return redirect()->back();  
    }
}
