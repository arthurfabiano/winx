<?php

namespace App\Http\Controllers;

use App\Models\Orcamento;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showDashboard(Orcamento $orcamento)
    {
        $dadosOrcamento = $orcamento->load(['user', 'address']);

        return view('dashboard', compact('dadosOrcamento'));
    }
}
