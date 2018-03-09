
@extends('layouts.app')

{{--  <style>
    .panel-default{
        width: 1000px;
        height:400px;
        left:140px;
        right:90px;
        text-align:center;
        position: absolute;
        border-style: solid 15px black;
        border-radius:10px 10px;
                      
    }
    .panel-heading{
        font-size:40px;       
    }
    #painel{
        background-color:#F0F8FF;
    }
    #painel_seletivo{
        background-color:#B0E0E6;
    }
    .cabeçalho_tabela{
        background-color:#87CEFA;
    }
    .table{
        right:200px;
    }
    

</style>  --}}


@section('content')
    <div id = "painel" class="panel panel-default">    
        <div id="painel_seletivo"class="panel-heading">Documentos do Seletivo</div>   
        <form method="GET">   
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Digite o nome do documento" 
                        name="buscar">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">Pesquisar</button>                            
                        </span>
                    </div>
                </div>
            </div>
        </form>
        <div id="div_table" class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead class="cabeçalho_tabela">
                            <tr>
                                {{--  <th>ID</th>  --}}
                                <th>Nome Documento</th>
                                <th>Data de upload</th>
                                <th>Excluir</th>                                                
                            </tr>
                    </thead>            
                    <tbody >
                                                       
                        @foreach($documento as $documentosdoseletivoselecionado)
                            <tr>
                                {{--  <td>{{$documentosdoseletivoselecionado->id}}</td>  --}}
                                <td>{{$documentosdoseletivoselecionado->nome_documento}}</td>
                                <td>{{date( 'd/m/Y' , strtotime($documentosdoseletivoselecionado->created_at))}}</td>
                                <td>
                                    <a href="{{route('documentos.download', $documentosdoseletivoselecionado->id)}}" 
                                     target=“_blank” class="btn btn-primary">
                                    <i class="glyphicon glyphicon-download-alt"></i>Download</a>
                                    
                                    <a href="{{route('documentos.remove', $documentosdoseletivoselecionado->id)}}" 
                                        class="btn btn-danger">
                                    <i class="glyphicon glyphicon-download-alt"></i>Excluir</a>
                                </td>                                                                                              
                            </tr>                         
                        @endforeach                                
                    </tbody> 
                </table> 
            </div>
            <div align="center" class="row">
                {{ $documento->links() }}
            </div>   
        </div>
        <a href="{{ route('documentos.index') }}" class="btn btn-default">Voltar</a>
    </div>
@endsection