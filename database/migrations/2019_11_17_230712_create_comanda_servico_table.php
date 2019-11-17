<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComandaServicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comanda_servico', function (Blueprint $table) {
            $table->bigInteger('id_comanda')->unsigned();
            $table->bigInteger('id_servico')->unsigned();
            $table->primary(['id_comanda', 'id_servico']);
        });
        Schema::table('comanda_servico', function (Blueprint $table) {
            $table->foreign('id_comanda')->references('id')->on('comandas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_servico')->references('id')->on('servicos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comanda_servico');
    }
}
