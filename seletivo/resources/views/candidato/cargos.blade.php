@extends('layouts.app')

@section('content')



<div class="container">
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading"><h4> Cargos</h4></div>



           <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                      <form class="form-horizontal" action="{{route('candidatos.cargo.store',$candidato->id)}}" method="post">
                      {{ csrf_field() }}
                      <div class="input-field">
                          <label class="form-group col-md-6" > Selecione o Cargo que deseja concorrer  </label>

                          <select class="form-control " name="cargo_id">
                              @foreach($cargos as $cargo)
                              <option value="{{$cargo->id}}">{{$cargo->nomeCargo}}</option>
                              @endforeach
                          </select>
                      </div>
                          <button class="btn btn-primary">Adicionar</button>
                          
                      </form>
            </div>

          </div>
            <br>
            <hr>
            <br>
          <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                      <label>Lista de Cargos para {{$candidato->nome}} </label>
                      <table class="table table-bordered">
                          <thead>
                              <tr>

                                  <th>Cargo</th>
                                  <th>Tempo de Experiência Mínimo para classificação (anos) </th>
                                  <th>Ação</th>
                              </tr>
                          </thead>
                          <tbody>
                          @foreach($candidato->cargos as $cargo)
                              <tr>
                                  <td>{{ $cargo->nomeCargo }}</td>
                                  <td>{{ $cargo->tempoExperiencia }}</td>

                                  <td>

                                      <form action="{{route('candidatos.cargo.destroy',[$candidato->id,$cargo->id])}}" method="post">
                                              {{ method_field('DELETE') }}
                                              {{ csrf_field() }}
                                              <button title="Deletar" class="btn btn-danger">Apagar</button>
                                      </form>
                                  </td>
                              </tr>
                          @endforeach
                          </tbody>
                          
                      </table>
                      <button class="btn btn-success"  >Finalizar  </button>
                  </div>               
          </div>
            
        </div>
    </div>
  </div>

  @endsection