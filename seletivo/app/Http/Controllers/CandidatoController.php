<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CandidatoRequest;
use App\Seletivo;
use App\Candidato;
use App\Endereco;
use App\ExperienciaProfissional;
use App\Formacao;
class CandidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //private $id; 

  

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {      //passar od $id como parametro

        //verificar se existe o candidato para salvar apenas as experiencias e formações DB::table('users')->where('votes', '=', 100)->get();
       // $cpf =  $request->input('cpf');
        //$seletivo = Seletivo::find($id); 
        $cpf = "";
        if($cpf){
            //$cpf = "134.432.313-21";
            $candidato = Candidato::where('cpf','=', $cpf)->first();
            //dd($candidato);
            if($candidato){

                $endereco = Endereco::find($candidato->endereco_id);
                //dd($endereco);
                $experiencias = ExperienciaProfissional::where('candidato_id','=' ,$candidato->id)->get();
                //dd($experiencias);
    
                $formacoes = Formacao::where('candidato_id','=',$candidato->id)->get();
                //dd($formacoes);
                return view('candidato.curriculo' ,compact ('candidato, seletivo','endereco'));
            }
           
           
        }       

        return view('candidato.curriculo');
       // return("Oi");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

   
    public function store(CandidatoRequest $request)
    {
        //Ordem para salvar
        //endereco
        //candidato
        //experiencias formacoes e deficiencia se tiver

        $data = $request->all();
        $experiencias = [];
        $formacoes = [];

        //dd($valores);  
       
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

        //dd($candidato->experiencias());
        return ('finalle com sucesso');            

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
