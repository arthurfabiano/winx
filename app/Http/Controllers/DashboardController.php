<?php

namespace App\Http\Controllers;

use App\Mail\SendOrcamento;
use App\Models\Orcamento;
use App\Models\User;
use App\Services\DashboardService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    protected $dashboadService;

    public function __construct(DashboardService $dashboardService)
    {
        $this->dashboadService = $dashboardService;
    }


    public function showOrcamento(Orcamento $orcamento)
    {
        $dadosOrcamento = $this->sendReportBudget($orcamento);

        return view('dashboard', compact('dadosOrcamento'));
    }

    public function sendReportBudget($budget)
    {
        return $this->dashboadService->sendEmail($budget);
    }
}
