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
 
    <div class="panel-heading"><h3>Editar o Seletivo</h3></div>
        <div class="panel-body">
        <form method="post" action="{{route ('seletivos.update', $projeto->id)}}">
         <input type="hidden" name="_method" value="PUT">   
        {{ csrf_field() }}

        <div class="form-group">
            <label for="nomeSeletivo">Nome Seletivo</label>
            <input type="text" class="form-control" placeholder="Nome Seletivo" name="nomeSeletivo" required value="{{$projeto->titulo}}">
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
                        <label for="nomeSeletivo">Cargo desejado</label>
                        <input type="text" class="form-control" placeholder="Cargo Desejado" name="cargoDesejado" required>  
                    </div>
            </div> 
        
          
            <div class="col-md-6">          
                <div class="form-group">
                    
                    <label for="tempoxp">Tempo de experiência</label>
                    <input type="text" class="form-control" name="tempoExperiencia" placeholder="Tempo de Experiência" required>
                </div>     
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