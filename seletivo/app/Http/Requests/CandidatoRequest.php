<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CandidatoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

     public function messages(){
         return [
             'nome.required'=>'Informe o seu nome',
             'nome.min'=>'O nome deve ter ao menos 10 caracteres',
             'nome.max'=>'O nome deve ter no máximo 50 caracteres',
             'cpf.required'=>'Informe o seu CPF',
             'rg.required'=>'Informe o seu RG',
             'sexo.required'=>'Informe o seu SEXO',
             'data_nascimento.required'=>'Informe a sua data de nascimento ',
             'estado_civil.required'=>'Informe o seu estado civil ',
             'cor_raca.required'=>'Informe a sua cor/raça ',
             'nacionalidade.required'=>'Informe a sua nacionalidade ',
             'nacionalidade.min'=>'A nacionalidade deve ter ao menos 8 caracteres',
             'nacionalidade.max'=>'A nacionalidade deve ter no máximo 20 caracteres',
             'naturalidade.required'=>'Informe a sua naturalidade ',
             'naturalidade.min'=>'A naturalidade deve ter ao menos 4 caracteres',
             'naturalidade.max'=>'A naturalidade deve ter no máximo 20 caracteres',
             'email.required'=>'Informe o seu email',
             'email.min'=>'O email deve ter ao menos 10 caracteres',
             'email.max'=>'O email deve ter no máximo 40 caracteres',
             'email.unique'=>'O email já é cadastrado!',
             'idade.required'=>'Informe a sua idade ',
             'idade.min'=>'A idade deve ter ao menos 2 caracteres',
             'idade.max'=>'A idade deve ter no máximo 3 caracteres',

             'cep.required'=>'Informe o CEP ',
             'uf.required'=>'Informe o ESTADO/UF ',
             'cidade.required'=>'Informe a CIDADE ',
             'cidade.min'=>'O campo CIDADE deve ter ao menos 4 caracteres',
             'cidade.max'=>'O campo CIDADE deve ter no máximo 20 caracteres',
             'complemento.required'=>'Informe o COMPLEMENTO ',
             'complemento.min'=>'O campo COMPLEMENTO deve ter ao menos 4 caracteres',
             'complemento.max'=>'O campo COMPLEMENTO deve ter no máximo 50 caracteres',
             'bairro.required'=>'Informe o BAIRRO ',
             'bairro.min'=>'O campo BAIRRO deve ter ao menos 4 caracteres',
             'bairro.max'=>'O campo BAIRRO deve ter no máximo 30 caracteres',
             'logradouro.required'=>'Informe o LOGRADOURO/RUA',
             'logradouro.min'=>'O campo LOGRADOURO/RUA deve ter ao menos 6 caracteres',
             'logradouro.max'=>'O campo LOGRADOURO/RUA deve ter no máximo 30 caracteres',
             'num.required'=>'Informe o NÚMERO ',
             'num.min'=>'O campo NÚMERO deve ter ao menos 1 caracteres',
             'num.max'=>'O campo NÚMERO deve ter no máximo 5 caracteres',


             'experiencias.*.nome_empresa.required' => 'Informe o nome da empresa',
             'experiencias.*.data_inicio.required' => 'Informe a data de início',
             'experiencias.*.data_fim.required' => 'Informe a data de término',
             'experiencias.*.cargo.required' => 'Informe o cargo',
             'experiencias.*.descricao.required' => 'Informe a descrição do cargo'
             

         ];
     }
     
    public function rules()
    {       
        return [
            'nome'=>'required|min:10|max:50',
            'cpf'=>'required|min:14|max:14|unique:candidatos',
            'rg'=>'required|min:7|max:9|unique:candidatos',
            'sexo'=>'required',            
            'data_nascimento'=>'required',
            'estado_civil'=>'required',
            'cor_raca'=>'required',
            'nacionalidade'=>'required|min:8|max:20',
            'naturalidade'=>'required|min:4|max:20',
            'email'=>'required|min:10|max:40',
            'idade'=>'required|min:2|max:3',

            'cep'=>'required',
            'uf'=>'required',
            'cidade'=>'required|min:4|max:20',
            'complemento'=>'required|min:4|max:50',
            'bairro'=>'required|min:4|max:30',
            'logradouro'=>'required|min:6|max:30',
            'num'=>'required|min:1|max:5',
            
            'experiencias.*.nome_empresa'=>'required',
            'experiencias.*.data_inicio'=>'required',
            'experiencias.*.data_fim'=>'required',
            'experiencias.*.cargo'=>'required',
            'experiencias.*.descricao'=>'required',

        ];
    }
}
