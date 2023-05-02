<?php

namespace App\Http\Requests\API;

use App\Rules\CepRule;
use App\Services\CepService;
use Illuminate\Foundation\Http\FormRequest;

class APIOrcamentoRequest extends FormRequest
{
    public $cepService;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(CepService $cepService)
    {
        $this->cepService = $cepService;
    }

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
        if ($this->method() == "PUT") {
            return [
                "nome_cliente" => 'min:2',
                "email_contato" => 'string|email|max:255',
                "telefone" => 'nullable',

                "navegador_web" => 'string|max:30',
                "paginas_web" => 'numeric',
                "login_web" => 'string',
                "pagamento_web" => 'string',

                "plataforma_mobile" => 'string|max:30',
                "quantidade_tela_mobile" => 'numeric',
                "login_mobile" => 'string',
                "pagamento_mobile" => 'string',

                "plataforma_desktop" => 'string|max:100',
                "quantidade_telas_desktop" => 'numeric',
                "impressora_desktop" => 'string',
                "licenca_desktop" => 'string',
            ];
        }

        return [
            "nome_cliente" => 'required|min:2',
            "email_contato" => 'required|email',
            "telefone" => 'required|size:10',

            "cep" => ['required', new CepRule($this->cepService)],
            "logradouro" => 'required',
            "bairro" => 'required',
            "cidade" => 'required',
            "estado" => 'required',

            "navegador_web" => 'required',
            "paginas_web" => 'required|numeric',
            "login_web" => 'required',
            "pagamento_web" => 'required',

            "plataforma_mobile" => 'required',
            "quantidade_tela_mobile" => 'required|numeric',
            "login_mobile" => 'required',
            "pagamento_mobile" => 'required',

            "plataforma_desktop" => 'required',
            "quantidade_telas_desktop" => 'required|numeric',
            "impressora_desktop" => 'required',
            "licenca_desktop" => 'required',

            "name" => 'required|string|max:255',
            "email" => 'required|string|email|max:255|unique:users',
            "password" => 'required|string|min:8'
        ];
    }
}
