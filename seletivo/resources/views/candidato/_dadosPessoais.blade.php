
<div role="tabpanel" class="tab-pane active" id="etapa1">
            <h2> Dados Pessoais</h2>
            <p>
              <div class="panel panel-default">
                <div class="panel-body">
                   Suas informações pessoais  <strong id="dica1" onmouseout="escondePopover('dica1')" onmouseover="exibePopover('dica1')" data-container="body" data-toggle="popover" data-placement="top" data-content="Neste formulário você deve informar seus dados pessoais">(Dicas)</strong>
                </div>
              </div>
            </p>
        
            <form>
              <div class="form-group col-md-6">
                <label>Nome</label>
                <input type="text" class="form-control" id="nome" data-toggle="tooltip" data-placement="top" title="Informe seu nome completo aqui">
              </div>
              <div class="form-group col-md-6">
                <label>E-mail</label>
                <input type="email" class="form-control" id="email" data-toggle="tooltip" data-placement="top" title="Informe seu e-mail aqui">
              </div>

              <div class="form-group col-md-6">
                <label>CPF</label>
                <input type="text" class="form-control" id="cpf" data-toggle="tooltip" data-placement="top" title="Informe seu CPF aqui">
              </div>

              <div class="form-group col-md-6">
                <label>RG</label>
                <input type="number" class="form-control" id="rg" data-toggle="tooltip" data-placement="top" title="Informe seu RG aqui">
              </div>

              <div class="form-group col-md-6">
                <label>Sexo:</label>                   
                    <label class="radio-inline"><input type="radio" name="sexo"  id="sexo" >Masculino</label>                    
                    <label class="radio-inline"><input type="radio" name="sexo"  id="sexo" >Feminino</label>
             </div>
            
                <div class="form-group col-md-6">
                    <label for="data_nascimento">Data Nascimento</label>
                    <input type="date" class="form-control" placeholder="Iforme sua data de nascimento aqui" name="data_nascimento" required>
                </div>

              <div class="form-group col-md-6">
                <label for="estado_civil">Estado Civil:</label>
                    
                        <select id="estado_civil" class="form-control" name="estado_civil">
                            <option value="SOLTEIRO">Solteiro</option>
                            <option value="CASADO">Casado</option>
                            <option value="DIVORCIADO">Divorciado</option>
                            <option value="VIUVO">Viúvo(a)</option>
                        </select>
                                 
              </div>
              
              <div class="form-group col-md-6">
                <label for="cor_raca">Cor\Raça:</label>
                    
                        <select id="cor_raca" class="form-control" name="cor_raca">
                            <option value="BRANCO">Branco</option>
                            <option value="AMARELO">Amarelo</option>
                            <option value="PARDO">Pardo</option>
                            <option value="NEGRO">Negro</option>
                            <option value="INDIGINA">Indígina</option>
                            
                        </select>
                                 
              </div>
              
              <div class="form-group col-md-6">
                <label>Nacionalidade</label>
                <input type="text" class="form-control" id="nacionalidade" data-toggle="tooltip" data-placement="top" title="EX: Brasileiro..Venezuelano">
              </div>

              <div class="form-group col-md-6">
                <label>Naturalidade</label>
                <input type="text" class="form-control" id="naturalidade" data-toggle="tooltip" data-placement="top" title="EX: Boa vista, Pacaraima">
              </div>
            <div>
              <hr>              
            </div>
            <div>            
              <h2>Endereço</h2>
              <p>
                <div class="panel panel-default">
                    <div class="panel-body">
                        Seu endereço  <strong id="dica4" onmouseout="escondePopover('dica4')" onmouseover="exibePopover('dica4')" data-container="body" data-toggle="popover" data-placement="top" data-content="Nesta parte do formulário você deve informar seus dados sobre seu endereço">(Dicas)</strong>
                    </div>
                </div>
              </p>
            </div>

            <div class="form-group col-md-6">
                    <label >Cidade:</label>
                    <input id="cidade" class="form-control" type="text" name="cidade" data-toggle="tooltip" data-placement="top" title="Cidade onde você reside" >
            </div>

            <div class="form-group col-md-6">
                    <label>UF:</label>
                        <select id="uf" class="form-control" name="uf" data-toggle="tooltip" data-placement="top" title="Estado onde você reside">
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espirito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                    </select>
                            
            </div>

            <div class="form-group col-md-6">
                <label >CEP:</label>
                <input id="cep" class="form-control" type="text" name="cep" data-toggle="tooltip" data-placement="top" title="CEP da sua RUA/AVENIDA">                            
            </div>


            <div class="form-group col-md-6">
                <label >Bairro</label>                        
                <input id="bairro" type="text" class="form-control" name="bairro" data-toggle="tooltip" data-placement="top" title="Bairro em que reside">                   
            </div>

            <div class="form-group col-md-6">
                <label>Logradouro</label>
                <input id="logradouro" type="text" class="form-control" name="logradouro" data-toggle="tooltip" data-placement="top" title="Informe o nome de sua Rua/Avenida/Vicinal">   
            </div>

            <div class="form-group col-md-6">
                <label >Numero</label>
                <input id="num" type="number" class="form-control" name="num"   data-toggle="tooltip" data-placement="top" title="Número da sua casa">                           
            </div>   
                    
            <div class="form-group col-md-6">
                <label >Complemento:</label>
                <input id="complemento" class="form-control" type="text" name="complemento"  data-toggle="tooltip" data-placement="top" title="Algum complemento para seu endereço">
            </div>


            </form>
            
            <button onclick="alteraEtapa(2)" class="btn btn-info">Próxima Etapa</button>
</div>  
