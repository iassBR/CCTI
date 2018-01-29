@extends('layouts.admin')

@section('content')

<div class="main">
		<div class="menu">
			<ul>
				<li class="visible-xs"><a href="#">Sair</a></li>
				<li class="active"><a href="#">Admin</a></li>
				<li><a href="#">Usuários</a></li>
				<li><a href="#">Papéis</a></li>
				<li><a href="#">Permissões</a></li>
			</ul>
        </div>
</div>


<div class="panel panel-default">    
        <div class="panel-heading">Lista de Usuários</div>
        <form method="GET" action="{{route('Admin')}}">
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
                                <td>{{$user->CPF}}</td>
								<td> {{$user->email}} </td>
								<td>{{ $user->bairro }} </td>
								<td> {{ $user->papel_id }}</td>
                               
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
        <div align="center" class="row">
        	{{ $users->links() }}
	    </div>
    </div>
    <a href="#"><button class="btn btn-primary">Adicionar</button></a>
  
        
@endsection        
