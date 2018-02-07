@extends('layouts.admin')

@section('content')
@can('usuario-edit') 
@if($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif
<div class="container">
<div class="row"> 
<div class='col-md-10 col-md-offset-2'>
<div class="panel panel-default">
        <div class="panel-heading"><h3>Edite o Usuário</h3></div>
        <div class="panel-body">
            <form method="post" action="{{route ('usuarios.update', $user->id)}}">  
            {{ csrf_field() }} 
            {{ method_field('PUT') }}         
                <h4>Dados do Usuário</h4>
                <hr>
                <div class="input-field">
                <label for="name" class="col-md-4 control-label">Nome</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name"  required value="{{$user->name}}" >
                   
                </div>
            </div>   
            <div class="form-group{{ $errors->has('email') ? ' contem algum erro no email' : '' }}">
                <label for="email" class="col-md-4 control-label">E-Mail</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" required value="{{$user->email}}">

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? 'senha inválida' : '' }}">
                <label for="password" class="col-md-4 control-label">Senha</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" required >

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="input-field">
                <label for="cidade" class="col-md-4 control-label">Cidade</label>

                <div class="col-md-6">
                    <input id="cidade" type="text" class="form-control" name="cidade"  required value="{{$endereco->cidade}}">

                   
                </div>
            </div>

            <div class="form-group">
                             <label for="uf"  class="col-md-4 control-label">UF:</label>
                             <div class="col-md-6">
                            
                                    <select id="uf" class="form-control" name="uf" value="{{$endereco->uf}}" required >
                                        <option value="AC" {{($endereco->uf == 'AC'  ? 'selected' : '')}} > Acre</option>
                                        <option value="AL" {{($endereco->uf == 'AL'  ? 'selected' : '')}}>Alagoas</option>
                                        <option value="AP" {{($endereco->uf == 'AP'  ? 'selected' : '')}}>Amapá</option>
                                        <option value="AM" {{($endereco->uf == 'AM'  ? 'selected' : '')}}>Amazonas</option>
                                        <option value="BA" {{($endereco->uf == 'BA'  ? 'selected' : '')}}>Bahia</option>
                                        <option value="CE" {{($endereco->uf == 'CE'  ? 'selected' : '')}}>Ceará</option>
                                        <option value="DF" {{($endereco->uf == 'DF'  ? 'selected' : '')}}>Distrito Federal</option>
                                        <option value="ES" {{($endereco->uf == 'ES'  ? 'selected' : '')}}>Espirito Santo</option>
                                        <option value="GO" {{($endereco->uf == 'GO'  ? 'selected' : '')}}>Goiás</option>
                                        <option value="MA" {{($endereco->uf == 'MA'  ? 'selected' : '')}}>Maranhão</option>
                                        <option value="MS" {{($endereco->uf == 'MS'  ? 'selected' : '')}}>Mato Grosso do Sul</option>
                                        <option value="MT" {{($endereco->uf == 'MT'  ? 'selected' : '')}}>Mato Grosso</option>
                                        <option value="MG" {{($endereco->uf == 'MG'  ? 'selected' : '')}}>Minas Gerais</option>
                                        <option value="PA" {{($endereco->uf == 'PA'  ? 'selected' : '')}}>Pará</option>
                                        <option value="PB" {{($endereco->uf == 'PB'  ? 'selected' : '')}}>Paraíba</option>
                                        <option value="PR" {{($endereco->uf == 'PR'  ? 'selected' : '')}}>Paraná</option>
                                        <option value="PE" {{($endereco->uf == 'PE'  ? 'selected' : '')}}>Pernambuco</option>
                                        <option value="PI" {{($endereco->uf == 'PI'  ? 'selected' : '')}}>Piauí</option>
                                        <option value="RJ" {{($endereco->uf == 'RJ'  ? 'selected' : '')}}>Rio de Janeiro</option>
                                        <option value="RN" {{($endereco->uf == 'RN'  ? 'selected' : '')}}>Rio Grande do Norte</option>
                                        <option value="RS" {{($endereco->uf == 'RS'  ? 'selected' : '')}}>Rio Grande do Sul</option>
                                        <option value="RO" {{($endereco->uf == 'RO'  ? 'selected' : '')}}>Rondônia</option>
                                        <option value="RR" {{($endereco->uf == 'RR'  ? 'selected' : '')}} > Roraima</option>
                                        <option value="SC" {{($endereco->uf == 'SC'  ? 'selected' : '')}}>Santa Catarina</option>
                                        <option value="SP" {{($endereco->uf == 'SP'  ? 'selected' : '')}}>São Paulo</option>
                                        <option value="SE" {{($endereco->uf == 'SE'  ? 'selected' : '')}}>Sergipe</option>
                                        <option value="TO" {{($endereco->uf == 'TO'  ? 'selected' : '')}}>Tocantins</option>
                                    </select>
                            </div>
                     </div>
                   
            <div class="input-field">
                <label for="bairro" class="col-md-4 control-label">Bairro</label>

                <div class="col-md-6">
                    <input id="bairro" type="text" class="form-control" name="bairro"  required value="{{$endereco->bairro}}">

                   
                </div>
            </div>

            <div class="input-field">
                <label for="logradouro" class="col-md-4 control-label">Logradouro</label>

                <div class="col-md-6">
                    <input id="logradouro" type="text" class="form-control" name="logradouro" required value="{{$endereco->logradouro}}">

                   
                </div>
            </div>
            <div class="input-field">
                <label for="num" class="col-md-4 control-label">Numero</label>

                <div class="col-md-6">
                    <input id="num" type="number" class="form-control" name="num" required value="{{$endereco->num}}">

                   
                </div>
            </div>

            <div class="input-field">
                <label for="cep" class="col-md-4 control-label">CEP</label>

                <div class="col-md-6">
                    <input id="cep" type="text" class="form-control" name="cep"  required value="{{$endereco->cep}}">

                  
                </div>
            </div>
            <div class="input-field">
                <label for="complemento" class="col-md-4 control-label">Complemento</label>

                <div class="col-md-6">
                    <input id="complemento" type="text" class="form-control" name="complemento"  required value="{{$endereco->complemento}}">

                  
                </div>
            </div>
            
          
               
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Voltar</a>
                    <button type="submit" class="btn btn-primary">Atualizar</button>
            
            </form>
        </div>
    </div>
    </div>
</div>
</div>

@endcan
@endsection