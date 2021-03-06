<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('formacoes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->string('instituicao');
            $table->string('nome_curso');
            $table->string('ano_conclusao');
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
        Schema::dropIfExists('formacoes');
    }
}
