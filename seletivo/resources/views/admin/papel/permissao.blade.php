@extends('layouts.admin')

@section('content')
<div class="panel panel-default">    
    <div class="panel-heading">Lista de Permissões para {{$papel->nome}}</div>	
    
		<div class="panel-body">
			<form class="form-horizontal" action="{{route('papeis.permissao.store',$papel->id)}}" method="post">
			{{ csrf_field() }}
                <div class="form-control" >
                    <select name="permissao_id">
                        @foreach($permissao as $valor)
                        <option value="{{$valor->id}}">{{$valor->nome}}</option>
                        @endforeach
                    </select>
                </div>
				<button class="btn btn-primary">Adicionar</button>
			</form>


		</div>

		<div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>

                            <th>Permissão</th>
                            <th>Descrição</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($papel->permissoes as $permissao)
                        <tr>
                            <td>{{ $permissao->nome }}</td>
                            <td>{{ $permissao->descricao }}</td>

                            <td>

                                <form action="{{route('papeis.permissao.destroy',[$papel->id,$permissao->id])}}" method="post">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button title="Deletar" class="btn btn-primary">Deletar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
		</div>

	</div>

@endsection
