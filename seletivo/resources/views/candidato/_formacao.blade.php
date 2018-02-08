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
              <button class="btn btn-info" onclick="lista2.insere()" > Adicionar outra formação</button>
              <button onclick="alteraEtapa(4)" class="btn btn-info">Próxima Etapa</button>
            </div>

            <form id="form2">
              <hr>
              <div class="form-group col-md-6">
                <label>Formação/Curso</label>
                
                        <select id="tipo" class="form-control" name="tipo" data-toggle="tooltip" data-placement="top" title="Preencha uma formação válida" >
                            <option value="">Curso de Capacitação</option>
                            <option value="">Doutorado Completo</option>
                            <option value="">Doutorado Incompleto</option>
                            <option value="">Mestrado Completo</option>
                            <option value="">Mestrado Incompleto</option>
                            <option value="">Pós-Graduação Completa</option>
                            <option value="">Pós-Graduação Incompleta</option>
                            <option value="">Graduação Completa</option>
                            <option value="">Graduação Incompleta</option>
                            <option value="">Ensino Médio Completo</option>
                            <option value="">Ensino Médio Incompleto</option>
                            <option value="">Ensino Médio Técnico</option>
                            <option value="">Ensino Fundamental Completo</option>
                            <option value="">Ensino Fundamental Incompleto</option>
                        </select>
              </div>

              <div class="form-group col-md-6">
                <label>Instituição</label>
                <input type="text" class="form-control" id="instituicao" data-toggle="tooltip" data-placement="top" title="Preencha uma Instituição válido">
              </div>

              <div class="form-group col-md-6">
                <label>Nome do Curso</label>
                <input type="text" class="form-control" id="nome_curso" data-toggle="tooltip" data-placement="top" title="Preencha um Nome válido">
              </div>

              <div class="form-group col-md-6">
                <label>Ano de Conclusão</label>
                <input type="date" class="form-control" id="ano_conclusao" data-toggle="tooltip" data-placement="top" title="Preencha um ano válido">
              </div>
              <div class="row" >               
                <button class="btn btn-danger"  onclick="lista2.remove(this.form)" >Remover</button>
              </div>

            </form>


            
          </div>