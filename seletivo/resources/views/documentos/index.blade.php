
@extends('layouts.app')
<style>
    
.glyphicon-plus{
    margin-right: 8px;
}
.glyphicon-zoom-in{
    margin-right: 8px;
}
.panel-default{
    width: 1200px;
    height: 500px;
    margin-top: 20px;
    margin-left: 20px;
}  

</style>

@section('content')
    <div id = "painel" class="panel panel-default">    
        <div id="painel_seletivo"class="panel-heading">Seletivos</div>
        </form action="{{route('documentos.create')}}">
        <div id="div_table" class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead class="cabeçalho_tabela">
                        <tr>
                            <th>Nome Seletivo</th>
                            <th>Data Inicio</th>
                            <th>Data Terminio</th>
                            <th>Funções para Documentos</th>                           
                        </tr>
                    </thead>            
                    <tbody >
                        <?php
                         use Illuminate\Http\Request;
                         use App\http\controllers\SeletivoController;                         
                         $seletivos = (new SeletivoController)->getindex(Request::capture());
                         ?>                               
                        @foreach($seletivos as $seletivo)
                            <tr>                          
                                <td>{{$seletivo->nomeSeletivo}}</td>
                                <td>{{date( 'd/m/Y' , strtotime($seletivo->dataInicio))}}</td>
                                <td>{{date( 'd/m/Y' , strtotime($seletivo->dataTermino))}}</td>                                 
                                <td>  
                                    <a href="{{route('documentos.create', ["seletivo_id" => $seletivo->id])}}" 
                                        class="btn btn-primary">
                                    <i class="glyphicon glyphicon-plus"></i>Adcionar Documento</a>  
                                    <a href="{{route('documentos.show',  $seletivo->id)}}" class="btn btn-success">
                                    <i class="glyphicon glyphicon-zoom-in"></i>Visualizar</a> 
                                </td>                                
                            </tr>                         
                        @endforeach                                                      
                    </tbody>
                </table> 
            </div> 
            <div align="center" class="row">
                {{ $seletivos->links() }}
            </div>
        </div>
        
    </div>
    
@endsection