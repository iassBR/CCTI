@extends('layouts.app')
@section('content')
<div class="panel panel-default">
      <div class="panel-heading">Remover o Documento</div>
        <div class="panel-body">
            <form method="post" action="{{route ('documentos.destroy', $documento->id)}}">
            <input type="hidden" name="_method" value="DELETE">
            {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <h4>Tem certeza que deseja remover o Documento?</h4>
                        <hr>
                        <h4>Sobre o documento</h4>
                        <p>Descrição: {{$documento->nome_documento}}</p>
                        
                    </div>
                </div>
                <button type="submit" class="btn btn-danger">Remover</button>
                <a href="{{ url()->previous() }}" class="btn btn-default">Cancelar</a>
            </form>
        </div>
    </div>
</div>
@endsection