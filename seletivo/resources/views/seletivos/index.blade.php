@extends("layouts.app")

@section('content')
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
                            <th>Cargo Desejado</th>
                            <th>Tempo de Experiência</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($seletivos as $seletivo)
                            <tr>
                                <td>{{$seletivo->nomeSeletivo}}</td>
                                <td>{{$seletivo->dataInicio}}</td>
                                <td>{{$seletivo->dataTermino}}</td>
                                <td>{{$seletivo->cargoDesejado}}</td>
                                <td>{{$seletivo->tempoExperiencia}}</td>
                                <td>
                                    <a href="#"> <i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="#"> <i class="glyphicon glyphicon-trash"></i></a>
                                    <a href="{{route('seletivos.show',$seletivo->id)}}"> <i class="glyphicon glyphicon-pencil"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <a href="{{route('seletivos.create')}}"> <button class="btn btn-primary">Criar Seletivo</button></a>
@endsection