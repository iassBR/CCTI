@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-24">
            <div class="panel panel-default">
                <div class="panel-heading">Seletivos</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-24">
                                <table class="table table-bordered">
                                    <tbody>
                                        @foreach ($seletivos as $seletivo)
                                            <tr>
                                                <td>{{$seletivo->nomeSeletivo}}</td>                                
                                                <td>
                                                    <a href="{{route('seletivos.show',$seletivo->id)}}"><button type="button" class="btn btn-primary">Detalhes</button></a>
                                                    <button id="{{$seletivo->id}}" onclick="getId({{$seletivo->id}})"  name="button" type="button" class="btn btn-primary" data-toggle="modal" data-target="#seletivo">Inscrever</button>
                                                </td>
                                                <!-- End Modal -->   
                                            </tr>
                                             
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>  

                                                         
                        </div>
                    </div>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif                 
                </div>                   
            </div>
        </div>
    </div>
</div>






<div class="modal fade" id="seletivo" tabindex="-1" role="dialog" aria-labelledby="cpfModalLabel" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="cpfModalLabel"><strong> Informe seu CPF </strong> </h4>
                </div>    
            
                <div class="modal-body">
                    <form id="forme" action="/inscricao/"   method="GET"  >  
                            Informe seu CPF para começar o seu cadastro 
                            <div class="form-group ">
                            <label>CPF:</label>
                            <input type="text" class="form-control" name="cpf" id="cpf" required>                                                                        
                        </div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                        <button type="submit" class="btn btn-primary">Continuar</button>
                    </form>
                </div>
                    
            </div>
        </div>
</div>



    <!-- Button trigger modal 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>
-->
<!-- Modal -->

</div>

@endsection