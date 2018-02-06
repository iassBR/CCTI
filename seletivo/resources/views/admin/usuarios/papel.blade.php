@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
    <div class="panel panel-default">
		<div class="panel-heading"><h3>Lista de Papéis para {{$usuario->name}}</h3></div>

		

		<div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form class="form-horizontal" action="{{route('usuarios.papel.store',$usuario->id)}}" method="post">
                {{ csrf_field() }}
                <div class="input-field">
                    <select name="papel_id">
                        @foreach($papel as $valor)
                        <option value="{{$valor->id}}">{{$valor->nome}}</option>
                        @endforeach
                    </select>
                </div>
                    <button class="btn btn-primary">Adicionar</button>
                    <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Voltar</a>
                </form>
            </div>

		</div>

		<div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table table-bordered">
                    <thead>
                        <tr>

                            <th>Papel</th>
                            <th>Descrição</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($usuario->papeis as $papel)
                        <tr>
                            <td>{{ $papel->nome }}</td>
                            <td>{{ $papel->descricao }}</td>

                            <td>

                                <form action="{{route('usuarios.papel.destroy',[$usuario->id,$papel->id])}}" method="post">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button title="Deletar" class="btn btn-primary"><i class="material-icons">delete</i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
           
		</div>

	</div>
    </div>
    </div>
@endsection
