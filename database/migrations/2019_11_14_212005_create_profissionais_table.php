<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfissionaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profissionais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('cpf', 14)->unique();
            $table->string('rg', 12)->unique();
            $table->string('telefone_celular', 15);
            $table->string('telefone_residencial', 14)->nullable();
            $table->bigInteger('id_cidade')->unsigned();
            $table->string('cep', 9);
            $table->string('bairro');
            $table->string('rua');
            $table->integer('numero_rua');
            $table->string('complemento_rua')->nullable();
            $table->time('horario_entrada');
            $table->time('horario_saida');
            $table->string('cor_agenda', 7);
            $table->timestamps();
        });
        Schema::table('profissionais', function (Blueprint $table) {
            $table->foreign('id_cidade')->references('id')->on('cidades')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profissionais');
    }
}
