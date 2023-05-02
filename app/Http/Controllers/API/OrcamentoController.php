<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
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

    /**
     * @param Request $request
     * @param Orcamento|null $orcamento
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(Request $request, Orcamento $orcamento = null)
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
        $pageOrcamento = $this->orcamentoService->listOrcamento($orcamento, $options);
        return OrcamentoResource::collection($pageOrcamento);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
