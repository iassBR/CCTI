@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name"  autofocus>

                           
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Senha</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('cpf') ? ' has-error' : '' }}">
                            <label for="cpf" class="col-md-4 control-label">CPF</label>

                            <div class="col-md-6">
                                <input id="cpf" type="text" class="form-control" name="cpf" >
                                
                            
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('bairro') ? ' has-error' : '' }}">
                            <label for="bairro" class="col-md-4 control-label">Bairro</label>

                            <div class="col-md-6">
                                <input id="bairro" type="text" class="form-control" name="bairro" >

                                
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('logradouro') ? ' has-error' : '' }}">
                            <label for="logradouro" class="col-md-4 control-label">Logradouro</label>

                            <div class="col-md-6">
                                <input id="logradouro" type="text" class="form-control" name="logradouro">

                               
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('num') ? ' has-error' : '' }}">
                            <label for="num" class="col-md-4 control-label">Numero</label>

                            <div class="col-md-6">
                                <input id="num" type="number" class="form-control" name="num"  >

                                
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telefone') ? ' has-error' : '' }}">
                            <label for="telefone" class="col-md-4 control-label">telefone</label>

                            <div class="col-md-6">
                                <input id="telefone" type="telefone" class="form-control" name="telefone" >

                               
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

        <script type="text/javascript" src="{{asset ('js/jquery-3.2.1.min.js')}}"></script>
        <script type="text/javascript" src="{{asset ('js/bootstrap.min.js')}}"></script>
       
@endsection
