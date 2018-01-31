@extends('layouts.app')

@section('content')
    <div class="panel panel-default">    
        <div class="panel-heading">escolaridade</div>

        <form method="GET" action="{{route('escolaridades.index', 'buscar' )}}">
        <div class="row">
            <div class="col-md-12">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Digite o nome da escolaridade" name="buscar">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">Pesquisar</button>
                    </span>
                </div>
            </div>
        </div>
        </form>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            
                        </tr>
                    </thead>            
                    <tbody>            
                        @foreach($escolaridades as $escolaridade)
                            <tr>
                                <td>{{$escolaridade->tipo}}</td>
                                <td>
                                    <a href="{{route('escolaridades.edit', $escolaridade->id)}}"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="{{route('escolaridades.remove', $escolaridade->id)}}"><i class="glyphicon glyphicon-trash"></i></a>
                                    <a href="{{route('escolaridades.show', $escolaridade->id)}}"><i class="glyphicon glyphicon-zoom-in"></i></a>
                                </td>                                
                            </tr>                         
                        @endforeach                                 
                    </tbody>
                </table> 
            </div> 
        </div>
        <div align="center" class="row">
        	{{ $modalidades->links() }}
	    </div>
    </div>
    <a href="{{route('modalidades.create')}}"><button class="btn btn-primary">Adicionar</button></a>
@endsection