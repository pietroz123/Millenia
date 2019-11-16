<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacoteServicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacote_servico', function (Blueprint $table) {
            $table->bigInteger('id_pacote')->unsigned();
            $table->bigInteger('id_servico')->unsigned();
            $table->primary(['id_pacote', 'id_servico']);
        });
        Schema::table('pacote_servico', function (Blueprint $table) {
            $table->foreign('id_pacote')->references('id')->on('pacotes')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('pacote_servico');
    }
}
