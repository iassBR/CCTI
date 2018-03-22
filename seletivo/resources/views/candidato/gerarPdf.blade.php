<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Dados do Usuario</title>
        <style>
            table, th, td {
                            border: 1px solid black;
                            border-collapse: collapse;
                            }
        </style>
    </head>
    <body>
         
        <h1>Candidato</h1>
        <table class="table table-bordered">
                
                    
                            <td>Cargo {{ $seletivo->cargo->nomeCargo }} </td> 

                            <td>Nome : {{$candidatos->nome}}</td>
                            <td>CPF : {{$candidatos->cpf}}</td>
                            <td>Sexo : {{$candidatos->sexo}}</td>
                            <td>RG : {{$candidatos->sexo}}</td>
                            <td>Data Nascimento: {{$candidatos->data_nascimento}}</td>
                            <td>Estado Civil: {{$candidatos->estado_civil}}</td>
                            <td>Raça: {{$candidatos->cor_raca}}</td>                          
                            <td>Nacionalidade: {{$candidatos->nacionalidade}}</td>
                            <td>E-mail: {{$candidatos->email}}</td>
                            <td>Idade: {{$candidatos->idade}}</td>
                            <td>Idade: {{$candidatos->naturalidade}}</td>
                            <td>CEP: {{$candidatos->endereco->cep}}</td>
                            <td>UF: {{$candidatos->endereco->uf}}</td>
                            <td>Cidade: {{$candidatos->endereco->cidade}}</td>
                            <td>Complemento: {{$candidatos->endereco->complemento}}</td>
                            <td>Bairro: {{$candidatos->endereco->bairro}}</td>
                            <td>Logradouro: {{$candidatos->endereco->logradouro}}</td>
                            <td>Numero: {{$candidatos->endereco->num}}</td>
                             
                        </table>   
                        </body>
                    
</html>