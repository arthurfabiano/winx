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
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('address_id')->constrained()->cascadeOnDelete();

            $table->string("nome_cliente");
            $table->string("email_contato");
            $table->char("telefone", 10);

            $table->string("navegador_web", 50);
            $table->integer("paginas_web");
            $table->string("login_web", 3);
            $table->string("pagamento_web", 3);

            $table->string("plataforma_mobile");
            $table->integer("quantidade_tela_mobile");
            $table->string("login_mobile", 3);
            $table->string("pagamento_mobile", 3);

            $table->string("plataforma_desktop");
            $table->integer("quantidade_telas_desktop");
            $table->string("impressora_desktop", 3);
            $table->string("licenca_desktop", 3);

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
