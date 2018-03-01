<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Escolaridade;
use App\Cargo;
use App\Seletivo;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class EscolaridadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function validarEscolaridade($request){
        $validator = Validator::make($request->all(),
            ["tipo" => "required",
        ]);
        return $validator;
    }
    public function index(Request $request)
    {
        $qtd = $request['qtd'] ?: 4;
        $page = $request['page'] ?: 1;
        $buscar = $request['buscar'];

        Paginator::currentPageResolver(function () use ($page){
            return $page;
        });

        if($buscar){
            $escolaridades = Escolaridade::where('tipo','=', $buscar)->paginate($qtd);
        }else{  
            $escolaridades = Escolaridade::paginate($qtd);

        }
        $escolaridades = $escolaridades->appends(Request::capture()->except('page'));
        return view('escolaridades.index', compact('escolaridades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $escolaridades = Escolaridade::all();
        return view('escolaridades.create', compact('escolaridades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validarEscolaridade($request);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->erros());
        }

        $dados = $request->all(); // pega todas as informações do formulário e armazena em $dados
        $escolaridade = Escolaridade::create($dados);
        return redirect()->route('escolaridades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $escolaridade = Escolaridade::find($id);
        return view('escolaridades.show', compact('escolaridade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // verificar o relacionameto 1 N
         $escolaridade = Escolaridade::find($id);
         
        return view('escolaridades.edit', compact('escolaridade'));
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
        $validator = $this->validarEscolaridade($request);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->erros());
        }

        $escolaridade = Escolaridade::find($id);
        $dados = $request->all();
        $escolaridade->update($dados);

        return redirect()->route('escolaridades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Escolaridade::find($id)->delete();
        return redirect()->route('escolaridades.index');
    }
    public function remover($id){
        $escolaridade = Escolaridade::find($id);
        return view('escolaridades.remove', compact('escolaridade'));
    }
}
