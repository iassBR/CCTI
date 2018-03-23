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
        
      <a class="btn btn-primary"  href="{{ route('candidatos.experiencia.create', [ $seletivo, $candidato ]) }}" >Adicionar Experiência</a>
      
        
      </div>

      
      @foreach($candidato->experiencias as $i => $experiencia)                      
        <div class="form-group col-md-6 ">
          <hr>
          <div class="form-group ">                
            <label>Empresa</label>
            <input placeholder="Nome da empresa" type="text" class="form-control" value="{{ isset($experiencia->nome_empresa) ? $experiencia->nome_empresa : old('nome_empresa') }}"  name="experiencias[{{$i}}][nome_empresa]"  title="Nome da empresa em que trabalhou" >
          </div>

          <div class="form-group  ">                 
            <label>Data de Ínicio</label>
            <input type="date" class="form-control" id="data_inicio" name="experiencias[{{$i}}][data_inicio]" value="{{ isset($experiencia->data_inicio) ? $experiencia->data_inicio : old('data_inicio') }}"  title="Data de quando começou o trabalho" >
           
          </div>

          <div class="form-group ">                 
            <label>Data de Término</label>
            <input type="date" class="form-control" id="data_fim" name="experiencias[{{$i}}][data_fim]" value="{{ isset($experiencia->data_fim) ? $experiencia->descricao : old('data_fim') }}"    title="Data de quando terminou o trabalho" >
            
          </div>

          <div class="form-group  ">                
            <label>Cargo</label>
            <input  placeholder="Digite o cargo"type="text" class="form-control" id="cargo"   name="experiencias[{{$i}}][cargo]" value="{{ isset($experiencia->cargo) ? $experiencia->cargo : old('cargo') }}"   title="Cargo que trabalhou" >
           
          </div>

          <div class="form-group  ">                 
            <label>Descrição</label>                                  
            <textarea   placeholder="Descrição" class="form-control" id="descricao"  name="experiencias[{{$i}}][descricao]" value="{{ isset($experiencia->descricao) ? $experiencia->descricao : old('descricao') }}"  rows="3"  title="Descrição do trabalho" ></textarea>
          
          </div>

            <hr>
            <a href="{{ route('candidatos.experiencia.remove', [$seletivo, $candidato, $experiencia]) }}" class="btn btn-danger">Deletar</a>
            <a href="{{route('candidatos.experiencia.edit',[$seletivo, $candidato, $experiencia])}}" class="btn btn-primary">Editar </a>         
          
        </div> 
        @endforeach
        
            
</div>
