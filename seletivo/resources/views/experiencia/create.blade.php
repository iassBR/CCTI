<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('css/stylesheet.css')}}">
   

    @if($errors->any()) 
        <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif
<div class="panel panel-default">
    <div class="panel-heading">Adicionar uma  Formação</div>
        <div class="panel-body">

                <form action="{{ route('candidatos.experiencia.store', [ $seletivo, $candidato ] ) }}" method="post" class="form-group col-md-8 ">
                    {{ csrf_field() }}
                        <hr>
                        <div class="form-group ">                
                            <label>Empresa</label>
                            <input placeholder="Nome da empresa" type="text" class="form-control"   name="nome_empresa"  title="Nome da empresa em que trabalhou" required >
                        </div>

                        <div class="form-group  ">                 
                            <label>Data de Ínicio</label>
                            <input type="date" class="form-control"  name="data_inicio"   title="Data de quando começou o trabalho" required >                        
                        </div>

                        <div class="form-group ">                 
                            <label>Data de Término</label>
                            <input type="date" class="form-control"  name="data_fim"    title="Data de quando terminou o trabalho" required>                            
                        </div>

                        <div class="form-group  ">                
                            <label>Cargo</label>
                            <input  placeholder="Digite o cargo" type="text" class="form-control"    name="cargo"    title="Cargo que trabalhou" required >                        
                        </div>

                        <div class="form-group  ">                 
                            <label>Descrição</label>                                  
                            <textarea   placeholder="Descrição" class="form-control"   name="descricao"   rows="3"  title="Descrição do trabalho" ></textarea>                        
                        </div>

                            <hr>
                            <input type="hidden" name="candidato_id" value="{{ $candidato->id }}"  > </input>   
                            <input type="hidden" name="cpf" value="{{ $candidato->cpf }}"  > </input> 

                            <a href="{{ url()->previous() }}" class="btn btn-default">Cancelar</a>
                            <button type="submit" class="btn btn-success">Salvar</button>        
                    
                    </form> 
        </div>
	</div>
</div>