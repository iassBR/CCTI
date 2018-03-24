<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('css/stylesheet.css')}}">

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
        <div class="row">
        <br>

            <div class="col-md-10  col-md-offset-1  ">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h2 class="panel-title"> Cargos</h2>
                    </div>
                    <form class="form-horizontal" action="{{route('candidatos.cargo.store', [$seletivo , $candidato ])}}" method="post">
                        {{ csrf_field() }}
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th> Selecione o Cargo que deseja concorrer</th>
                                        <th class="hidden-xs">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($cargos as $cargo)
                                    <tr>
                                        <td>
                                            <div>{{$cargo->nomeCargo}}</div>
                                        </td>
                                        <td class="hidden-xs">
                                            <button name="cargo_id" value="{{$cargo->id}}" class="btn btn-xs btn-info" >Selecionar</button>
                                        </td>
                                    </tr>
                                    @endforeach    
                                </tbody>
                            </table>
                        </div>
                    </form> 
                </div>
            </div>
       
                                    
            

                <div class="col-md-10 col-md-offset-1 ">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h2 class="panel-title"> Lista de Cargos para {{$candidato->nome}}</h2>
                        </div>
                      
                        <table class="table table-hover">
                            <thead>
                                <tr>

                                    <th>Cargo</th>
                                    <th>Tempo de Experiência Mínimo para classificação (anos) </th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                    @foreach($candidato->cargos as $cargo)
                                    <form action="{{route('candidatos.cargo.destroy',[$seletivo, $candidato, $cargo])}}" method="post">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <tr>
                                            <td>{{ $cargo->nomeCargo }}</td>
                                            <td>{{ $cargo->tempoExperiencia }}</td>

                                            <td>                                        
                                            <button title="Deletar" class="btn btn-xs btn-danger">Apagar</button>
                                    
                                            </td>
                                        </tr>
                                    @endforeach
                                </form>
                            </tbody>                            
                        </table>                       
                    </div>               
                </div>  

                <div class="alert alert-secondary col-md-12 col-md-offset-1" role="alert">
                    <a href="{{ route('candidatos.create', [$seletivo,'cpf' => $candidato->cpf ]) }}" class="btn btn-default">Voltar</a>
                    <a href="{{ route('candidato.impressao' , [$seletivo, $candidato]) }}" class="btn btn-success"  >Finalizar Inscrição  </a>
                </div>
               
           
            
    </div>
</div>
  


 

 
  
