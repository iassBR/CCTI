<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperienciaProfissionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiencias_profissionais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_empresa');
            $table->string('data_inicio');
            $table->string('data_fim');
            $table->string('cargo');
            $table->string('descricao');
            $table->integer('candidato_id');
            $table->foreign('candidato_id')->references('id')->on('candidatos')->onDelete('cascade');
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
        Schema::dropIfExists('experiencias_profissionais');
    }
}
