<div role="tabpanel" class="tab-pane " id="etapa2">
            <h2>Experiência Profissional</h2>
            <p>
              <div class="panel panel-default">
                <div class="panel-body">
                  Suas experiências profissionais <strong id="dica2" onmouseout="escondePopover('dica2')" onmouseover="exibePopover('dica2')" data-container="body" data-toggle="popover" data-placement="top" data-content="Neste formulário você deve preencher suas experiências profissionais(estágios,seletivos..)">(Dicas)</strong>
                </div>
              </div>
              
            </p>

            <div class="row">
              <button class="btn btn-info" onclick="lista.insere()" > Adicionar outra experiência</button>
              <button onclick="alteraEtapa(3)" class="btn btn-info">Próxima Etapa</button>
            </div>

            <form id="form">
              <hr>
              <div class="form-group col-md-6">
                <label>Empresa</label>
                <input type="text" class="form-control" id="nome_empresa" data-toggle="tooltip" data-placement="top" title="Nome da empresa em que trabalhou">
              </div>

              <div class="form-group col-md-6">
                <label>Data de Ínicio</label>
                <input type="date" class="form-control" id="data_inicio" data-toggle="tooltip" data-placement="top" title="Data de quando começou o trabalho">
              </div>

              <div class="form-group col-md-6">
                <label>Data de Término</label>
                <input type="date" class="form-control" id="data_fim" data-toggle="tooltip" data-placement="top" title="Data de quando terminou o trabalho">
              </div>

              <div class="form-group col-md-6">
                <label>Cargo</label>
                <input type="text" class="form-control" id="cargo" data-toggle="tooltip" data-placement="top" title="Cargo que trabalhou">
              </div>

              <div class="form-group col-md-6">
                <label>Descrição</label>
                <textarea class="form-control" id="descricao" rows="3" data-toggle="tooltip" data-placement="top" title="Descrição do trabalho"></textarea>
              </div>

            <div class="row" >
               
                <button class="btn btn-danger"  onclick="lista.remove(this.form)" >Remover</button>
            </div>
            
            </form>
            
            
            
</div>
