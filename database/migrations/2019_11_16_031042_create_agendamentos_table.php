<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_servico')->unsigned();
            $table->bigInteger('id_profissional')->unsigned();
            $table->bigInteger('id_cliente')->unsigned();
            $table->string('titulo');
            $table->dateTime('inicio');
            $table->dateTime('fim');
            $table->text('observacoes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('agendamentos', function (Blueprint $table) {
            $table->foreign('id_servico')->references('id')->on('servicos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_profissional')->references('id')->on('profissionais')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendamentos');
    }
}
