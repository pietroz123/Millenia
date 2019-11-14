<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->double('preco');
            $table->double('comissao');
            $table->integer('tempo_execucao_em_minutos');
            $table->integer('pontos');
            $table->integer('duracao_em_dias');
            $table->boolean('enviar_notificacao_cliente');
            $table->boolean('ativo');
            $table->text('observacoes')->nullable();
            // $table->boolean('pode_entrar_em_pacote');
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
        Schema::dropIfExists('servicos');
    }
}
