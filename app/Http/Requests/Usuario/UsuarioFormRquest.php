<?php

namespace App\Http\Requests\Usuario;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioFormRquest extends FormRequest
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
    public function rules()
    {
        return [
            
            'nome'                 => 'required',
            'cpf'                  => 'required',
            'data_nasc'            => 'required',
            'sexo'                 => 'required',
            'email'                => 'required',
            'telefone'             => 'required',
            'cep'                  => 'required',
            'logradouro'           => 'required',
            'numero'               => 'required',
            'bairro'               => 'required',
            'cidade'               => 'required',
            'uf'                   => 'required',  
        ];
    }
    
    public function messages()
    {
        return [
            
            'nome.required'             => 'O campo Nome Completo é Obrigatório ! ',
            'cpf.required'              => 'O campo Cpf é Obrigatório ! ',
            'data_nasc.required'        => 'O campo Data de Nascimento é Obrigatório ! ',
            'sexo.required'             => 'O campo Sexo é Obrigatório ! ',
            'email.required'            => 'O campo Email é Obrigatório ! ',
            'telefone.required'         => 'O campo Telefone é Obrigatório ! ',
            'cep.required'              => 'O campo Cep é Obrigatório ! ',
            'logradouro.required'       => 'O campo Logradouro é Obrigatório ! ',
            'numero.required'           => 'O campo Numero é Obrigatório ! ',
            'bairro.required'           => 'O campo Bairro é Obrigatório ! ',
            'cidade.required'           => 'O campo Cidade é Obrigatório ! ',
            'uf.required'               => 'O campo UF é Obrigatório ! ',
        ];
    }
}
