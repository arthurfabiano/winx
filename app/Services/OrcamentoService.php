<?php

namespace App\Services;

use App\Models\Address;
use App\Models\Orcamento;
use App\Models\User;
use App\Repositories\OrcamentoRepository;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

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

    public function listOrcamento(Orcamento $orcamento = null, array $op = [])
    {
        $q = Orcamento::query();

        // order
        $defaultOrder = [
            'nome_cliente' => 'desc',
            'created_at' => 'desc',
        ];
        $order = empty($op['order']) ? $defaultOrder : $op['order'];
        foreach ($order as $field => $dir) {
            $q->orderBy($field, ($dir === 'desc') ? 'DESC' : 'ASC');
        }

        // filter
        foreach ($op['filter'] ?? [] as $field => $value) {
            $q->where($field, $value);
        }

        // search
        if ($searchValue = $op['search'] ?? null) {
            $fields = $op['searchFields'] ?? ['description'];
            $q->where(function ($q) use ($fields, $searchValue) {
                foreach ($fields as $field) {
                    $value = '%' . Str::lower($searchValue) . '%';
                    $q->orWhere($field, 'LIKE', $value);
                }
            });
        }

        return $q->paginate($op['perPage'] ?? 15, ['*'], 'page', $op['page'] ?? 1);
    }
}
