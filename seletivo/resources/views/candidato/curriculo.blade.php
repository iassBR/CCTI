<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Currículo do Candidato</title>
        <style>
            img{
                position: absolute;
            }
            body{
                font-size: 14px;
            }
            table{
                
                border-collapse: collapse;
                width: 100%;                         
            }
            td,th{
                border: 1px solid black; 
                padding: 2px;
            }
            h3,th{
                text-align:center;
            }
            p{
                text-align:center;
            }
            .termo{
                font-size: 10px;
                text-align: justify;
            }
            .esquerda{
                padding: -5px;
                text-align: left;
            }
        </style>
    </head>
    <body>
                
        <img src="{{public_path('imagem/logo-ccti.png')}}" width="100" height="50"   >
        <h3>CURRICULO DO CANDIDATO</h3>  
        <br>        
     <b>CARGOS PRETENDIDOS</b>            
    <table class="table table-bordered">
        <thead>
        </thead>
        <tbody>
        <tr>
            Cargo Pretendido:
            
            @foreach($candidato->cargos as $cargo)
            <td>
                    Cargo: {{$cargo->nomeCargo}}
                
            </td>
            <td>
    
                   Escolaridade:  {{$cargo->escolaridade->tipo}}
            </td>
            @endforeach
        </tr>
        </tbody>
    
    </table>
    <br>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th colspan="2">DADOS PESSOAIS</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Nome: {{$candidato->nome}}</td>
            <td>E-mail: {{$candidato->email}}</td>
        </tr>
        <tr>
            <td>RG: {{$candidato->rg}}</td>
            <td>CPF: {{$candidato->cpf}} </td>
        </tr>
        <tr>
            <td>Idade: {{$candidato->idade}}</td>
            <td>Data Nascimento: {{$candidato->data_nascimento}}</td>
        </tr>
        <tr>
            <td>Sexo: {{$candidato->sexo}}</td>
            <td>Estado Civil: {{$candidato->estado_civil}}</td>
        </tr>
        <tr>
            <td>Nacionalidade: {{$candidato->nacionalidade}}</td>
            <td>Naturalidade: {{$candidato->naturalidade}}</td>
        </tr>
        </tbody>
    </table>
    <br>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th colspan="3">ENDEREÇO</th>
        </tr>
        </thead>
        <tbody>
         
        <tr>
            <td colspan="2">Endereço: {{$candidato->endereco->logradouro}}</td>
            <td >Número: {{$candidato->endereco->num}}</td>
        </tr>
        <tr>
            <td>Bairro: {{$candidato->endereco->bairro}}</td>
            <td>Estado: {{$candidato->endereco->uf}}</td>
            <td>Cidade: {{$candidato->endereco->cidade}}</td>
        </tr>
        <tr>   
            <td>CEP: {{$candidato->endereco->cep}}</td>
            <td colspan="2">Complemento: {{$candidato->endereco->complemento}}</td>
        </tr>
        </tbody>
    </table>
    <br>
    @foreach($candidato->formacoes as $formacao)  
    <table class="table table-bordered">
<<<<<<< HEAD
          
        <thead>
            <tr>
                <th colspan="2">CURSO(S)</th>
            </tr>
        </thead> 
        @foreach($candidato->formacoes as $formacao)
        <tbody>
            <tr>
                <td >Grau:{{ $formacao->tipo }} </td>
                <td >Instituição: {{ $formacao->instituicao }} </td>
               
            </tr>
       
            
            <tr>
                <td>Nome Curso: {{ $formacao->nome_curso }} </td>
                <td>Ano de Conclusão: {{ $formacao->ano_conclusao }} </td>
            </tr>
            
        
        @endforeach
        </tbody>
=======
         
        <thead>
        <tr>
            <th colspan="2">CURSO</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td >Escolaridade:{{$formacao->tipo}} </td>
            <td >Instituição:{{$formacao->instituicao}} </td>
        </tr>
        <tr>
            <td>Nome Curso: {{$formacao->nome_curso}}</td>
            <td>Ano de Conclusão: {{$formacao->ano_conclusao}} </td>
        </tr>
        </tbody>
        
>>>>>>> 857811935ce8e5d010824474dce256699b09db62
    </table>
    @endforeach
    <br>
    <table class="table table-bordered">
        @foreach($candidato->experiencias as $experiencia)
        <thead>
        <tr>
            <th colspan="2">EXPERIÊNCIA PROFISSIONAL</th>
        </tr> 
        </thead>
        @foreach($candidato->experiencias as $experiencia)
        <tbody>
        <tr>
<<<<<<< HEAD
            <td colspan="2">Empresa: {{ $experiencia->nome_empresa }} </td>
            
        </tr>
        <tr>
            <td >Data Inicio: {{ $experiencia->data_inicio }} </td>
            <td>Data Término: {{ $experiencia->data_fim }} </td>
        </tr>
        <tr>
            <td >Cargo: {{ $experiencia->cargo }} </td>
            <td>Descrição: {{ $experiencia->descricao }} </td>
=======
            <td colspan="2">Empresa:{{$experiencia->nome_empresa}} </td>
            
        </tr>
        <tr>
            <td >Data Inicio: {{$experiencia->data_inicio}}</td>
            <td>Data Término:{{$experiencia->data_fim}} </td>
        </tr>
        <tr>
            <td >Cargo: {{$experiencia->cargo}}</td>
            <td>Descrição: {{$experiencia->descricao}}</td>
>>>>>>> 857811935ce8e5d010824474dce256699b09db62
        </tr>
        @endforeach
        </tbody>
        @endforeach
    </table>
    
    </body>       
</html>>