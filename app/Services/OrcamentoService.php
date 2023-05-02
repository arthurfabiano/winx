<?php

namespace App\Services;

use App\Models\Address;
use App\Models\Orcamento;
use App\Models\User;
use App\Repositories\OrcamentoRepository;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class OrcamentoService
{
    protected $orcamentoRepository;
    public function __construct(OrcamentoRepository $orcamentoRepository)
    {
        $this->orcamentoRepository = $orcamentoRepository;
    }

    private function checkForBudgetUpdate(array $data)
    {
        $arrayUpdate = [];

        foreach ($data as $key => $data)
        {
            $arrayUpdate[$key] = $data;
        }

        return $arrayUpdate;
    }

    public function prepareBudget($request)
    {
        return $request->only([
            "nome_cliente",
            "email_contato",
            "telefone",
            "navegador_web",
            "paginas_web",
            "login_web",
            "pagamento_web",
            "plataforma_mobile",
            "quantidade_tela_mobile",
            "login_mobile",
            "pagamento_mobile",
            "email",
            "password",
            "plataforma_desktop",
            "quantidade_telas_desktop",
            "impressora_desktop",
            "licenca_desktop"
        ]);
    }

    public function prepareAddress($request)
    {
        return $request->only([
            "cep",
            "logradouro",
            "bairro",
            "cidade",
            "estado"
        ]);
    }

    public function prepareUser($request)
    {
        $user = $request->only([
            "name",
            "email",
            "password"
        ]);

        $user['password'] = Hash::make($user['password']);

        return $user;

    }

    public function createBudget($orcamento, $address, $user)
    {
        $orcamento = DB::transaction(function () use ($orcamento, $address, $user) {
            $address = Address::create($address);
            $user = User::create($user);

            $orcamento['user_id'] = $user->id;
            $orcamento['address_id'] = $address->id;

            $orcamento = $this->orcamentoRepository->setOrcamento($orcamento);

            return $orcamento;
        });

        return $orcamento;
    }

    public function listBudget(array $op = [])
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

    public function updateBudget(Orcamento $budget, array $data)
    {
        $arrayUpdate = $this->checkForBudgetUpdate($data);

        $budget->update($arrayUpdate);
        return $budget;
    }

    public function deleteBudget(Orcamento $orcamento): void
    {
        $orcamento->delete();
    }
}
