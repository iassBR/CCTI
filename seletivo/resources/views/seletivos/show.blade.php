@extends ('layout.app')

@section('content')
    <div class="panel panel-default">
        
        <div class="panel-heading">Detalhes do seletivo</div>
            <div class="panel-body">
                <div class="row">
                        <div class="col-md-12">

                            <h4>Sobre o Seletivo</h4>

                            <p>Nome Seletivo: {{$seletivo->nomeSeletivo}}</p>
                            <p>Data Inicio: {{$seletivo->dataInicio}}</p>
                            <p>Data Termino: {{$seletivo->dataTermino}}</p>
                            <p>Cargo Desejado: {{$seletivo->cargoDesejado}}</p>
                            <p>Tempo de Experiência: {{$seletivo->tempoExperiencia}}</p>
                        </div>
                </div>
            </div>
        </div>
        <a href="{{url()->previous}}" class="btn btn-default">Voltar</a>
@endsection    