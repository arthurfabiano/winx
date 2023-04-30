<?php

namespace App\Services;

use App\Exceptions\Manager\ApiException;
use App\Mail\SendOrcamento;
use App\Models\Orcamento;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class DashboardService
{
    public function sendEmail($orcamento)
    {
        try {
            $dadosOrcamento = $orcamento->load(['user', 'address']);

            Mail::to($dadosOrcamento['email_contato'])->send(new SendOrcamento($dadosOrcamento));

            return $dadosOrcamento;
        } catch (\Exception $exception) {
            throw new \Exception("Error ao enviar o email!");
        }
    }
}
