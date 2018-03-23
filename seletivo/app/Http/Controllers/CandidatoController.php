<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\CandidatoRequest;

use App\Seletivo;
use App\Candidato;
use App\Endereco;
use App\ExperienciaProfissional;
use App\Formacao;
use App\Cargo;
class CandidatoController extends Controller
{
   
  

    public function index()
    {
        //
    }

   
    public function create(Request $request,$id)
    {      //passar od $id como parametro

        //verificar se existe o candidato para salvar apenas as experiencias e formações DB::table('users')->where('votes', '=', 100)->get();
        
        $data = $request->all();
        
        $cpf =  $request->input('cpf');
        //dd($id);
        $seletivo = Seletivo::find($id); 
        
        if($cpf){
            //$cpf = "134.432.313-21";
            $candidato = Candidato::where('cpf','=', $cpf)->first();
           // dd($candidato);
            if($candidato){

                $endereco = Endereco::find($candidato->endereco_id);
                //dd($endereco);
                $experiencias = ExperienciaProfissional::where('candidato_id','=' ,$candidato->id)->get();
                //dd($experiencias);
    
                $formacoes = Formacao::where('candidato_id','=',$candidato->id)->get();
                //dd($formacoes);
               // dd($candidato);
                return view('candidato.edit' ,compact ('candidato','seletivo','endereco','formacoes','experiencias'));
            }
           
           
        }       

        return view('candidato.create',compact('seletivo','cpf'));
       // return("Oi");
    }

    public function update(Request $request, Seletivo $seletivo, Candidato $candidato){

        $data = $request->all();     

        $candidato = Candidato::find($candidato->id);
        
        $endereco = Endereco::find($candidato->endereco_id);        

        $candidato->update($data);
        $endereco->update($data);
        
        return redirect()->route('candidatos.create', [
            $seletivo,
            'cpf' => $candidato->cpf 
            ] );
    }
    
  
    
    public function cargoShow(Seletivo $seletivo, Candidato $candidato){
        $candidato = Candidato::find($candidato->id);
        $cargos = Cargo::all();
        return view('candidato.cargos', compact( 'seletivo','candidato', 'cargos'));
    }
    public function cargoStore(Request $request, Seletivo $seletivo, Candidato $candidato){

        $candidato = Candidato::find($candidato->id);
        $data = $request->all();
        $cargo = Cargo::find($data['cargo_id']);
        $candidato->adicionaCargo($cargo);
        $cargos = Cargo::all();
        return view('candidato.cargos', compact( 'seletivo','candidato', 'cargos'));
    }

    public function cargoDestroy(Seletivo $seletivo, Candidato $candidato, Cargo $cargo)
    {
 
      
      $candidato = Candidato::find($candidato->id);
      $cargo = Cargo::find($cargo->id);
      $candidato->removeCargo($cargo);
      $cargos = Cargo::all();
      return view('candidato.cargos', compact('seletivo','candidato',  'cargos'));
    }


    public function store(CandidatoRequest $request)
    {

        $data = $request->all();
        $experiencias = [];
        $formacoes = [];

        //dd($data);  
       
        $endereco = Endereco::create($data);
        $data['endereco_id'] = $endereco->id;
        
        $candidato = Candidato::create($data, 'endereco_id');
        $data['candidato_id'] = $candidato->id;
        //dd($data['candidato_id']);      

        foreach($data['experiencias'] as $i => $experiencia){
            $experiencias[$i] = new ExperienciaProfissional($experiencia);                      
        }
        $candidato->experiencias()->saveMany($experiencias);


        foreach($data['formacoes'] as $i => $formacao){
            $formacoes[$i] = new Formacao($formacao);                      
        }
        //dd($data['formacoes']);
        $candidato->formacoes()->saveMany($formacoes);



        // VERIFICAR SE TODAS AS ENTIDADES FORAM SALVAS, CASO CONTRÁRIO DEVE DAR ROLLBACK

        //$this->cargoStore($candidato);      

        $seletivo = Seletivo::find($data['seletivo_id']);
        // $candidato->adicionaSeletivo($seletivo);
             
        //dd($candidato->experiencias());

        $cargos = Cargo::all();
        return view('candidato.cargos', compact('candidato',  'cargos'));            

    }
    
 
    
}
