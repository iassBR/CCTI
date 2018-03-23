<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('css/stylesheet.css')}}">



<div class="panel panel-default">
      <div class="panel-heading">Remover a Formação</div>
		<div class="panel-body">
			<form method="post" action="{{route ('candidatos.formacao.destroy', [$seletivo, $candidato, $formacao])}}">
            
            {{ csrf_field() }}
            {{ method_field('DELETE') }}  
				<div class="row">
					<div class="col-md-8">
						<h4>Tem certeza que deseja remover a formação?</h4>
						<hr>
						<h4>Sobre a formação</h4>
						<p>Nome: {{$formacao->tipo}}</p>
						<p>Instituição: {{$formacao->instituicao}}</p>
						<p>Curso: {{$formacao->nome_curso}}</p>
                        <p>Ano de conclusão: {{$formacao->ano_conclusao}}</p>                       
						
				    </div>
				</div>
                <input type="hidden" name="cpf" value="{{ $candidato->cpf }}"  > </input>
				<button type="submit" class="btn btn-danger">Remover</button>
				<a href="{{ url()->previous() }}" class="btn btn-default">Cancelar</a>
			</form>
		</div>
	</div>
</div>