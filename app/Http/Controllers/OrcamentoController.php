<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrcamentoRequest;
use App\Models\Address;
use App\Models\Orcamento;
use App\Models\User;
use App\Services\OrcamentoService;
use Illuminate\Support\Facades\Hash;

class OrcamentoController extends Controller
{    protected $orcamentoService;

    public function __construct(OrcamentoService $orcamentoService)
    {
        $this->orcamentoService = $orcamentoService;
    }

    private function orcamento($request)
    {
        return $request->only([
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
    }

    private function address($request)
    {
        return $request->only([
            "cep",
            "logradouro",
            "bairro",
            "cidade",
            "estado"]);
    }

    private function user($request)
    {
        $user = $request->only([
            "name",
            "email",
            "password"]);

        $user['password'] = Hash::make($user['password']);

        return $user;

    }
    public function store(OrcamentoRequest $request)
    {
        $orcamento = $this->orcamento($request);
        $address = $this->address($request);
        $user = $this->user($request);

        $orcamento = $this->orcamentoService->orgamento($orcamento, $address, $user);

        return redirect()->route('show.orcamento', $orcamento);
    }

    public function downloadPDF(Orcamento $orcamento)
    {
        $dadosOrcamento = $orcamento->load(['user', 'address'])->toArray();

        $pdf = \PDF::loadView('pdf.orcamento', compact('dadosOrcamento'));

        return $pdf->download("Orcamento - {$dadosOrcamento['nome_cliente']}.pdf");
    }
}
