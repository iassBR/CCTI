<?php

namespace App\Http\Controllers\Admin;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Papel;
use Illuminate\Support\Facades\Gate;
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function validarUsuario($request){
        $validator = Validator::make($request->all(),
            ['name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'cpf' => 'required',
            'bairro' => 'required',
            'logradouro' => 'required',
            'num' => 'required',
            'telefone' =>'required',
            'papel_id' => 'required'
        ]);
        return $validator;
    }

    public function index()
    {
        if(Gate::denies('usuario-view')){
            abort(403,"Não autorizado!");
          }
        $users = User::all();
        $papeis = Papel::all();            
        return view('admin.usuarios.index',compact('users','papeis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Gate::denies('usuario-create')){
            abort(403,"Não autorizado!");
          }
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Gate::denies('usuario-store')){
            abort(403,"Não autorizado!");
          }

        
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
        if(Gate::denies('usuario-edit')){
            abort(403,"Não autorizado!");
          }

       
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
        if(Gate::denies('usuario-update')){
            abort(403,"Não autorizado!");
          }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        if(Gate::denies('usuario-delete')){
            abort(403,"Não autorizado!");
          }
      
    }
    public function remover($id){
        if(Gate::denies('usuario-delete')){
            abort(403,"Não autorizado!");
          }
      
   }

   public function papel($id)
   {
     if(Gate::denies('usuario-edit')){
       abort(403,"Não autorizado!");
     }

     $usuario = User::find($id);
     $papel = Papel::all();
     
     return view('admin.usuarios.papel',compact('usuario','papel'));
   }

   public function papelStore(Request $request,$id)
   {
       if(Gate::denies('usuario-edit')){
         abort(403,"Não autorizado!");
       }
       $usuario = User::find($id);
       $dados = $request->all();
       $papel = Papel::find($dados['papel_id']);
       $usuario->adicionaPapel($papel);
       return redirect()->back();
   }

   public function papelDestroy($id,$papel_id)
   {
     if(Gate::denies('usuario-edit')){
       abort(403,"Não autorizado!");
     }
     $usuario = User::find($id);
     $papel = Papel::find($papel_id);
     $usuario->removePapel($papel);
     return redirect()->back();
   }

}
