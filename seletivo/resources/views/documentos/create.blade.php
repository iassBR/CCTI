@extends('layouts.app')
<style>
    .panel-default{
        width: 500px;
        height:290px;       
        right:350px;
        position: absolute;
        border-style: solid 60px black;
        border-radius:10px 10px;             
    }
    .panel-heading{
           
    }
    label{
        font-size: 20px;
    }
    #panel-head{
        background-color: #B0E0E6;
        text-align: center;
        font-size: 30px;    
    }
    button{
        position:
    }
    .botoes{
        padding: 10px;
    }
    .form-div{
        margin-top: 5px;

    }
    .input-label{
        background-color: #009688;
        color: #fff;
        padding: 15px;
        font-size: 15px;
        transition: 0.3s;

    }
    
    
</style>
@section('content')
{{--  .fas{
        margin-right: 10px;
    }
    .input-label:hover{
        background: #26a69a;
        cursor: pointer;
    }
    #documento{
        display: none;
    }  --}}
<form method="post" action="{{route('documentos.store')}}" enctype="multipart/form-data">
   {!! csrf_field() !!}

     @if (session('erro'))
      <div class="alert alert-danger">
          {{ session('erro') }}
      </div>
    @endif
    <div class="panel panel-default">
        {{--  <div id= "panel-head" class="panel panel-heading">Upload Documento</div>  --}}
        <div class="panel panel-group">
            <div class="panel panel-primary">
                {{--  <h2 value='{{$seletivo->id}}'>{{$seletivo->nome_seletivo}}</h2>  --}}
                <div class="panel-heading">
                    <label >Upload Documento</label>
                </div>
                    <label for="titulo" >Titulo</label>
                <div class="panel-body">
                    <input name="titulo" type="text" class="form-control" 
                    id="titulo" placeholder="Titulo">
                </div>    
                    <label for="documento">Documento</label>
                <div class="panel-body form-div">
                      
                    <form>
                        <label for="documento" class="input-label"><i class="fas fa-upload"></i>Selecione o Documento</label>
                        <input type="file" id="documento" name="documento" class="file">                       
                        <input type="hidden" name="seletivo_id" value="{{$seletivo->id}}">
                    </form>
                     
                </div>
                <script src="create.js"></script> 
                <div class="botoes">
                    <button type="submit" class="btn btn-primary" data-loading-text="Salvando...">Salvar</button>
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Cancelar</a>  
                </div>  
            </div>
        </div>
        
        
    </div>
</form>
@endsection