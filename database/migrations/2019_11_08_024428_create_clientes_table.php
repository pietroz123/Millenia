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
            $table->string('rua');
            $table->integer('numero_rua');
            $table->string('complemento_rua');
            $table->string('cep');
            $table->string('bairro');
            $table->string('telefone_celular');
            $table->string('telefone_residencial');
            $table->integer('pontuacao')->default(0);
            $table->bigInteger('id_profissao')->unsigned();
            $table->timestamps();
        });
        Schema::table('clientes', function (Blueprint $table) {
            $table->foreign('id_profissao')->references('id')->on('profissoes')->onDelete('cascade')->onUpdate('cascade');
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
