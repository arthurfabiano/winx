<?php

namespace App\Services;

use App\Exceptions\Manager\ApiException;
use App\Jobs\SendEmailBudget;
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
            $dadosOrcamento['url'] = 'http:localhost:8989/login';

            // Mail::to($dadosOrcamento['email_contato'])->send(new SendOrcamento($dadosOrcamento));
            SendEmailBudget::dispatch($dadosOrcamento)->delay(now()->addSeconds('30'));

            return $dadosOrcamento;
        } catch (\Exception $exception) {
            throw new \Exception("Error ao enviar o email!");
        }
    }
}
