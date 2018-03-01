@extends('layouts.admin')

@section('content')
<div class="container">
	<h2 class="center">Editar Papel</h2>

	<div class="col-md-6">
		<form action="{{ route('papeis.update',$registro->id) }}" method="post">

		{{csrf_field()}}
		{{ method_field('PUT') }}
		@include('admin.papel._form')

		<hr>
			
		</form>
		<button class="btn btn-success">Atualizar</button>
		<a href="{{ route('papeis.index') }}" class="btn btn-primary">Voltar</a>
	</div>
	
</div>
	

@endsection