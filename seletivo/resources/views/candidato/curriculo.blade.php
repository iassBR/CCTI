<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Dados do Usuario</title>
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
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>CARGO PRETENDIDO</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Escolaridade:</td>
        </tr>
        <tr>
            <td>Cargo Pretendido:</td>
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
            <td colspan="2">Endereço: {{$candidatos->endereco->logradouro}}</td>
            <td >Número: {{$candidato->endereco->num}}</td>
        </tr>
        <tr>
            <td>Bairro: {{$candidato->endereco->bairro}}</td>
            <td>Estado: {{$candidato->endereco->uf}}</td>
            <td>Cidade: {{$candidato->endereco->cidade}}</td>
        </tr>
        <tr>   
            <td>CEP: {{$candidatos->endereco->cep}}</td>
            <td colspan="2">Complemento: {{$candidatos->endereco->complemento}}</td>
        </tr>
        </tbody>
    </table>
    <br>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th colspan="2">CURSO(S)</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td >Escolaridade: </td>
            <td >Instituição: </td>
        </tr>
        <tr>
            <td>Nome Curso: </td>
            <td>Ano de Conclusão: </td>
        </tr>
        </tbody>
    </table>
    <br>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th colspan="2">EXPERIÊNCIA PROFISSIONAL</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td colspan="2">Empresa: </td>
            
        </tr>
        <tr>
            <td >Data Inicio: </td>
            <td>Data Término: </td>
        </tr>
        <tr>
            <td >Cargo: </td>
            <td>Descrição: </td>
        </tr>
        </tbody>
    </table>
    
    </body>       
</html>>