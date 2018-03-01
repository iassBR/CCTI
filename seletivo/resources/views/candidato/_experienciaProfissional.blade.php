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
        
        <a  class="btn btn-info"  id="add_field">Adicionar Experiência</a>
        <a onclick="alteraEtapa(3)" class="btn btn-info">Avançar</a>
        
      </div>

      <div id="form" >
                              
        <div class="form-group col-md-6 ">
          <hr>
          <div class="form-group {{$errors->has('experiencias[0][nome_empresa]')  ? 'has-error': ''}}">                
            <label>Empresa</label>
            <input placeholder="Nome da empresa" type="text" class="form-control" id="nome_empresa" name="experiencias[0][nome_empresa]" value=""   title="Nome da empresa em que trabalhou" >
            @if($errors->has('experiencias[0][nome_empresa]'))
                  <span class="help-block">
                      <strong>{{$errors->first('experiencias[0][nome_empresa]')}}</strong>
                  </span> 
            @endif
          </div>

          <div class="form-group  {{$errors->has('experiencias[0][data_inicio]')  ? 'has-error': ''}}">                 
            <label>Data de Ínicio</label>
            <input type="date" class="form-control" id="data_inicio" name="experiencias[0][data_inicio]" value="" title="Data de quando começou o trabalho" >
            @if($errors->has('experiencias[0][data_inicio]'))
                  <span class="help-block">
                      <strong>{{$errors->first('experiencias[0][data_inicio]')}}</strong>
                  </span> 
            @endif
          </div>

          <div class="form-group  {{$errors->has('experiencias[0][data_fim]')  ? 'has-error': ''}}">                 
            <label>Data de Término</label>
            <input type="date" class="form-control" id="data_fim" name="experiencias[0][data_fim]" value=""   title="Data de quando terminou o trabalho" >
            @if($errors->has('experiencias[0][data_fim]'))
                  <span class="help-block">
                      <strong>{{$errors->first('experiencias[0][data_fim]')}}</strong>
                  </span> 
            @endif
          </div>

          <div class="form-group  {{$errors->has('experiencias[0][cargo]')  ? 'has-error': ''}}">                
            <label>Cargo</label>
            <input  placeholder="Digite o cargo"type="text" class="form-control" id="cargo"   name="experiencias[0][cargo]" value=""   title="Cargo que trabalhou" >
            @if($errors->has('experiencias[0][cargo]'))
                  <span class="help-block">
                      <strong>{{$errors->first('experiencias[0][cargo]')}}</strong>
                  </span> 
            @endif
          </div>

          <div class="form-group  {{$errors->has('experiencias[0][descricao]')  ? 'has-error': ''}}">                 
            <label>Descrição</label>                                  
            <textarea   placeholder="Descrição " class="form-control" id="descricao"  name="experiencias[0][descricao]" value="{{ old('descricao')  }}" rows="3"  title="Descrição do trabalho" ></textarea>
            @if($errors->has('experiencias[0][descricao]'))
                  <span class="help-block">
                      <strong>{{$errors->first('experiencias[0][descricao]')}}</strong>
                  </span> 
            @endif
          </div>

            <hr>
            <button id="remover_campo"   class="btn btn-danger"> Remover</button>         
          
        </div> 

        
      </div>        
</div>
