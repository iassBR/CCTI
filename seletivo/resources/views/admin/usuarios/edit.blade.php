@extends('layouts.admin')

@section('content')  
<div class="panel panel-default">
        <div class="panel-heading"><h3>Edite o Usuário</h3></div>
        <div class="panel-body">
            <form method="post" action="{{route ('usuarios.update', $user->id)}}">  
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}          
                <h4>Dados do Usuário</h4>
                <hr>
                <div class="form-group">
                <label for="name" class="col-md-4 control-label">Nome</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name"  required value="{{$user->name}}" >

                    
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-md-4 control-label">E-Mail</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" required value="{{ $user->email }}">

                    
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-md-4 control-label">Senha</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" required value="{{$user->password}}">

                   
                </div>
            </div>

            
            <div class="form-group">
                <label for="cpf" class="col-md-4 control-label">CPF</label>

                <div class="col-md-6">
                    <input id="cpf" type="text" class="form-control" name="cpf"  required value="{{$user->cpf}}">

                    
                </div>
            </div>
            <div class="form-group">
                <label for="bairro" class="col-md-4 control-label">Bairro</label>

                <div class="col-md-6">
                    <input id="bairro" type="text" class="form-control" name="bairro"  required value="{{$user->bairro}}">

                   
                </div>
            </div>
            <div class="form-group">
                <label for="logradouro" class="col-md-4 control-label">Logradouro</label>

                <div class="col-md-6">
                    <input id="logradouro" type="text" class="form-control" name="logradouro" required value="{{$user->logradouro}}">

                   
                </div>
            </div>
            <div class="form-group">
                <label for="num" class="col-md-4 control-label">Numero</label>

                <div class="col-md-6">
                    <input id="num" type="number" class="form-control" name="num" required value="{{$user->num}}">

                   
                </div>
            </div>

            <div class="form-group">
                <label for="telefone" class="col-md-4 control-label">telefone</label>

                <div class="col-md-6">
                    <input id="telefone" type="string" class="form-control" name="telefone"  required value="{{$user->telefone}}">

                  
                </div>
            </div>
            <div class="form-group" >
                
                <div class="form-group">
                    <label for="papel_id" class="col-md-4 control-label">Selecione o papel deste usuário</label>
                    <div  class="col-md-6">
                    <select class="form-control" name="papel_id" required>
                            @foreach($papeis as $papel)            
                                <option value="{{$papel->id}}" 
                                        {{(isset($user->papel_id) && $user->papel_id == $papel->id ? 
                                        'selected' : '')}}>{{$papel->nome}}
                                </option>
                            @endforeach
                    </select>
                    </div>
                </div>     
            </div>
          
               
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Voltar</a>
                    <button type="submit" class="btn btn-primary">Editar</button>
            
            </form>
        </div>
    </div>

@endsection