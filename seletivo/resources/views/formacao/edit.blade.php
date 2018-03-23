<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('css/stylesheet.css')}}">
<link rel="stylesheet" href="{{ asset('css/stylesheet.css')}}">

<div class="panel panel-default">
    <div class="panel-heading">Editar a  Formação</div>
        <div class="panel-body">
            <form method="post"  action="{{route('candidatos.formacao.update',[$seletivo, $candidato, $formacao] )}}"  class="form-group col-md-8" >
            {{ csrf_field() }} 
            {{ method_field('PUT') }}     
                    <hr>
                    <div class="form-group {{$errors->has('formacoes->tipo')  ? 'has-error': ''}}">
                        <label>Formação/Curso</label>                
                                <select name="tipo" id="tipo" class="form-control"   title="Preencha uma formação válida" >
                                    <option value="">Selecione</option>
                                    <option value="CURSO DE CAPACITACAO"  {{ (isset($formacao) && $formacao->tipo == 'CURSO DE CAPACITACAO' ? 'selected' : '' )}}  >Curso de Capacitação</option>
                                    <option value="DOUTORADO COMPLETO" {{ (isset($formacao) && $formacao->tipo == 'DOUTORADO COMPLETO' ? 'selected' : '' )}} >Doutorado Completo</option>
                                    <option value="DOUTORADO INCOMPLETO" {{ (isset($formacao) && $formacao->tipo == 'DOUTORADO INCOMPLETO' ? 'selected' : '' )}} >Doutorado Incompleto</option>
                                    <option value="MESTRADO COMPLETO" {{ (isset($formacao) && $formacao->tipo == 'MESTRADO COMPLETO' ? 'selected' : '' )}} >Mestrado Completo</option>
                                    <option value="MESTRADO INCOMPLETO" {{ (isset($formacao) && $formacao->tipo == 'MESTRADO INCOMPLETO' ? 'selected' : '' )}} >Mestrado Incompleto</option>
                                    <option value="POS-GRADUACAO COMPLETA" {{ (isset($formacao) && $formacao->tipo == 'POS-GRADUACAO COMPLETA' ? 'selected' : '' )}} >Pós-Graduação Completa</option>
                                    <option value="POS-GRADUACAO INCOMPLETA" {{ (isset($formacao) && $formacao->tipo == 'POS-GRADUACAO INCOMPLETA' ? 'selected' : '' )}} >Pós-Graduação Incompleta</option>
                                    <option value="GRADUACAO COMPLETA" {{ (isset($formacao) && $formacao->tipo == 'GRADUACAO COMPLETA' ? 'selected' : '' )}}  >Graduação Completa</option>
                                    <option value="GRADUACAO INCOMPLETA" {{ (isset($formacao) && $formacao->tipo == 'GRADUACAO INCOMPLETA' ? 'selected' : '' )}} >Graduação Incompleta</option>
                                    <option value="ENSINO MEDIO COMPLETO" {{ (isset($formacao) && $formacao->tipo == 'ENSINO MEDIO COMPLETO' ? 'selected' : '' )}} >Ensino Médio Completo</option>
                                    <option value="ENSINO MEDIO INCOMPLETO" {{ (isset($formacao) && $formacao->tipo == 'ENSINO MEDIO INCOMPLETO' ? 'selected' : '' )}} >Ensino Médio Incompleto</option>
                                    <option value="ENSINO MEDIO TECNICO" {{ (isset($formacao) && $formacao->tipo == 'ENSINO MEDIO TECNICO' ? 'selected' : '' )}} >Ensino Médio Técnico</option>
                                    <option value="ENSINO FUNDAMENTAL COMPLETO" {{ (isset($formacao) && $formacao->tipo == 'ENSINO FUNDAMENTAL COMPLETO' ? 'selected' : '' )}} >Ensino Fundamental Completo</option>
                                    <option value="ENSINO FUNDAMENTAL INCOMPLETO" {{ (isset($formacao) && $formacao->tipo == 'ENSINO FUNDAMENTAL INCOMPLETO' ? 'selected' : '' )}} >Ensino Fundamental Incompleto</option>
                                </select>
                    </div>            
                    <div class="form-group  {{$errors->has('formacoes->instituicao')  ? 'has-error': ''}}">
                        <label>Instituição</label>
                        <input name="instituicao" type="text" class="form-control" value="{{ isset($formacao->instituicao) ? $formacao->instituicao : '' }}" placeholder="Nome da Instituição"   title="Preencha uma Instituição válido">
                    </div>  
                    <div class="form-group {{$errors->has('formacoes->nome_curso')  ? 'has-error': ''}}">           
                        <label>Nome do Curso</label>
                        <input name="nome_curso" type="text" class="form-control"  value="{{ isset($formacao->nome_curso) ? $formacao->nome_curso : '' }}"  placeholder="Digite o curso"    title="Preencha um Nome válido">
                    </div>
                    <div class="form-group  {{$errors->has('formacoes->ano_conclusao')  ? 'has-error': ''}}">            
                        <label>Ano de Conclusão</label>
                        <input name="ano_conclusao" type="date" class="form-control"   value="{{ isset($formacao->ano_conclusao) ? $formacao->ano_conclusao : '' }}"   title="Preencha um ano válido">
                    </div>
                    <br> 
                    <input type="hidden" name="cpf" value="{{ $candidato->cpf }}"  > </input>      
                    <button class="btn btn-secondary" href="{{ url()->previous() }}"  class="btn btn-secondary"> Voltar</button>
                    <button type="submit" class="btn btn-success"> Atualizar Informações</button>
                
            </form>
        </div>
    </div>
</div>     