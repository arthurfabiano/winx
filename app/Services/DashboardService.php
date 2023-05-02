<?php

namespace App\Services;

use App\Jobs\SendEmailBudget;

class DashboardService
{
    public function sendEmail($orcamento)
    {
        try {
            $dadosOrcamento = $orcamento->load(['user', 'address']);
            $dadosOrcamento['url'] = 'http:localhost:8989/login';

            // Mail::to($dadosOrcamento['email_contato'])->send(new SendOrcamento($dadosOrcamento));
            SendEmailBudget::dispatch($dadosOrcamento)->delay(now()->addSeconds('5'));

            return $dadosOrcamento;
        } catch (\Exception $exception) {
            throw new \Exception("Error ao enviar o email!");
        }
    }
}
