@extends('layouts.admin')

@section('content')
@can('escolaridadeSeletivo-view')
<div class="panel panel-default">    
    <div class="panel-heading">Lista de Escolaridade para o Seletivo: {{$seletivo->nomeSeletivo}}</div>	
    
		<div class="panel-body">
			<form class="form-horizontal" action="{{route('seletivos.escolaridade.store',$seletivo->id)}}" method="post">
			{{ csrf_field() }}
                <div class="form-control" >
                    <select name="escolaridade_id">
                        @foreach($escolaridade as $valor)
                        <option value="{{$valor->id}}">{{$valor->tipo}}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-primary">Adicionar</button>
                <a href="{{route('seletivos.index')}}" class="btn btn-primary">Voltar</a>

			</form>
		</div>

		<div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>tipo</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($seletivo->escolaridade as $escolaridade)
                        <tr>
                            <td>{{ $escolaridade->tipo }}</td>
                            <td>
                                <form action="{{route('seletivos.escolaridade.destroy',[$seletivo->id,$escolaridade->id])}}" method="post">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button title="Deletar" class="btn btn-danger">Deletar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
               
            </div>
           
		</div>

	</div>
@endcan
@endsection
