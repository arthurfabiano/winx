<?php

namespace App\Http\Controllers\API;

use App\Exceptions\ApiException;
use App\Http\Controllers\Controller;
use App\Http\Requests\API\APIOrcamentoRequest;
use App\Http\Resources\OrcamentoResource;
use App\Models\Orcamento;
use App\Services\OrcamentoService;
use Illuminate\Http\Request;

class OrcamentoController extends Controller
{
    protected $orcamentoService;

    public function __construct(OrcamentoService $orcamentoService)
    {
        $this->orcamentoService = $orcamentoService;
    }


    public function index(Request $request)
    {
        $options = [
            'filter' => [],
            'perPage' => $request->per_page ?? 10,
            'page' => $request->page ?? 1,
            'search' => $request->search ?? null
        ];
        if ($request->id) $options['filter']['id'] = $request->id;
        if ($request->nome_cliente) $options['filter']['nome_cliente'] = $request->nome_cliente;
        if ($request->email_contato) $options['filter']['email_contato'] = $request->email_contato;
        if ($request->column) $options['order'][$request->column] = $request->order;

        //
        $pageOrcamento = $this->orcamentoService->listBudget($options);
        return OrcamentoResource::collection($pageOrcamento);
    }

    public function store(Request $request)
    {
        $orcamento = $this->orcamentoService->prepareBudget($request);
        $address = $this->orcamentoService->prepareAddress($request);
        $user = $this->orcamentoService->prepareUser($request);

        $orcamento = $this->orcamentoService->createBudget($orcamento, $address, $user);

        $result = [
            'message' => 'Registro cadastro com sucesso!',
            'data' => new OrcamentoResource($orcamento),
            'status' => 200
        ];

        return response()->json($result);
    }

    public function update(APIOrcamentoRequest $request, Orcamento $orcamento)
    {
        $data = [];
        if ($request->nome_cliente) $data['nome_cliente'] = $request->nome_cliente;
        if ($request->email_contato !== null) $data['email_contato'] = $request->email_contato;
        if ($request->telefone !== null) $data['telefone'] = $request->telefone;
        if ($request->navegador_web) $data['navegador_web'] = $request->navegador_web;
        if ($request->paginas_web !== null) $data['paginas_web'] = $request->paginas_web;
        if ($request->login_web !== null) $data['login_web'] = $request->login_web;
        if ($request->pagamento_web) $data['pagamento_web'] = $request->pagamento_web;
        if ($request->plataforma_mobile !== null) $data['plataforma_mobile'] = $request->plataforma_mobile;
        if ($request->quantidade_tela_mobile !== null) $data['quantidade_tela_mobile'] = $request->quantidade_tela_mobile;
        if ($request->login_mobile) $data['login_mobile'] = $request->login_mobile;
        if ($request->pagamento_mobile !== null) $data['pagamento_mobile'] = $request->pagamento_mobile;
        if ($request->plataforma_desktop !== null) $data['plataforma_desktop'] = $request->plataforma_desktop;
        if ($request->quantidade_telas_desktop) $data['quantidade_telas_desktop'] = $request->quantidade_telas_desktop;
        if ($request->impressora_desktop !== null) $data['impressora_desktop'] = $request->impressora_desktop;
        if ($request->licenca_desktop !== null) $data['licenca_desktop'] = $request->licenca_desktop;

        //
        $pageOrcamento = $this->orcamentoService->updateBudget($orcamento, $data);
        return new OrcamentoResource($pageOrcamento);
    }


    public function destroy(Orcamento $orcamento)
    {
        $this->orcamentoService->deleteBudget($orcamento);
        $result = [
            'message' => 'Registro deletado com sucesso!',
            'data' => new OrcamentoResource($orcamento),
            'status' => 204
        ];
        return response()->json($result);
    }
}
