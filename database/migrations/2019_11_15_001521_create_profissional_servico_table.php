<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfissionalServicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profissional_servico', function (Blueprint $table) {
            $table->bigInteger('id_profissional')->unsigned();
            $table->bigInteger('id_servico')->unsigned();
            $table->primary(['id_profissional', 'id_servico']);
        });
        Schema::table('profissional_servico', function (Blueprint $table) {
            $table->foreign('id_profissional')->references('id')->on('profissionais')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('profissional_servico');
    }
}
