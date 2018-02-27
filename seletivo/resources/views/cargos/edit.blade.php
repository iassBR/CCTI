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
 
    <div class="panel-heading"><h3>Editar o CArgo</h3></div>
        <div class="panel-body">
        <form method="post" action="{{route('cargos.update', $cargo->id)}}">
         <input type="hidden" name="_method" value="PUT">   
        {{ csrf_field() }}

        <div class="form-group">
            <label for="nomeCargo">Nome Cargo</label>
            <input type="text" class="form-control" placeholder="Nome Cargo" name="nomeCargo" required value="{{$cargo->nomeCargo}}">
        </div>
        <div class="row">
            <div class="col-md-4">
            <label for="tempoExperiencia">Nome Cargo</label>
            <input type="text" class="form-control" placeholder="Tempo de Experiencia" name="tempoExperiencia" required value="{{$cargo->tempoExperiencia}}">
        </div>
  
        <div class="col-md-4">
            <label for="marca_id">Selecione a Escolaridade</label>
            <select class="form-control" name="escolaridade_id" required>
            @foreach($escolaridades as $escolaridade)            
                <option value="{{$escolaridade->id}}"
                {{(isset($cargo->escolaridade_id) && $cargo->escolaridade_id == $escolaridade->id ? 
                'selected' : '')}}>{{$escolaridade->tipo}}
                </option>
            @endforeach
            </select>
         </div>
        </br>
        <span class="pull-right">
            <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
            <button type="submit" class="btn btn-primary">Editar</button>
        </span>
    </form>
    </div>
</div>

@endsection