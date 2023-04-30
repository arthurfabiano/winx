<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class CepService
{
    public function consultar(string $cep)
    {
        $response = Http::get("https://viacep.com.br/ws/{$cep}/json/");

        return $response;
    }

    public function validar(string $cep)
    {
        $response = Http::get("https://viacep.com.br/ws/{$cep}/json/");

        $endereco = $response->json();

        return !isset($endereco['erro']);
    }
}
