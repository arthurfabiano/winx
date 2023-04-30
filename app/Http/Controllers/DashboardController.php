<?php

namespace App\Http\Controllers;

use App\Mail\SendOrcamento;
use App\Models\Orcamento;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    /**
     * TODO Refazer o nome desta funcao provavelmente vai ser um get ou apenas show ou pode ser invokable
     * @param Orcamento $orcamento
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function showDashboard(Orcamento $orcamento)
    {
        $dadosOrcamento = $orcamento->load(['user', 'address']);

        Mail::to($dadosOrcamento['email_contato'])->send(new SendOrcamento($dadosOrcamento));

        return view('dashboard', compact('dadosOrcamento'));
    }
}
