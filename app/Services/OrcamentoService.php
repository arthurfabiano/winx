<?php

namespace App\Services;

use App\Models\Address;
use App\Models\Orcamento;
use App\Models\User;
use App\Repositories\OrcamentoRepository;
use Illuminate\Support\Facades\Http;

class OrcamentoService
{
    protected $orcamentoRepository;
    public function __construct(OrcamentoRepository $orcamentoRepository)
    {
        $this->orcamentoRepository = $orcamentoRepository;
    }
    public function orgamento($orcamento, $address, $user)
    {
        $address = Address::create($address);
        $user = User::create($user);

        $orcamento['user_id'] = $user->id;
        $orcamento['address_id'] = $address->id;

        $orcamento = $this->orcamentoRepository->setOrcamento($orcamento);

        return $orcamento;
    }
}
