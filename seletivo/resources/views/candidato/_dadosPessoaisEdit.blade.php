
<div role="tabpanel" class="tab-pane active" id="etapa1">
       
       <div class="form-group col-md-12"> 
           <h2> Dados Pessoais</h2>
           <p>
             <div class="panel panel-default">
               <div class="panel-body">
                  Suas informações pessoais  <strong id="dica1" onmouseout="escondePopover('dica1')" onmouseover="exibePopover('dica1')" data-container="body" data-toggle="popover" data-placement="top" data-content="Neste formulário você deve informar seus dados pessoais">(Dicas)</strong>
               </div>
             </div>
           </p>
        </div>
       
        <form  method="post" action="{{ route('candidatos.update', [$seletivo, $candidato] ) }}">
            {{ csrf_field() }} 
            {{ method_field('PUT') }}  
             <div class="form-group col-md-6 {{$errors->has('nome')  ? 'has-error': ''}}">
               <label for="nome">Nome</label>
               <input type="text" class="form-control" id="nome" name="nome"  value="{{ isset($candidato->nome) ? $candidato->nome : old('nome') }}" title="Informe seu nome completo aqui" >
               <input type="hidden" name="seletivo_id" value="{{ $seletivo->id }}"> 
                   @if($errors->has('nome'))
                       <span class="help-block">
                           <strong>{{$errors->first('nome')}}</strong>
                       </span> 
                   @endif
             </div>
             <div class="form-group col-md-6 {{$errors->has('email')  ? 'has-error': ''}}">
               <label for="email">E-mail</label>
               <input type="email" class="form-control" id="email" name="email"  value="{{ isset($candidato->email) ? $candidato->email : old('email') }}"  title="Informe seu e-mail aqui" >
                   @if($errors->has('email'))
                       <span class="help-block">
                           <strong>{{$errors->first('email')}}</strong>
                       </span> 
                   @endif
             </div>

             <div class="form-group col-md-6 {{$errors->has('cpf')  ? 'has-error': ''}}">
               <label for="cpf">CPF</label>
               <input type="text" class="form-control" id="cpf" name="cpf"  value="{{ isset($cpf)  ? $cpf : $candidato->cpf }}"  title="Informe seu CPF aqui" >
               @if($errors->has('cpf'))
                       <span class="help-block">
                           <strong>{{$errors->first('cpf')}}</strong>
                       </span> 
                   @endif
             </div>

             <div class="form-group col-md-6 {{$errors->has('rg')  ? 'has-error': ''}}">
               <label for="rg">RG</label>
               <input type="number" class="form-control" id="rg"name="rg"   value="{{ isset($candidato->rg) ? $candidato->rg : old('rg') }}" title="Informe seu RG aqui" >
               @if($errors->has('rg'))
                       <span class="help-block">
                           <strong>{{$errors->first('rg')}}</strong>
                       </span> 
                   @endif
             </div>

             <div class="form-group col-md-6 {{$errors->has('sexo')  ? 'has-error': ''}}">
               <label for="sexo">Sexo:</label>
                   <select name="sexo"  id="sexo" class="form-control" value="{{ isset($candidato->sexo) ? $candidato->sexo : old('sexo') }}"  >
                           <option value=""{{ (!isset($candidato) ? 'selected' : '') }}  >Selecione</option>
                           <option value="masculino" {{  (isset($candidato) && $candidato->sexo == 'masculino' ? 'selected' : '') }} >masculino</option>
                           <option value="feminino" {{ (isset($candidato) && $candidato->sexo == 'feminino' ? 'selected' : '') }} >feminino</option>                 
                   </select>
                   @if($errors->has('sexo'))
                       <span class="help-block">
                           <strong>{{$errors->first('sexo')}}</strong>
                       </span> 
                   @endif
            </div>
           
               <div class="form-group col-md-6 {{$errors->has('data_nascimento')  ? 'has-error': ''}}">
                   <label for="data_nascimento">Data Nascimento</label>
                   <input type="date" class="form-control"   value="{{ isset($candidato->data_nascimento) ? $candidato->data_nascimento : old('data_nascimento')}}" placeholder="Informe sua data de nascimento aqui" name="data_nascimento" >
                   @if($errors->has('data_nascimento'))
                       <span class="help-block">
                           <strong>{{$errors->first('data_nascimento')}}</strong>
                       </span> 
                   @endif
               </div>

             <div class="form-group col-md-6 {{$errors->has('estado_civil')  ? 'has-error': ''}}">
               <label for="estado_civil">Estado Civil:</label>
                   
                       <select id="estado_civil" class="form-control" name="estado_civil" value="{{ isset($candidato->estado_civil) ? $candidato->estado_civil : old('estado_civil') }}" >
                           <option value="">Selecione</option>    
                           <option value="SOLTEIRO" {{ (isset($candidato) && $candidato->estado_civil == 'SOLTEIRO' ? 'selected' : '' )}} >Solteiro</option>
                           <option value="CASADO" {{ (isset($candidato) && $candidato->estado_civil == 'CASADO' ? 'selected' : '' )}} >Casado</option>
                           <option value="DIVORCIADO" {{ (isset($candidato) && $candidato->estado_civil == 'DIVORCIADO' ? 'selected' : '' )}} >Divorciado</option>
                           <option value="VIUVO" {{ (isset($candidato) && $candidato->estado_civil == 'VIUVO' ? 'selected' : '' )}} >Viúvo(a)</option>
                       </select>
                       @if($errors->has('estado_civil'))
                         <span class="help-block">
                             <strong>{{$errors->first('estado_civil')}}</strong>
                         </span> 
                       @endif
                                
             </div>
             
             <div class="form-group col-md-6 {{$errors->has('cor_raca')  ? 'has-error': ''}}">
               <label for="cor_raca">Cor\Raça:</label>
                   
                       <select id="cor_raca" class="form-control" name="cor_raca" value="{{ isset($candidato->cor_raca) ? $candidato->cor_raca : old('cor_raca') }}">
                           <option value="">Selecione</option>
                           <option value="BRANCO"  {{ (isset($candidato) && $candidato->cor_raca == 'BRANCO' ? 'selected' : '' ) }}>Branco</option>
                           <option value="AMARELO" {{ (isset($candidato) && $candidato->cor_raca == 'AMARELO' ? 'selected' : ''  )}} >Amarelo</option>
                           <option value="PARDO" {{ (isset($candidato) && $candidato->cor_raca == 'PARDO' ? 'selected' : ''  )}} >Pardo</option>
                           <option value="NEGRO"{{ (isset($candidato) && $candidato->cor_raca == 'NEGRO' ? 'selected' : ''  )}} >Negro</option>
                           <option value="INDIGINA" {{ (isset($candidato) && $candidato->cor_raca == 'INDIGINA' ? 'selected' : ''  )}} >Indígina</option>
                           
                       </select>
                       @if($errors->has('cor_raca'))
                         <span class="help-block">
                             <strong>{{$errors->first('cor_raca')}}</strong>
                         </span> 
                       @endif
                                
             </div>             
             
             <div class="form-group col-md-6 {{$errors->has('naturalidade')  ? 'has-error': ''}}">
                 <label for="naturalidade">Naturalidade</label>
                 <input type="text" class="form-control" id="naturalidade" value="{{ isset($candidato->naturalidade) ? $candidato->naturalidade : old('naturalidade') }}" name="naturalidade"  title="EX: Brasileiro..Venezuelano" >
                 @if($errors->has('naturalidade'))
                       <span class="help-block">
                           <strong>{{$errors->first('naturalidade')}}</strong>
                       </span> 
                   @endif
             </div>

             <div class="form-group col-md-6 {{$errors->has('nacionalidade')  ? 'has-error': ''}}">
               <label for="nacionalidade">Nacionalidade</label>
               <input type="text" class="form-control" id="nacionalidade"  value="{{ isset($candidato->nacionalidade) ? $candidato->nacionalidade : old('nacionalidade') }}" name="nacionalidade"  title="EX: Brasileiro..Venezuelano" >
               @if($errors->has('nacionalidade'))
                       <span class="help-block">
                           <strong>{{$errors->first('nacionalidade')}}</strong>
                       </span> 
                   @endif
             </div>

             <div class="form-group col-md-2 {{$errors->has('idade')  ? 'has-error': ''}}">
               <label for="idade">Idade</label>
               <input type="number" min="17" max="99" class="form-control" value="{{ isset($candidato->idade) ? $candidato->idade : old('idade') }}" id="idade" name="idade" title="" >
               @if($errors->has('idade'))
                       <span class="help-block">
                           <strong>{{$errors->first('idade')}}</strong>
                       </span> 
                   @endif
             </div>

            
           <div class="form-group col-md-12">
             <hr>              
           </div>


           <div class="form-group col-md-12">            
             <h2>Endereço</h2>
             <p>
               <div class="panel panel-default">
                   <div class="panel-body">
                       Seu endereço  <strong id="dica4" onmouseout="escondePopover('dica4')" onmouseover="exibePopover('dica4')" data-container="body" data-toggle="popover" data-placement="top" data-content="Nesta parte do formulário você deve informar seus dados sobre seu endereço">(Dicas)</strong>
                   </div>
               </div>
             </p>
           </div>

           <div class="form-group col-md-6 {{$errors->has('cidade')  ? 'has-error': ''}}">
                   <label >Cidade:</label>
                   <input id="cidade" class="form-control" type="text" name="cidade"  value="{{ isset($endereco->cidade) ? $endereco->cidade : old('cidade') }}"  title="Cidade onde você reside" >
                   @if($errors->has('cidade'))
                       <span class="help-block">
                           <strong>{{$errors->first('cidade')}}</strong>
                       </span> 
                   @endif
           </div>

           <div class="form-group col-md-6 {{$errors->has('uf')  ? 'has-error': ''}}">
                   <label>UF:</label>
                       <select id="uf" class="form-control" name="uf" value="{{ isset($endereco->uf) ? $endereco->uf : old('uf') }}"   title="Estado onde você reside" >
                                       <option value="">Selecione</option> 
                                       <option value="AC" {{(isset($endereco) && $endereco->uf == 'AC'  ? 'selected' : '')}} > Acre</option>
                                       <option value="AL" {{( isset($endereco) && $endereco->uf == 'AL'  ? 'selected' : '')}}>Alagoas</option>
                                       <option value="AP" {{( isset($endereco) && $endereco->uf == 'AP'  ? 'selected' : '')}}>Amapá</option>
                                       <option value="AM" {{( isset($endereco) && $endereco->uf == 'AM'  ? 'selected' : '')}}>Amazonas</option>
                                       <option value="BA" {{ isset($endereco) && ($endereco->uf == 'BA'  ? 'selected' : '')}}>Bahia</option>
                                       <option value="CE" {{( isset($endereco) && $endereco->uf == 'CE'  ? 'selected' : '')}}>Ceará</option>
                                       <option value="DF" {{( isset($endereco) && $endereco->uf == 'DF'  ? 'selected' : '')}}>Distrito Federal</option>
                                       <option value="ES" {{( isset($endereco) && $endereco->uf == 'ES'  ? 'selected' : '')}}>Espirito Santo</option>
                                       <option value="GO" {{(  isset($endereco) && $endereco->uf == 'GO'  ? 'selected' : '')}}>Goiás</option>
                                       <option value="MA" {{ isset($endereco) && ($endereco->uf == 'MA'  ? 'selected' : '')}}>Maranhão</option>
                                       <option value="MS" {{( isset($endereco) && $endereco->uf == 'MS'  ? 'selected' : '')}}>Mato Grosso do Sul</option>
                                       <option value="MT" {{ ( isset($endereco) && $endereco->uf == 'MT'  ? 'selected' : '')}}>Mato Grosso</option>
                                       <option value="MG" {{( isset($endereco) && $endereco->uf == 'MG'  ? 'selected' : '')}}>Minas Gerais</option>
                                       <option value="PA" {{( isset($endereco) && $endereco->uf == 'PA'  ? 'selected' : '')}}>Pará</option>
                                       <option value="PB" {{( isset($endereco) && $endereco->uf == 'PB'  ? 'selected' : '')}}>Paraíba</option>
                                       <option value="PR" {{( isset($endereco) && $endereco->uf == 'PR'  ? 'selected' : '')}}>Paraná</option>
                                       <option value="PE" {{( isset($endereco) && $endereco->uf == 'PE'  ? 'selected' : '')}}>Pernambuco</option>
                                       <option value="PI" {{( isset($endereco) && $endereco->uf == 'PI'  ? 'selected' : '')}}>Piauí</option>
                                       <option value="RJ" {{( isset($endereco) && $endereco->uf == 'RJ'  ? 'selected' : '')}}>Rio de Janeiro</option>
                                       <option value="RN" {{( isset($endereco) && $endereco->uf == 'RN'  ? 'selected' : '')}}>Rio Grande do Norte</option>
                                       <option value="RS" {{( isset($endereco) && $endereco->uf == 'RS'  ? 'selected' : '')}}>Rio Grande do Sul</option>
                                       <option value="RO" {{( isset($endereco) && $endereco->uf == 'RO'  ? 'selected' : '')}}>Rondônia</option>
                                       <option value="RR" {{( isset($endereco) && $endereco->uf == 'RR'  ? 'selected' : '')}} > Roraima</option>
                                       <option value="SC" {{( isset($endereco) && $endereco->uf == 'SC'  ? 'selected' : '')}}>Santa Catarina</option>
                                       <option value="SP" {{ isset($endereco) && ($endereco->uf == 'SP'  ? 'selected' : '')}}>São Paulo</option>
                                       <option value="SE" {{( isset($endereco) && $endereco->uf == 'SE'  ? 'selected' : '')}}>Sergipe</option>
                                       <option value="TO" {{( isset($endereco) && $endereco->uf == 'TO'  ? 'selected' : '')}}>Tocantins</option>
                                   </select>
                   @if($errors->has('uf'))
                       <span class="help-block">
                           <strong>{{$errors->first('uf')}}</strong>
                       </span> 
                   @endif                                     
           </div>

           <div class="form-group col-md-6 {{$errors->has('cep')  ? 'has-error': ''}}">
               <label >CEP:</label>
               <input id="cep" class="form-control" type="text" name="cep" value="{{ isset($endereco->cep) ? $endereco->cep : old('cep') }}"  title="CEP da sua RUA/AVENIDA" > 
               @if($errors->has('cep'))
                       <span class="help-block">
                           <strong>{{$errors->first('cep')}}</strong>
                       </span> 
               @endif                           
           </div>


           <div class="form-group col-md-6 {{$errors->has('bairro')  ? 'has-error': ''}}">
               <label >Bairro</label>                        
               <input id="bairro" type="text" class="form-control" name="bairro" value="{{ isset($endereco->bairro) ? $endereco->bairro : old('bairro') }}"   title="Bairro em que reside" >  
               @if($errors->has('bairro'))
                       <span class="help-block">
                           <strong>{{$errors->first('bairro')}}</strong>
                       </span> 
              @endif                 
           </div>

           <div class="form-group col-md-6 {{$errors->has('logradouro')  ? 'has-error': ''}}">
               <label>Logradouro</label>
               <input id="logradouro" type="text" class="form-control" name="logradouro" value="{{ isset($endereco->logradouro) ? $endereco->logradouro : old('logradouro') }}"   title="Informe o nome de sua Rua/Avenida/Vicinal" >
               @if($errors->has('logradouro'))
                       <span class="help-block">
                           <strong>{{$errors->first('logradouro')}}</strong>
                       </span> 
               @endif   
           </div>

           <div class="form-group col-md-6 {{$errors->has('num')  ? 'has-error': ''}}">
               <label >Numero</label>
               <input id="num" type="number" class="form-control" name="num" value="{{ isset($endereco->num) ? $endereco->num : old('num') }}"   title="Número da sua casa" >
               @if($errors->has('num'))
                       <span class="help-block">
                           <strong>{{$errors->first('num')}}</strong>
                       </span> 
               @endif                           
           </div>   
                   
           <div class="form-group col-md-6 {{$errors->has('complemento')  ? 'has-error': ''}}">
               <label >Complemento:</label>
               <input id="complemento" class="form-control" type="text" value="{{ isset($endereco->complemento) ? $endereco->complemento : old('complemento') }}"  name="complemento"   title="Algum complemento para seu endereço" >
               @if($errors->has('complemento'))
                       <span class="help-block">
                           <strong>{{$errors->first('complemento')}}</strong>
                       </span> 
               @endif
           </div>
           
           <div class="form-group col-md-12">
            <hr>
            
            <button  type="submit" class="btn btn-success"> Atualizar Dados</button> 
           </div>
    </form>
           
          
</div>  
