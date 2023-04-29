<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrcamentoRequest;
use App\Models\Address;
use App\Models\Orcamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function cadastroOrcamento(OrcamentoRequest $request)
    {
        $orcamento = $request->only(["user_id", "nome_cliente", "email_contato", "telefone", "navegador_web",
                  "paginas_web", "login_web", "pagamento_web", "plataforma_mobile", "quantidade_tela_mobile",
                  "login_mobile","pagamento_mobile", "email", "password", "plataforma_desktop",
                  "quantidade_telas_desktop", "impressora_desktop", "licenca_desktop"
        ]);
        $address = $request->only(["cep", "logradouro", "bairro", "cidade", "estado"]);
        $user = $request->only(["name", "email", "password"]);
        $user['password'] = Hash::make($user['password']);

        $address = Address::create($address);
        $orcamento = $address->orcamento()->create($orcamento);
        $orcamento->user()->create($user);

        return redirect()->route('dashboard', $orcamento);
    }
}
