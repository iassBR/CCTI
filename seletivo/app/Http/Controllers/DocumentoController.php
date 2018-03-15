<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Documento;
use App\Seletivo;
use File;
use Validator;
use App\http\Controllers\SeletivoController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\UploadedFile;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documento = Documento::all();
        return view('documentos.index',compact('documento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
         $seletivo = Seletivo::find($request->get('seletivo_id'));
         return view('documentos.create',compact('seletivo')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    function validartitulo($request){
        $validator = 
        Validator::make($request->all(),[
            "titulo" => "required" 
        ]);
        return $validator;
    }
    public function store(Request $request)
    {
            $validator = $this->validartitulo($request);
            if($validator->fails()){
                return back()->with('erro','Erro: Iinforme o titulo do documento');
            }else{                   
                    if(Input::file('documento') )
                     {
                        $documento = Input::file('documento');
                        $extensao = $documento->getClientOriginalExtension();
                        if($extensao != 'pdf'){
                        return back()->with('erro','Erro: Este arquivo não é do tipo PDF');
                    }
                }    
            }   
        
    //   $documento->seletivo()->bind($dados['seletivo_id']);
      if(Input::file('documento'))
      {
        $documento = new Documento;
        $documento->nome_documento = $request->titulo;
        $documento->seletivo_id = $request->seletivo_id;
        $documento->endereço_armazenado = " ";
        $documento->save();

        $documento->endereço_armazenado = public_path().'\DocUp\documento-Id_'.$documento->id.'.'
        .$extensao;
        File::Move(Input::file('documento'), public_path().'\DocUp\documento-Id_'.$documento->id.'.'
        .$extensao);
        $documento->save();
      }else{
          return back()->with('erro','Erro: Este arquivo não pode ser armazenado');
      }
      return redirect('\documentos');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id) 
    {   
        $qtd = $request['qtd'] ?: 4;
        $page = $request['page'] ?: 1;
        $buscar = $request['buscar'];
        
        
        
        Paginator::currentPageResolver(function () use ($page)
        {
            return $page;
        });
            if($buscar){
                $documento = DB::table('documentos')
                ->where([                                               
                        ['nome_documento','like', $buscar.'%'],
                        ['seletivo_id','=',$id],
                ])-> paginate($qtd);
            
            }else{
                 $documento = DB::table('documentos')->where('seletivo_id','=',$id)->paginate($qtd);
            }
            // var_dump($seletivo).exit();
                
        $documento = $documento->appends(Request::capture()->except('page'));
        return view('documentos.show')->with('documento', $documento);
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
        $documento = Documento::find($id);
        File::delete(public_path().'/DocUp/documento-Id_'.$documento->id.'.pdf');
        Documento::find($id)->delete();     
        return redirect('/documentos');
    }
    public function remover($id)
    {
        $documento = Documento::find($id);
        return view('documentos.remove',compact('documento'));
    }
    public function  download($id, Request $request)
    {       
        $documento = Documento::find($id);       
        $fileName = $documento->nome_documento;
        $dir = $documento->endereço_armazenado;
        $headers = array(
            'Content-Type: application/pdf',
            
        );
        return response()->file($dir,$headers);
    }
}