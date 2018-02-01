@extends('layouts.admin')

@section('content')   
@can('usuario-delete')
@if($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif
<div class="container">
	<div class="row"> 
		<div class='col-md-10 col-md-offset-2'>
			<div class="panel panel-default">
				<div class="panel-heading"><h3>Remover o Usuário</h3></div>
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
									<p>CPF: {{$user->cpf}}</p>
									
									
								</div>
							</div>
							<button type="submit" class="btn btn-danger">Remover</button>
							<a href="{{ url()->previous() }}" class="btn btn-default">Cancelar</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endcan
@endsection