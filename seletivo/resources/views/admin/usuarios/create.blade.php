@extends('layouts.admin')

@section('content')    

    <div class="panel panel-default">
        <div class="panel-heading"><h3>Cadastre o Usuário</h3></div>
            <div class="panel-body">
                <form method="post" action="#">
                    {{ csrf_field() }}
                    <h4>Dados do Usuario</h4>
                    <hr>
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" placeholder="Nome" name="nome" required>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label for="email">email</label>
                                <input type="text" class="form-control" placeholder="e-mail" name="email" required>
                            </div>
                        </div>
                        <br>
                
                        <div class="form-group">
                            <label for="curso_id">Selecione o papel do usuário</label>
                            <select class="form-control" name="papel_id" required>
                                @foreach($papeis as $papel)            
                                    <option value="{{$papel->id}}">{{$papel->nome}}</option>            
                                @endforeach
                            </select>
                        </div>
                         
                         <hr>

                        <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    
                </form>
            </div>
        </div>
    </div>

@endsection