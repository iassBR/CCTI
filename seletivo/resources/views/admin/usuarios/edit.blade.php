@extends('layouts.admin')

@section('content')
@can('usuario-edit') 
@if($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif
<div class="container">
<div class="row"> 
<div class='col-md-10 col-md-offset-2'>
<div class="panel panel-default">
        <div class="panel-heading"><h3>Edite o Usuário</h3></div>
        <div class="panel-body">
            <form method="post" action="{{route ('usuarios.update', $user->id)}}">  
            {{ csrf_field() }} 
            {{ method_field('PUT') }}         
                <h4>Dados do Usuário</h4>
                <hr>
                <div class="input-field">
                <label for="name" class="col-md-4 control-label">Nome</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name"  required value="{{$user->name}}" >
                   
                </div>
            </div>       
        
                   
            <div class="input-field">
                <label for="bairro" class="col-md-4 control-label">Bairro</label>

                <div class="col-md-6">
                    <input id="bairro" type="text" class="form-control" name="bairro"  required value="{{$user->bairro}}">

                   
                </div>
            </div>
            <div class="input-field">
                <label for="logradouro" class="col-md-4 control-label">Logradouro</label>

                <div class="col-md-6">
                    <input id="logradouro" type="text" class="form-control" name="logradouro" required value="{{$user->logradouro}}">

                   
                </div>
            </div>
            <div class="input-field">
                <label for="num" class="col-md-4 control-label">Numero</label>

                <div class="col-md-6">
                    <input id="num" type="number" class="form-control" name="num" required value="{{$user->num}}">

                   
                </div>
            </div>

            <div class="input-field">
                <label for="telefone" class="col-md-4 control-label">telefone</label>

                <div class="col-md-6">
                    <input id="telefone" type="text" class="form-control" name="telefone"  required value="{{$user->telefone}}">

                  
                </div>
            </div>
            
          
               
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Voltar</a>
                    <button type="submit" class="btn btn-primary">Atualizar</button>
            
            </form>
        </div>
    </div>
    </div>
</div>
</div>

@endcan
@endsection