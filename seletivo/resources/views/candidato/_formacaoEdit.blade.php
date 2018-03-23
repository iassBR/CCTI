<div role="tabpanel" class="tab-pane" id="etapa3">
            <h2>Formação/Curso</h2>
            <p>
              <div class="panel panel-default">
                <div class="panel-body">
                  Formação e cursos de Capacitação <strong id="dica3" onmouseout="escondePopover('dica3')" onmouseover="exibePopover('dica3')" data-container="body" data-toggle="popover" data-placement="top" data-content="Neste formulário você deve preencher seus dados acerca de suas formações e cursos">(Dicas)</strong>
                </div>
              </div>
            </p>

            <div  class="row">                         
              <a class="btn btn-primary"  href="{{ route('candidatos.formacao.create', [ $seletivo, $candidato ]) }}" >Adicionar Formação</a>
              <a class="btn btn-success" title="Avançar e escolher o Cargo para concorrer"  href="{{ route('candidatos.cargo.show', [$seletivo , $candidato ]) }}" >Concluir/ Avançar</a>
            </div>
         
            
            <div name="candidato_id" value="{{ $candidato->id }}"  > 
            <?php  $cont=1; ?>  
            @foreach($candidato->formacoes as $i => $formacao)          
                <div value="{{ $candidato->id }}" name="candidato_id" class="form-group col-md-6" >
                  <hr>
                    <div class="form-group {{$errors->has('formacoes->tipo')  ? 'has-error': ''}}">
                        <label>Formação/Curso</label>                
                                <select id="tipo" class="form-control" name="formacoes[{{$i}}][tipo]"  title="Preencha uma formação válida" >
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
                      <input type="text" class="form-control" name="formacoes[{{$i}}][instituicao]" value="{{ isset($formacao->instituicao) ? $formacao->instituicao : '' }}" placeholder="Nome da Instituição" name="formacoes[{{$i}}0][instituicao]" id="instituicao" title="Preencha uma Instituição válido">
                  </div>  
                  <div class="form-group {{$errors->has('formacoes->nome_curso')  ? 'has-error': ''}}">           
                      <label>Nome do Curso</label>
                      <input type="text" class="form-control" name="formacoes[{{$i}}][nome_curso]" value="{{ isset($formacao->nome_curso) ? $formacao->nome_curso : '' }}"  placeholder="Digite o curso" name="formacoes[{{$i}}0][nome_curso]" id="nome_curso"  title="Preencha um Nome válido">
                  </div>
                  <div class="form-group  {{$errors->has('formacoes->ano_conclusao')  ? 'has-error': ''}}">            
                      <label>Ano de Conclusão</label>
                      <input type="date" class="form-control"  name="formacoes[{{$i}}][ano_conclusao]" value="{{ isset($formacao->ano_conclusao) ? $formacao->ano_conclusao : '' }}" name="formacoes[{{$i}}0][ano_conclusao]" id="ano_conclusao"  title="Preencha um ano válido">
                  </div>
                <br>                     
                <a href="{{ route('candidatos.formacao.remove', [$seletivo, $candidato, $formacao]) }}"  class="btn btn-danger"> Remover</a>
                <a href="{{route('candidatos.formacao.editar',[$seletivo, $candidato, $formacao])}}"  class="btn btn-primary"> Editar</a>
              <?php $cont=$i ?>
            </div>
            
            @endforeach
           
        </div>

             

</div>
