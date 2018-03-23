<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('css/stylesheet.css')}}">
<link rel="stylesheet" href="{{ asset('css/stylesheet.css')}}">

<div class="panel panel-default">
    <div class="panel-heading">Edite a sua experiência profissional</div>
        <div class="panel-body">
            <form action="{{ route('candidatos.experiencia.update', [ $seletivo, $candidato, $experiencia ] ) }}" method="post" class="form-group col-md-8 ">
                {{ csrf_field() }}
                {{ method_field('PUT') }}  
                    <hr>
                    <div class="form-group ">                
                        <label>Empresa</label>
                        <input placeholder="Nome da empresa" type="text" class="form-control"   name="nome_empresa" value="{{ isset($experiencia->nome_empresa) ? $experiencia->nome_empresa : '' }}"  title="Nome da empresa em que trabalhou" required >
                    </div>

                    <div class="form-group  ">                 
                        <label>Data de Ínicio</label>
                        <input type="date" class="form-control"  name="data_inicio" value="{{ isset($experiencia->data_inicio) ? $experiencia->data_inicio : '' }}"   title="Data de quando começou o trabalho" required >                        
                    </div>

                    <div class="form-group ">                 
                        <label>Data de Término</label>
                        <input type="date" class="form-control"  name="data_fim" value="{{ isset($experiencia->data_fim) ? $experiencia->data_fim : '' }}"    title="Data de quando terminou o trabalho" required>                            
                    </div>

                    <div class="form-group  ">                
                        <label>Cargo</label>
                        <input  placeholder="Digite o cargo" type="text" class="form-control"  name="cargo" value="{{ isset($experiencia->cargo) ? $experiencia->cargo : '' }}"       title="Cargo que trabalhou" required >                        
                    </div>

                    <div class="form-group  ">                 
                        <label>Descrição</label>                                  
                        <textarea   placeholder="Descrição" class="form-control"   name="descricao" value="{{ isset($experiencia->descricao) ? $experiencia->descricao : '' }}"   rows="3"  title="Descrição do trabalho" ></textarea>                        
                    </div>

                        <hr>
                        <input type="hidden" name="candidato_id" value="{{ $candidato->id }}"  > </input>   
                        <input type="hidden" name="cpf" value="{{ $candidato->cpf }}"  > </input> 

                        <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-success">Salvar</button>        
                
            </form> 
        </div>
    </div>
</div>     