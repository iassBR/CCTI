@extends('layouts.admin')

@section('content')
<div class="panel panel-default">    
    <div class="panel-heading">Lista de Papéis</div>
    
		
		<div class="row">
            <div class="col-md-12">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Digite o nome do Usuário" name="buscar">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">Pesquisar</button>
                        </span>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($registros as $registro)
                        <tr>
                            <td>{{ $registro->id }}</td>
                            <td>{{ $registro->nome }}</td>
                            <td>{{ $registro->descricao }}</td>

                            <td>


                                <form action="{{route('papeis.destroy',$registro->id)}}" method="post">
                                    @can('papel-edit')
                                    <a title="Editar" class="btn btn-primary" href="{{ route('papeis.edit',$registro->id) }}"><i class="">Editar</i></a>
                                    <a title="Permissões" class="btn btn-primary" href="{{route('papeis.permissao',$registro->id)}}"><i class="">Permissoes</i></a>
                                    @endcan
                                    @can('papel-delete')
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button title="Deletar" class="btn btn-primary"><i class="material-icons">delete</i></button>
                                    @endcan
                                </form>

                            </td>
                        </tr>
                    @endforeach
                    
                    </tbody>
                    
                </table>
               
                
            </div>
            
        </div>
        
     @can('papel-create')
        <a class="btn btn-primary" href="{{route('papeis.create')}}">Adicionar</a>
        <a href="{{ route('admin.index') }}" class="btn btn-primary">Voltar</a>
    @endcan
		           
		
	</div>

@endsection
