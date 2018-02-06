@extends('layouts.admin')

@section('content')    
@can('usuario-create')
<div class="container">
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Registrar</div>

            <div class="panel-body">
                <form class="form-horizontal" method="POST" action="{{ route('usuarios.store') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Nome</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                    
                    <div class="form-group">
                            <label for="cidade"  class="col-md-4 control-label">Cidade:</label>
                            <div class="col-md-6">
                                <input id="cidade" class="form-control" type="text" name="cidade">
                     
                            </div>
                    </div>

                     <div class="form-group">
                             <label for="uf"  class="col-md-4 control-label">UF:</label>
                             <div class="col-md-6">
                                    <select id="uf" class="form-control" name="uf">
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espirito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                    </select>
                            </div>
                     </div>

                    <div class="form-group">
                            <label for="cep"  class="col-md-4 control-label">CEP:</label>
                            <div class="col-md-6">
                                <input id="cep" class="form-control" type="text" name="cep">
                     
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
                    
                    <div class="form-group">
                            <label for="complemento"  class="col-md-4 control-label">Complemento:</label>
                            <div class="col-md-6">
                                <input id="complemento" class="form-control" type="text" name="complemento">
                     
                            </div>
                    </div>


			           


                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                        <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Voltar</a>
                            <button href="{{ url()->previous() }}" type="submit" class="btn btn-primary">Registrar                               
                            </button>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

@endcan  

@endsection