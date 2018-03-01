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
              <a onclick="alteraEtapa(4)" class="btn btn-info">Avançar</a>
              
              
            </div>

            <div id="form2" >              
              <div class="form-group col-md-6" >
              <hr>
            <div class="form-group {{$errors->has('formacoes[0][tipo]')  ? 'has-error': ''}}">
                <label>Formação/Curso</label>                
                        <select id="tipo" class="form-control" name="formacoes[0][tipo]"  title="Preencha uma formação válida" >
                            <option value="">Selecione</option>
                            <option value="Curso de Capacitação">Curso de Capacitação</option>
                            <option value="Doutorado Completo">Doutorado Completo</option>
                            <option value="Doutorado Incompleto">Doutorado Incompleto</option>
                            <option value="Mestrado Completo">Mestrado Completo</option>
                            <option value="Mestrado Incompleto">Mestrado Incompleto</option>
                            <option value="Pós-Graduação Completa">Pós-Graduação Completa</option>
                            <option value="Pós-Graduação Incompleta">Pós-Graduação Incompleta</option>
                            <option value="Graduação Completa">Graduação Completa</option>
                            <option value="Graduação Incompleta">Graduação Incompleta</option>
                            <option value="Ensino Médio Completo">Ensino Médio Completo</option>
                            <option value="Ensino Médio Incompleto">Ensino Médio Incompleto</option>
                            <option value="Ensino Médio Técnico">Ensino Médio Técnico</option>
                            <option value="Ensino Fundamental Completo">Ensino Fundamental Completo</option>
                            <option value="Ensino Fundamental Incompleto">Ensino Fundamental Incompleto</option>
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