@extends('layouts.app')

@section('content')
    
        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif
<div class="panel panel-default">
 
    <div class="panel-heading"><h3>Cadastre o Seletivo</h3></div>
        <div class="panel-body">
        <form method="post" action="{{route ('seletivos.store')}}">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="descricao">Nome Seletivo</label>
            <input type="text" class="form-control" placeholder="Nome Seletivo" name="nomeSeletivo" required>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="preco">Data Inicio</label>
                    <input type="date" class="form-control" name="dataInicio" required>
                </div>
            </div>
       
            <div class="col-md-4">
                <div class="form-group">
                    <label for="preco">Data Termino</label>
                    <input type="date" class="form-control" name="dataTermino" required>
                </div>
            </div>
           
        </div> 

        <div class="row">  
            <div class="col-md-6">
                    <div class="form-group">
                        <label for="nomeCargo">Cargo desejado</label>
                        <select class="form-control" name="nomeCargo" required>
                        @foreach($cargos as $cargo)
                            <option value="{{$cargo->id}}">{{$cargo->nomeCargo}}</option>
                        @endforeach  
                        </select>
                    </div>
            </div> 

        <div class="col-md-4">
                <label for="escolaridade_id">Selecione a escolaridade: </label>
                <select class="form-control" name="escolaridade_id" required>
                @foreach($escolaridades as $escolaridade)            
                  <option value="{{$escolaridade->id}}">{{$escolaridade->tipo}}</option>      
                @endforeach
                </select>
        </div> 

        </div>     
        
        <span class="pull-right">
            <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </span>
    </form>
    </div>
</div>

@endsection