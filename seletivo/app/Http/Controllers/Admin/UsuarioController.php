<?php

namespace App\Http\Controllers\Admin;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Papel;
use App\Endereco;
use Illuminate\Support\Facades\Gate;
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function validarEdit($request){
        $validator = Validator::make($request->all(),
            ['name' => 'required|string|max:255',
            'email' => 'nullable',
            'password' => 'nullable',
       
       
        ]);
        return $validator;
    }
    protected function validarUsuario($request){
        $validator = Validator::make($request->all(),
            ['name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
       
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
       
        
        $papeis= Papel::all();
        return view('admin.usuarios.create', compact('papeis'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // if(Gate::denies('usuario-store')){
       //     abort(403,"Não autorizado!");
       //   }
       $validator = $this->validarUsuario($request);
       if($validator->fails()){
           return redirect()->back()->withErrors($validator->errors());
       }


          $data = $request->all(); 
          $endereco = Endereco::create(
              [
               'cep' => $data['cep'],
              'uf' => $data['uf'],
              'cidade' => $data['cidade'],
              'complemento' => $data['complemento'] ,
              'bairro' => $data['bairro'] ,
               'logradouro' => $data['logradouro'] ,
               'num' => $data['num'] 
            ]);


            if($endereco){
                //$data['endereco_id'] = ;
                $user = User::create(
                    [
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                    'endereco_id' => $endereco->id              
                    ]);
                echo "Endereco criado com sucesso";
            }                 

            return redirect()->route('usuarios.index');
       
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
          $user = User::find($id);

         // if($user->name  == "Admin"){
         //   return redirect()->route('usuarios.index');
         // }
          
          $endereco = Endereco::find($user->endereco_id);
              
          return view('admin.usuarios.edit',compact('user','endereco'));
       
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
        $validator = $this->validarEdit($request);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }

        if($request['name'] != "Admin"){
            $data = $request->all();
            $user = User::find($id);
            User::find($id)->update([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password'])
                ]);
            Endereco::find($user->endereco_id)->update($data);
        }
        
        return redirect()->route('usuarios.index');
         
        
              
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
          $user = User::find($id);
          //dd($user->endereco_id);
          Endereco::find($user->endereco_id)->delete();
          $user->delete();
          
          return redirect()->route('usuarios.index');
      
    }
    public function remover($id){
        if(Gate::denies('usuario-delete')){
            abort(403,"Não autorizado!");
            
          }

          $user = User::find($id);

          if($user->name  == "Admin"){
            return redirect()->route('usuarios.index');
        }


          $user = User::find($id);
          return view('admin.usuarios.remove',compact('user'));
      
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

     if(Papel::find($papel_id)->nome == "Admin"){
        return redirect()->route('usuarios.index');
    }
     $usuario = User::find($id);
     $papel = Papel::find($papel_id);
     $usuario->removePapel($papel);
     return redirect()->back();
   }

}
