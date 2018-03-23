@extends('layouts.form')

@section('corpo')
    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif
<form  method="post" action="{{ route('candidatos.store') }}">
        {{ csrf_field() }}
        <div class="tab-content">

            @include('candidato._dadosPessoais')

            @include('candidato._experienciaCreate')

            @include('candidato._formacaoCreate')

        </div>
</form>          

@endsection