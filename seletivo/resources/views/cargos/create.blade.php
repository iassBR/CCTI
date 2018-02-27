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
 
    <div class="panel-heading"><h3>Cadastre o Cargo</h3></div>
        <div class="panel-body">
        <form method="post" action="{{route ('cargos.store')}}">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="cargo">Nome Cargo</label>
            <input type="text" class="form-control" placeholder="Nome Cargo" name="nomeCargo" required>
        </div>
        <div class="row"> 
            <div class="col-md-4">
                <label for="experiencia">Tempo de Experiência</label>
                <input type="text" class="form-control" placeholder="Tempo de Experiência" name="tempoExperiencia" required>
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
    </br>
        <span class="pull-left">
            <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </span>
    </form>
    </div>
</div>

@endsection