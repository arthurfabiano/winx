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

    /**
     * @param Orcamento $orcamento
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Orcamento $orcamento)
    {
        $dadosOrcamento = $this->dashboadService->sendEmail($orcamento);

        return view('dashboard', compact('dadosOrcamento'));
    }
}
