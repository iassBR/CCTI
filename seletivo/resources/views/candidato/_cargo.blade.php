<div role="tabpanel" class="tab-pane" id="etapa4">
        <div class="form-group col-md-12">
            <h2>Cargo</h2>
            <p>
              <div class="panel panel-default">
                <div class="panel-body">
                  Selecione o cargo que deseja concorrer <strong id="dica4" onmouseout="escondePopover('dica4')" onmouseover="exibePopover('dica4')" data-container="body" data-toggle="popover" data-placement="top" data-content="Neste formulário você deve selecionar o curso que deseja concorrer há uma vaga">(Dicas)</strong>
                </div>
              </div>
            </p>
           

              <div class="form-group col-md-10">
                             
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Cargo</th>
                      <th> Tempo de Experiência Mínimo </th>
                      <th> Nível de Escolaridade </th>            
                      <th> Ações </th>   
                    </tr>        
                    </thead>            
                  <tbody>

                  @foreach($seletivo->cargos as $cargo)
                    <tr>
                        <td>{{ $cargo->nomeCargo }} </td>
                        <td> {{ $cargo->tempoExperiencia }}</td>
                        <td> {{ $cargo->escolaridades->tipo }} </td>
                        <td> <a value="{{$cargo->id}}" name="cargo_id" class="btn btn-success">Salvar</a> </td>
                                    
                    </tr>
                   @endforeach 
                    </tbody>
                  
                </table>

              </div>
         
      </div>

            
</div>
