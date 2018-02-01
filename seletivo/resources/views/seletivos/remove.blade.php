@extends ('layouts.app')

@section('content')
    <div class="panel panel-default">
        
            <div class="panel-heading">Deseja Remover o seletivo?</div>
            <div class="panel-body">
                <form method="post" action="{{route('seletivos.destroy', $seletivo->id)}}">  
                <input type="hidden" name="_method" value="DELETE">
                {{ csrf_field() }}  
                    <div class="row">
                            <div class="col-md-12">
                            
                                <h4>Tem certeza que deseja remover o imóvel</h4>

                                <p>Nome Seletivo: {{$seletivo->nomeSeletivo}}</p>
                                <p>Data Inicio: {{$seletivo->dataInicio}}</p>
                                <p>Data Termino: {{$seletivo->dataTermino}}</p>
                                <p>Cargo Desejado: {{$seletivo->cargoDesejado}}</p>
                                <p>Tempo de Experiência: {{$seletivo->tempoExperiencia}}</p>
                            
                            </div>
                    </div>
                    <button type="submit" class="btn btn-danger">Remover</button>
                    <a href="{{ url()->previous() }}" class="btn btn-default">Cancelar</a>
                </form>    
            </div>
    </div>
        
@endsection    