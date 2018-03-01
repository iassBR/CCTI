@extends('layouts.admin')

@section('content')
<div class="panel panel-default">    
    <div class="panel-heading">Lista de Seletivos {{$cargo->nomeCargo}}</div>	
    
		<div class="panel-body">
			<form class="form-horizontal" action="{{route('cargos.seletivo.store',$seletivo->id)}}" method="post">
			{{ csrf_field() }}
                <div class="form-control" >
                    <select name="cargo_id">
                        @foreach($cargo as $valor)
                        <option value="{{$valor->id}}">{{$valor->nomeCargo}}</option>
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

                            <th>Nome</th>
                            <th>Escolaridade</th>
    
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($seletivo->cargos as $cargo)
                        <tr>
                            <td>{{ $cargo->nomeCargo }}</td>
                            <td>{{ $cargo->escolaridade->tipo }}</td>

                            <td>

                                <form action="{{route('cargos.seletivo.destroy',[$cargo->id,$seletivo->id])}}" method="post">
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
