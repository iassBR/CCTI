<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('css/stylesheet.css')}}">



<div class="panel panel-default">
      <div class="panel-heading">Remover a Experiência</div>
		<div class="panel-body">
			<form method="post" action="{{route ('candidatos.experiencia.destroy', [$seletivo, $candidato, $experiencia])}}">
            
            {{ csrf_field() }}
            {{ method_field('DELETE') }}  
				<div class="row">
					<div class="col-md-8">
						<h4>Tem certeza que deseja remover a experiência ?</h4>
						<hr>
						<h4>Sobre a experiência:</h4>
						<p>Nome da empresa: {{$experiencia->nome_empresa}}</p>
						<p>Data de início: {{$experiencia->data_inicio}}</p>
						<p>Data de conclusão: {{$experiencia->data_fim}}</p>
                        <p>Cargo: {{$experiencia->cargo}}</p>                       
						
				    </div>
				</div>
                <input type="hidden" name="cpf" value="{{ $candidato->cpf }}"  > </input>
				
				<a href="{{ url()->previous() }}" class="btn btn-default">Cancelar</a>
                <button type="submit" class="btn btn-danger">Remover</button>
			</form>
		</div>
	</div>
</div>