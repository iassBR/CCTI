@extends('layouts.app')

@section('content')
    <div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Adicionar novo projeto</h3>
        <div class="box-tools pull-right">
        <!-- Buttons, labels, and many other things can be placed here! -->
        </div>
        <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif
        <form method="post" action="{{route ('projetos.store')}}" enctype="multipart/form-data">
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
       <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="preco">Data Termino</label>
                    <input type="date" class="form-control" name="dataTermino" required>
                </div>
            </div>
           
        </div>   
               
        <div class="form-group">
            <label for="tempoxp">Tempo de experiência</label>
<input type="text" class="form-control" name="tempoExperiencia" placeholder="Tempo de Experiência" required>
        </div>     
        
      
        <div class="form-group">
            <label for="aluno_id">Selecione o aluno desse projeto</label>
            <select class="form-control" name="aluno_id" required>
            @foreach($alunos as $aluno)            
                <option value="{{$aluno->id}}">{{$aluno->nome}}</option>            
            @endforeach
            </select>
        </div>     
        <h4>Área de Pesquisa</h4>
        
        <div class="form-group">
            <label for="area_pesquisa_id">Selecione a area de pesquisa desse projeto</label>
            <select class="form-control" name="area_pesquisa_id" required>
            @foreach($areaPesquisas as $area)            
                <option value="{{$area->id}}">{{$area->descricao}}</option>            
            @endforeach
            </select>
        </div>   
        <span class="pull-right">
            <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </span>
    </form>
    
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
    </div>
    <!-- box-footer -->
    </div>
    <!-- /.box -->
@endsection