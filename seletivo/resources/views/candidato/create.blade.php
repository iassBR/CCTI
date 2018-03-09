@extends('layouts.form')

@section('corpo')
<form  method="post" action="{{ route('candidatos.store') }}">
        {{ csrf_field() }}
        <div class="tab-content">

            @include('candidato._dadosPessoais')

            @include('candidato._experienciaProfissional')

            @include('candidato._formacaoCreate')

        </div>
</form>          

@endsection