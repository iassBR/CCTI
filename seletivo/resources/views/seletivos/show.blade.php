
@extends ('layouts.admin')

@section('content')
   <div class="container-fluid">
  <div class="text-center">
    <h2>Seletivo</h2>
    <h4>Analise as informações do seletivo com cuidado</h4>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h3>Detalhes do Seletivo</h3>
        </div>
        <div class="panel-body">
          <p><b>Nome Seletivo: </b>{{$seletivo->nomeSeletivo}}</p>
          <p><strong>Data do Inicio</strong> {{$seletivo->dataInicio}}</p>
          <p><strong>Data do Termino</strong>{{$seletivo->dataTermino}}</p>
          <p><strong>Cargo Desejado</strong> {{$seletivo->cargoDesejado}}</p>
          <p><strong>Tempo de Expêriencia</strong> {{$seletivo->tempoExperiencia}}</p>
        </div>
      </div> 
    </div> 
    <div class="col-sm-6">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h3>Documentos</h3>
        </div>
        <div class="panel-body">
          
        </div>
       
      </div> 
    </div> 
    </div>
</div>
@endsection    
