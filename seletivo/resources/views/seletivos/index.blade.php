
@extends("layouts.admin")

@section('content')
@can('seletivo-view')
    <div class="panel panel-default">
        <div class="panel-heading">Lista de Seletivos</div>
            <div class="row">
                    <div class="col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nome Seletivo</th>
                                <th>Data Inicio</th>
                                <th>Data Termino</th>
                                <th>Ações</th>
                                <th>Tempo de Experiência</th>                        
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($seletivos as $seletivo)
                                <tr>
                                    <td>{{$seletivo->nomeSeletivo}}</td>
                                    <td>{{$seletivo->dataInicio}}</td>
                                    <td>{{$seletivo->dataTermino}}</td>
                                    <td><a  class="btn btn-primary" href="{{route('seletivos.cargo',$seletivo->id)}}">Cargos </a> <a  class="btn btn-primary" href="{{route('seletivos.escolaridade',$seletivo->id)}}">Escolaridade</a></td>
                                    <td>{{$seletivo->tempoExperiencia}}</td>
                                    
                                    <td>
                                        
                                        
                                        <a href="{{route('seletivos.edit',$seletivo->id)}}"> <i class="glyphicon glyphicon-pencil"></i></a>
                                        <a href="{{route('seletivos.remove',$seletivo->id)}}"> <i class="glyphicon glyphicon-trash"></i></a>
                                        <a href="{{route('seletivos.show',$seletivo->id)}}"> <i class="glyphicon glyphicon-zoom-in"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
            </div>
            <a href="{{route('seletivos.create')}}"> <button class="btn btn-primary">Criar Seletivo</button></a>
    </div>
 @endcan   
@endsection

