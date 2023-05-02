<?php

namespace Tests\Feature;

use App\Models\Address;
use App\Models\Orcamento;
use App\Models\User;
use App\Services\OrcamentoService;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class OrcamentoTest extends TestCase
{
    /**
     * @return void
     */
    public function testCreateBudget()
    {
        $budget = [
            "nome_cliente" => "Teste API",
            "email_contato" => "teste@api.com.br",
            "telefone" => 3112345678,
            "navegador_web" => "firefox",
            "paginas_web" => 1,
            "login_web" => "sim",
            "pagamento_web" => "sim",
            "plataforma_mobile" => "android",
            "quantidade_tela_mobile" => 1,
            "login_mobile" => "sim",
            "pagamento_mobile" => "sim",
            "email" => "teste@api.com.br",
            "password" => Hash::make(12345678),
            "plataforma_desktop" => "linux",
            "quantidade_telas_desktop" => 1,
            "impressora_desktop" => 1,
            "licenca_desktop" => "sim"
        ];

        $address = [
            "cep" => 31500200,
            "logradouro" => "Rua teste api",
            "bairro" => "Céu Azul",
            "cidade" => "São Paulo",
            "estado" => "SP"
        ];

        $user = [
            "name" => "Test API",
            "email" => "teste@api.com.br",
            "password" => "12345678"
        ];

        $address = Address::create($address);
        $user = User::create($user);

        $budget['user_id'] = $user->id;
        $budget['address_id'] = $address->id;

        $budget = Orcamento::create($budget);

        $this->assertDatabaseHas('orcamentos', [
            'id' => $budget->id
        ]);
    }

    /**
     * @return void
     */
    public function testDeleteBudget()
    {
        $orcamento = Orcamento::find(9);
        $orcamento->forceDelete($orcamento);

        $this->assertDatabaseMissing('orcamentos', [
            'id' => $orcamento->id
        ]);
    }

    /**
     * @return void
     */
    public function testFindBudget()
    {
        $orcamento = Orcamento::find(10);

        $this->assertEquals(10,$orcamento->id);
    }
}
