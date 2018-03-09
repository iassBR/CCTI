@extends('layouts.form')

@section('corpo')
<form  method="post" action="{{ route('candidatos.update',$candidato->id) }}">
{{ csrf_field() }}
{{ method_field('PUT') }}
<div class="tab-content">

    @include('candidato._dadosPessoais')

    @include('candidato._experienciaProfissional')

    @include('candidato._formacaoEdit')

</div>
</form>          

             

@endsection