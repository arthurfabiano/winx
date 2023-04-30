<?php

namespace App\Repositories;

use App\Models\Address;
use App\Models\Orcamento;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class OrcamentoRepository
{
    public function setOrcamento($dada)
    {
        return Orcamento::create($dada);
    }
}
