@extends('layouts.admin')

@section('content')  
<div class="panel panel-default">
        <div class="panel-heading"><h3>Edite o Usuário</h3></div>
        <div class="panel-body">
            <form method="post" action="{{route ('usuarios.update', $user->id)}}">  
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}          
                <h4>Dados do Usuário</h4>
                <hr>
                <div class="form-group">
                <label for="name" class="col-md-4 control-label">Nome</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name"  required value="{{$user->name}}" >

                    
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-md-4 control-label">E-Mail</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" required value="{{ $user->email }}">

                    
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-md-4 control-label">Senha</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" required>

                   
                </div>
            </div>

            <div class="form-group">
                <label for="password-confirm" class="col-md-4 control-label">Confirmar Senha</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>
            <div class="form-group">
                <label for="cpf" class="col-md-4 control-label">CPF</label>

                <div class="col-md-6">
                    <input id="cpf" type="text" class="form-control" name="cpf" value="{{ old('cpf') }}" required>

                    
                </div>
            </div>
            <div class="form-group{{ $errors->has('bairro') ? ' has-error' : '' }}">
                <label for="bairro" class="col-md-4 control-label">Bairro</label>

                <div class="col-md-6">
                    <input id="bairro" type="text" class="form-control" name="bairro" value="{{ old('bairro') }}" required>

                    @if ($errors->has('bairro'))
                        <span class="help-block">
                            <strong>{{ $errors->first('bairro') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('logradouro') ? ' has-error' : '' }}">
                <label for="logradouro" class="col-md-4 control-label">Logradouro</label>

                <div class="col-md-6">
                    <input id="logradouro" type="text" class="form-control" name="logradouro" value="{{ old('logradouro') }}" required>

                    @if ($errors->has('logradouro'))
                        <span class="help-block">
                            <strong>{{ $errors->first('logradouro') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('num') ? ' has-error' : '' }}">
                <label for="num" class="col-md-4 control-label">Numero</label>

                <div class="col-md-6">
                    <input id="num" type="number" class="form-control" name="num" value="{{ old('num') }}" required>

                    @if ($errors->has('num'))
                        <span class="help-block">
                            <strong>{{ $errors->first('num') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('telefone') ? ' has-error' : '' }}">
                <label for="telefone" class="col-md-4 control-label">telefone</label>

                <div class="col-md-6">
                    <input id="telefone" type="string" class="form-control" name="telefone" value="{{ old('telefone') }}" required>

                    @if ($errors->has('telefone'))
                        <span class="help-block">
                            <strong>{{ $errors->first('num') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
                <h4>Curso</h4>
                <div class="form-group">
                    <label for="curso_id">Selecione o curso deste aluno</label>
                    <select class="form-control" name="curso_id" required>
                            @foreach($cursos as $curso)            
                                <option value="{{$curso->id}}" 
                                        {{(isset($aluno->curso_id) && $aluno->curso_id == $curso->id ? 
                                        'selected' : '')}}>{{$curso->nome}}
                                </option>
                            @endforeach
                    </select>
                </div>     
                <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </div>
    </div>

@endsection