
@extends("layouts.admin")

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
                                <td>{{$cargo->escolaridades->tipo}}</td>
                                <td>
                                    <a title='Seletivo' href="{{route('cargos.seletivo',$seletivo->id)}}"> <i class="glyphicon glyphicon-pencil"></i></a>
                                    
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

