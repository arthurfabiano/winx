<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamentos', function (Blueprint $table) {
            $table->id();

            $table->string("nome_cliente");
            $table->string("email_contato");
            $table->char("telefone", 10);
            $table->string("endereco");

            $table->string("navegador_web", 50);
            $table->integer("paginas_web");
            $table->string("login_web");
            $table->string("pagamento_web");

            $table->string("plataforma_mobile");
            $table->integer("quantidade_tela_mobile");
            $table->string("login_mobile");
            $table->string("pagamento_mobile");

            $table->string("email");
            $table->string("password");

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orcamentos');
    }
};
