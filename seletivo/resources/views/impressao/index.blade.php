<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="{{ route('home.index') }}">
            Processo Seletivo
          </a>
        </div>
      </div>
</nav>
<div class="content">
<div class="container">
  <div class="row col-md-12">
    <div class="panel panel-default">
      <div class="panel panel-success">
	  	<div class="panel-heading"><h2> Você foi inscrito com sucesso!</h2></div>
	  </div>

        <br>
		<div class="row">   
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Imprima seus Documentos!</h3>
					</div>
					<div class="panel-body">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Documentos</th>
									<th class="hidden-xs">Ações</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div>Comprovante de inscrição </div>
									</td>
									<td class="hidden-xs">
										<a class="btn btn-xs btn-info" href="{{ route('candidato.imprime.comprovante', [$seletivo, $candidato]) }}">Imprimir</a>
									</td>
								</tr>
								<tr>
									<td>
										<div>Currículo do candidato</div>
									</td>
									<td class="hidden-xs">
										<a href="{{ route('candidato.imprime.curriculo' , [$seletivo , $candidato ] ) }}" class="btn btn-xs btn-info" > Imprimir  </a>
									</td>
							
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
      </div>
    </div>
 </div>
</div>
