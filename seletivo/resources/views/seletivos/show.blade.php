
@extends ('layouts.app')

@section('content')
   <div class="container-fluid">
  <div class="text-center">
    <h2>Seletivo</h2>
    <h4>Analise as informações do seletivo com cuidado</h4>
  </div>
  <div class="row">
    <div class="col-sm-8">
      <div class="panel  panel-info text-left">
        <div class="panel-heading">
          <h4 class="panel-title">Detalhes do Seletivo</h4>
        </div>
        <thead>

        </thead>
        <div class="panel-body">
          <p><b>Nome Seletivo: </b>{{$seletivo->nomeSeletivo}}</p>
          <p><b>Data do Inicio: </b> {{$seletivo->dataInicio}}</p>
          <p><b>Data do Termino: </b>{{$seletivo->dataTermino}}</p>
        
        </div>
      </div> 
    </div>

    <div class="col-sm-4">
      <div class="panel panel-info text-justify">
        <div class="panel-heading">
          <h4 class="panel-title" >Documentos</h4>
        </div>
        <div class="panel-body">
          
        </div>
       
      </div> 
    </div> 
    </div>
</div>
@endsection    
