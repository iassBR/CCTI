@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Seletivos</div>
                    <div class="panel-body">

                <div class="row">
                <div class="col-md-12">
                <table class="table table-bordered">
                    <tbody>
                        @foreach ($seletivos as $seletivo)
                            <tr>
                                <td>{{$seletivo->nomeSeletivo}}</td>                                
                                <td>
                                    <a href="{{route('seletivos.show',$seletivo->id)}}"><button type="button" class="btn btn-primary">Detalhes</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                    
                        
                    </div>
               

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection