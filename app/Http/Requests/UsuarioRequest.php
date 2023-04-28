<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UsuarioRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "nome_cliente" => 'required|min:2',
            "email_contato" => 'required|email',
            "telefone" => 'required|size:10',
            "endereco" => 'required',

            "navegador_web" => 'required',
            "paginas_web" => 'required|numeric',
            "login_web" => 'required',
            "pagamento_web" => 'required',

            "plataforma_mobile" => 'required',
            "quantidade_tela_mobile" => 'required|numeric',
            "login_mobile" => 'required',
            "pagamento_mobile" => 'required',

            "email" => 'required|email',
            "password" => 'required|min:8'
        ];
    }

    public function validationData()
    {
        $campos = $this->all();

        $campos['telefone'] = str_replace([' ', '(', ')', '-'], '', $campos['telefone']);
        $campos['cep'] = str_replace('-', '', $campos['cep']);

        $this->replace($campos);

        return $campos;
    }
}
