@extends('layouts.form')

@section('corpo')
<div class="container">
    <div class="row">
      <!-- Nav tabs -->  
        <ul id="tabEtapas" class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#etapa1" aria-controls="etapa1" role="tab" data-toggle="tab">Dados Pessoais</a></li>
          <li role="presentation"><a href="#etapa2" aria-controls="etapa2" role="tab" data-toggle="tab">Experiências Profissionais</a></li>
          <li role="presentation"><a href="#etapa3" aria-controls="etapa3" role="tab" data-toggle="tab">Formação</a></li>
          <li role="presentation"><a href="#etapa4" aria-controls="etapa4" role="tab" data-toggle="tab">Cargo</a></li>
        </ul>
        <!-- Tab panes -->
        <form  method="post" action="{{ route('candidatos.store') }}">
        {{ csrf_field() }}
        <div class="tab-content">
         
        
            @include('candidato._dadosPessoais')

            @include('candidato._experienciaProfissional')

            @include('candidato._formacao')

            @include('candidato._cargo')

        </div>
        
      </form>
    </div>
</div>
    <!-- Verificar as IMPORTAÇÕES NECESSÁRIAS PARA VALIDAÇÃO  -->


   

@endsection