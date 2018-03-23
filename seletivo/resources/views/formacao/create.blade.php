        
        
        
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('css/stylesheet.css')}}">
<link rel="stylesheet" href="{{ asset('css/stylesheet.css')}}">      
        
        
    @if($errors->any()) 
        <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif
<div class="panel panel-default">
    <div class="panel-heading">Adicionar uma  Formação</div>
        <div class="panel-body">
            <form action="{{ route('candidatos.formacao.store', [ $seletivo, $candidato ]) }}" method="post" class="form-group col-md-8" >
                {{ csrf_field() }}
                        <hr>
                            <div class="form-group {{$errors->has('tipo')  ? 'has-error': ''}}">
                                <label>Formação/Curso</label>                
                                        <select id="tipo" class="form-control" name="tipo"  title="Preencha uma formação válida" required >
                                            <option value="">Selecione</option>
                                            <option value="CURSO DE CAPACITACAO">Curso de Capacitação</option>
                                            <option value="DOUTORADO COMPLETODoutorado Completo">Doutorado Completo</option>
                                            <option value="DOUTORADO INCOMPLETO">Doutorado Incompleto</option>
                                            <option value="MESTRADO COMPLETO">Mestrado Completo</option>
                                            <option value="MESTRADO INCOMPLETO">Mestrado Incompleto</option>
                                            <option value="POS-GRADUACAO COMPLETA">Pós-Graduação Completa</option>
                                            <option value="POS-GRADUACAO INCOMPLETA">Pós-Graduação Incompleta</option>
                                            <option value="GRADUACAO COMPLETA">Graduação Completa</option>
                                            <option value="GRADUACAO INCOMPLETA">Graduação Incompleta</option>
                                            <option value="ENSINO MEDIO COMPLETO">Ensino Médio Completo</option>
                                            <option value="ENSINO MEDIO INCOMPLETO">Ensino Médio Incompleto</option>
                                            <option value="ENSINO MEDIO TECNICO">Ensino Médio Técnico</option>
                                            <option value="ENSINO FUNDAMENTAL COMPLETO">Ensino Fundamental Completo</option>
                                            <option value="ENSINO FUNDAMENTAL INCOMPLETO">Ensino Fundamental Incompleto</option>
                                        </select>
                            </div>            
                        <div class="form-group  {{$errors->has('instituicao')  ? 'has-error': ''}}">
                            <label>Instituição</label>
                            <input required type="text" class="form-control" placeholder="Nome da Instituição" name="instituicao" id="instituicao" title="Preencha uma Instituição válido">
                        </div>  
                        <div class="form-group {{$errors->has('nome_curso')  ? 'has-error': ''}}">           
                            <label>Nome do Curso</label>
                            <input required type="text" class="form-control" placeholder="Digite o curso" name="nome_curso" id="nome_curso"  title="Preencha um Nome válido">
                        </div>
                        <div class="form-group  {{$errors->has('ano_conclusao')  ? 'has-error': ''}}">            
                            <label>Ano de Conclusão</label>
                            <input required type="date" class="form-control" name="ano_conclusao" id="ano_conclusao"  title="Preencha um ano válido">
                        </div>
                        <br>
                        <input type="hidden" name="candidato_id" value="{{ $candidato->id }}"  > </input>   
                        <input type="hidden" name="cpf" value="{{ $candidato->cpf }}"  > </input>                     
                        
                        <a href="{{ url()->previous() }}" class="btn btn-default">Cancelar</a>
                        <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
	</div>
</div>