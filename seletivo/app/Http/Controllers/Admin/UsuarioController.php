<?php

namespace App\Http\Controllers\Admin;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Papel;
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
        $users = User::all();
        $papeis = Papel::all();            
        return view('admin.usuarios.create',compact('users','papeis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $validator = $this->validarUsuario($request);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $data = $request->all();
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'cpf' => $data['cpf'],
            'bairro' => $data['bairro'],
            'logradouro' => $data['logradouro'],
            'num' => $data['num'],
            'telefone' => $data['telefone'],
            'papel_id' => $data['papel_id']
        
        ]);
        return redirect()->route('admin.index');
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
        User::find($id)->delete();
        return redirect()->route('admin.index');
    }
    public function remover($id){
        $user = User::find($id);
       return view('admin.usuarios.remove', compact('user'));
   }
}
