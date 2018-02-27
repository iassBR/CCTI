
@extends("layouts.app")

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Lista de Cargo</div>
        <div class="row">
                <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nome Cargo</th>
                            <th>Tempo experiencia</th>
                            <th>Escolaridade</th>
                            

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cargos as $cargo)
                            <tr>
                                <td>{{$cargo->nomeCargo}}</td>
                                <td>{{$cargo->tempoExperiencia}}</td>
                                <td>{{$cargo->escolaridade->tipo}}</td>
                                <td>
                                    <a href="{{route('cargos.edit',$cargo->id)}}"> <i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="{{route('cargos.remove',$cargo->id)}}"> <i class="glyphicon glyphicon-trash"></i></a>
                                    <a href="{{route('cargos.show',$cargo->id)}}"> <i class="glyphicon glyphicon-zoom-in"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <a href="{{route('cargos.create')}}"> <button class="btn btn-primary">Criar Cargo</button></a>
@endsection

