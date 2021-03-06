<div role="tabpanel" class="tab-pane" id="etapa3">
            <h2>Formação/Curso</h2>
            <p>
              <div class="panel panel-default">
                <div class="panel-body">
                  Formação e cursos de Capacitação <strong id="dica3" onmouseout="escondePopover('dica3')" onmouseover="exibePopover('dica3')" data-container="body" data-toggle="popover" data-placement="top" data-content="Neste formulário você deve preencher seus dados acerca de suas formações e cursos">(Dicas)</strong>
                </div>
              </div>
            </p>

            <div class="row">
              <a  class="btn btn-info"  id="add_field2">Adicionar Formação</a>              
              <button type="submit" onclick="validaFormulario()"  class="btn btn-success">Salvar Currículo</button>            
              
            </div>

            <div id="form2" >              
                <div class="form-group col-md-6" >
                  <hr>
                    <div class="form-group {{$errors->has('formacoes[0][tipo]')  ? 'has-error': ''}}">
                        <label>Formação/Curso</label>                
                                <select id="tipo" class="form-control" name="formacoes[0][tipo]"  title="Preencha uma formação válida" >
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
                  <div class="form-group  {{$errors->has('formacoes[0][instituicao]')  ? 'has-error': ''}}">
                      <label>Instituição</label>
                      <input type="text" class="form-control" placeholder="Nome da Instituição" name="formacoes[0][instituicao]" id="instituicao" title="Preencha uma Instituição válido">
                  </div>  
                  <div class="form-group {{$errors->has('formacoes[0][nome_curso]')  ? 'has-error': ''}}">           
                      <label>Nome do Curso</label>
                      <input type="text" class="form-control" placeholder="Digite o curso" name="formacoes[0][nome_curso]" id="nome_curso"  title="Preencha um Nome válido">
                  </div>
                  <div class="form-group  {{$errors->has('formacoes[0][ano_conclusao]')  ? 'has-error': ''}}">            
                      <label>Ano de Conclusão</label>
                      <input type="date" class="form-control" name="formacoes[0][ano_conclusao]" id="ano_conclusao"  title="Preencha um ano válido">
                  </div>
                <br>                     
                <button id="remover_campo"    class="btn btn-danger"> Remover</button>
            </div>

        </div>

             

</div>
