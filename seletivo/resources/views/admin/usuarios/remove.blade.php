@extends('layouts.admin')

@section('content')   
<div class="panel panel-default">
      <div class="panel-heading">Remover o Usuário</div>
		<div class="panel-body">
			<form method="post" action="{{route ('usuarios.destroy', $user->id)}}">
            <input type="hidden" name="_method" value="DELETE">
            {{ csrf_field() }}
				<div class="row">
					<div class="col-md-12">
						<h4>Tem certeza que deseja remover o usuário?</h4>
						<hr>
						<h4>Sobre o usuário</h4>
						<p>Nome: {{$user->name}}</p>
						<p>Matrícula: {{$user->cpf}}</p>
						<p>Curso: {{$user->papel->nome}}</p>
						
					</div>
				</div>
				<button type="submit" class="btn btn-danger">Remover</button>
				<a href="{{ url()->previous() }}" class="btn btn-default">Cancelar</a>
			</form>
		</div>
	</div>
</div>
@endsection