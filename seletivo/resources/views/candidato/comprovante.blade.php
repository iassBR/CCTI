<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Comprovante de Inscrição do Candidato</title>
        <style>
            img{
                position: absolute;
                bottom: 8px;
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
        <h3>FICHA DE INSCRIÇÃO</h3>
        <p>Apresentar essa ficha no ato da entrevista</p>
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
    <table class="table table-bordered">
        <thead>
        <tr>
           <th colspan="3">TERMO DE COMPROMISSO</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td colspan="3" class="termo">1 - Observado o disposto no Regimento Interno, em especial do artigo 29º e parágrafo único, aprovado pela Resolução do CR do CCTI nº 022/86 combinado com art. 44 e Parágrafo único do Decreto Lei nº  61.843 de 05.12.67; Art 29º "Não poderão ser admitdos como servidores do CCTI parentes (consaguíneo ou afim), até o 3º Grau civil: do Presidente ou dos membros, efetivos e suplentes dos Conselhos: Nacional, Fiscal ou Regional do CCTI, bem como de dirigentes de Entidades Sindicais ou Civis do comércio, patronais ou de empregados, da correspondente área territorial. Parágrafo único: A proibição é extensiva nas mesmas condições aos parentes de servidores do CCTI. Parentes: Ascendentes: pai(s); avó(s) e bisavó(s) Descendentes: Cônjuges, filho(s); neto(s) e bisneto(s) Colaterais: irmão(s); primo(s), tio(s) e sobrinho(s). Afins: sogro(a)/nora/genro; padrasto/madrasta e enteado(a), cunhado(s) e avós do cônjuge; e sobrinhos e bisavós do cônjuge. 2 - Declaro minha tácita aceitação das condições estabelecidas pelo CCTI neste processo seletivo, bem como do Comunicado, das quais não poderei, em hipótese alguma, alegar desconhecimento. E que minha participação neste processo seletivo não implica obrigatoriedade em minha contratação, cabendo ao CCTI a avaliação da conveniência e oportunidade de aproveitamento em número estritamente necessário,  respeitada a ordem de classificação das avaliações. Tenho ainda conhecimento que o CCTI poderá revogar ou anular o presente processo seletivo, em decisão motivada, sem que caiba qualquer indenização aos candidatos interessados. Podendo ainda adiar ou suspender os procedimentos do processo seletivo, dando conhecimento aos interessados, se assim exigirem as circunstâncias. E que a inexatidão das informações ou irregularidades nos documentos, verificadas a qualquer tempo, acarretará a nulidade da Contratação, com todas as suas decorrências, sem prejuízo das demais medidas de ordem administrativa, civil ou criminal. Tenho também a informação que os casos não previstos no Comunicado serão analisados e decididos pela Equipe responsável pela realização da seleção de candidatos, não cabendo recursos por parte do candidato. 3 - Declaro que todas as informações contidas neste formulário e no meu currículo constituem a expressão da verdade, e sobre as quais assumo total responsabilidade. Ficando V.Sª autorizada a efetuar qualquer confirmação que achar necessária. Comprometendo-me a entregar esta ficha, juntamente com os documentos comprobatórios do pré-requisito conforme consta no Comunicado. </td>
        </tr>
        <tr>
            <td>Data:{{date('d-m-Y')}} </td>
            <td colspan="2">Assinatura:_______________________________________________________________</td>
        </tr>
        </tbody>
    </table>
            <p>------------------------------------------------------------------------------------</p>
            <p>COMPROVANTE DE INSCRICAO</p>

            <p class="esquerda">Nome:<b>{{$candidato->nome}}</b> CPF::<b>{{$candidato->cpf}}</b></p>
            <p class="esquerda">
                @foreach($candidato->cargos as $cargo)
                Cargo: {{$cargo->nomeCargo}}<br>
                 @endforeach
            </p>
                <p class="esquerda">Data:{{date('d-m-Y')}}:<b></b> </p>
            <p class="esquerda">Assinatura do Candidato:_______________________________________________________________ <p>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>       
            Av Glaycon de Paiva - Mecejana, Boa Vista - RR, 69310-000        
    </body>       
</html>>