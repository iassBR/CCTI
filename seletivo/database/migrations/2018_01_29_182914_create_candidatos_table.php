<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('candidatos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cpf')->unique();
            $table->string('sexo');
            $table->string('rg');
            $table->string('data_nascimento');
            $table->string('estado_civil');
            $table->string('cor_raca');
            $table->string('nacionalidade');
            $table->string('email');
            $table->string('naturalidade');
            $table->string('idade');
            $table->integer('endereco_id')->unsigned(); 
            $table->foreign('endereco_id')->references('id')->on('enderecos')->onDelete('cascade');
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
        Schema::dropIfExists('candidatos');
    }
}
