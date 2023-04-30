<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrcamentoRequest;
use App\Models\Address;
use App\Models\Orcamento;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function cadastroOrcamento(OrcamentoRequest $request)
    {
        // TODO: Colocar em uma classe privada
        $orcamento = $request->only([
            "nome_cliente",
            "email_contato",
            "telefone",
            "navegador_web",
            "paginas_web",
            "login_web",
            "pagamento_web",
            "plataforma_mobile",
            "quantidade_tela_mobile",
            "login_mobile",
            "pagamento_mobile",
            "email",
            "password",
            "plataforma_desktop",
            "quantidade_telas_desktop",
            "impressora_desktop",
            "licenca_desktop"
        ]);
        // TODO: Colocar em uma classe privada
        $address = $request->only([
            "cep",
            "logradouro",
            "bairro",
            "cidade",
            "estado"]);
        // TODO: Colocar em uma classe privada
        $user = $request->only([
            "name",
            "email",
            "password"]);

        $user['password'] = Hash::make($user['password']);

        $address = Address::create($address);
        $user = User::create($user);

        $orcamento['user_id'] = $user->id;
        $orcamento['address_id'] = $address->id;

        $data = Orcamento::create($orcamento);

        return redirect()->route('dashboard', $data);
    }
}
