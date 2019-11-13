<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('email');
            $table->bigInteger('id_cidade')->unsigned();
            $table->bigInteger('id_estado')->unsigned();
            $table->string('cep');
            $table->string('bairro');
            $table->string('rua');
            $table->string('complemento_rua')->nullable();
            $table->string('telefone_celular');
            $table->string('telefone_residencial')->nullable();
            $table->integer('pontuacao')->default(0);
            $table->bigInteger('id_profissao')->unsigned();
            $table->boolean('deseja_notificacao');
            $table->timestamps();
        });
        Schema::table('clientes', function (Blueprint $table) {
            $table->foreign('id_profissao')->references('id')->on('profissoes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_cidade')->references('id')->on('cidades')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_estado')->references('id')->on('estados')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
