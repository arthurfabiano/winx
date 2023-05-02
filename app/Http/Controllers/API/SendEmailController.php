<?php

namespace App\Http\Controllers\API;

use App\Exceptions\ApiException;
use App\Exceptions\NotFoundApiException;
use App\Http\Controllers\Controller;
use App\Models\Orcamento;
use App\Services\DashboardService;
use App\Services\OrcamentoService;


class SendEmailController extends Controller
{
    protected $orcamentoService;
    protected $dashboadService;

    public function __construct(OrcamentoService $orcamentoService, DashboardService $dashboadService)
    {
        $this->orcamentoService = $orcamentoService;
        $this->dashboadService = $dashboadService;
    }

    public function sendEmailBudget(int $orcamento)
    {
        try {
            $budget = Orcamento::find($orcamento);
            if (!$budget) throw new NotFoundApiException("Nenhum orcamento cadastrado para esse id.");

            $this->dashboadService->sendEmail($budget);

            $result = [
                'message' => 'Email enviado com sucesso!',
                'status' => 200
            ];
        }catch (ApiException $e) {
            $result = [
                'message' => $e->getMessage(),
                'status' => $e->getStatus()
            ];
        }

        return response()->json($result);
    }

}
