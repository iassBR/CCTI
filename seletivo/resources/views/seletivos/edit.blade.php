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
        <form method="post" action="{{route('seletivos.update', $seletivo->id)}}">
         <input type="hidden" name="_method" value="PUT">   
        {{ csrf_field() }}

        <div class="form-group">
            <label for="nomeSeletivo">Nome Seletivo</label>
            <input type="text" class="form-control" placeholder="Nome Seletivo" name="nomeSeletivo" required value="{{$seletivo->nomeSeletivo}}">
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="preco">Data Inicio</label>
                    <input type="date" class="form-control" name="dataInicio" required value="{{$seletivo->dataInicio}}">
                </div>
            </div>
       
            <div class="col-md-4">
                <div class="form-group">
                    <label for="preco">Data Termino</label>
                    <input type="date" class="form-control" name="dataTermino" required value="{{$seletivo->dataTermino}}">
                </div>
            </div>
           
        </div> 
        <div class="row">  
            <div class="col-md-6">
                    <div class="form-group">
                        <label for="nomeSeletivo">Cargo desejado</label>
                        <input type="text" class="form-control" placeholder="Cargo Desejado" name="cargoDesejado" required value="{{$seletivo->cargoDesejado}}">
                    </div>
            </div> 
        
          
            <div class="col-md-6">          
                <div class="form-group">
                    
                    <label for="tempoxp">Tempo de experiência</label>
                    <input type="text" class="form-control" name="tempoExperiencia" placeholder="Tempo de Experiência" required value="{{$seletivo->tempoExperiencia}}">
                </div>     
            </div> 
        </div>
        <div class="form-group">
            <label for="marca_id">Selecione a Escolaridade</label>
            <select class="form-control" name="escolaridade_id" required>
            @foreach($escolaridades as $escolaridade)            
                <option value="{{$escolaridade->id}}"
                {{(isset($seletivo->escolaridade_id) && $seletivo->escolaridade_id == $escolaridade->id ? 
                'selected' : '')}}>{{$escolaridade->tipo}}
                </option>
            @endforeach
            </select>
        <span class="pull-right">
            <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
            <button type="submit" class="btn btn-primary">Editar</button>
        </span>
    </form>
    </div>
</div>

@endsection