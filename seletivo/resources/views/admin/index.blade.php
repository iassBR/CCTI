@extends('layouts.admin')

@section('content')


<div class="panel panel-default">    
        <div class="panel-heading">Lista de Usuários</div>
        
        <form  action="{{route('admin.index')}}" method="GET">
        <div class="row">
            <div class="col-md-12">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Digite o nome do Usuário" name="buscar">
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
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Email</th>
							<th>Bairro</th>
							<th>Papel</th>
                            
                            
                        </tr>
                    </thead>           
                   <tbody>            
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->cpf}}</td>
								<td> {{$user->email}} </td>
								<td>{{ $user->bairro }} </td>
								<td> {{$user->papel->nome }}</td>
                               
                                <td>
                                    <a href="#"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="#"><i class="glyphicon glyphicon-trash"></i></a>
                                    <a href="#"><i class="glyphicon glyphicon-zoom-in"></i></a>
                                </td>                                
                            </tr>                         
                        @endforeach                                 
                    </tbody>
                </table> 
            </div> 
        </div>
        <a href="{{route('usuarios.create')}}"><button class="btn btn-primary">Novo Usuário</button></a> 
    </div>
   
  
        
@endsection        
