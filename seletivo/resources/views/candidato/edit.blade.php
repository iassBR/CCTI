@extends('layouts.form')

@section('corpo')

{{ csrf_field() }}
{{ method_field('PUT') }}
<div class="tab-content">

    @include('candidato._dadosPessoaisEdit')
</form>  

    @include('candidato._experienciaEdit')

    @include('candidato._formacaoEdit')

</div>    

@endsection