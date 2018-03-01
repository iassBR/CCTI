<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nomeCargo')->unsigned();
            $table->string('tempoExperiencia');
            $table->timestamps();
        });

        Schema::create('cargo_seletivo', function (Blueprint $table) {
            $table->integer('cargo_id')->unsigned();
            $table->integer('seletivo_id')->unsigned();

            $table->foreign('cargo_id')->references('id')->on('cargos')->onDelete('cascade');
            $table->foreign('seletivo_id')->references('id')->on('seletivos')->onDelete('cascade');

            $table->primary(['cargo_id','seletivo_id']);
        });
        Schema::create('escolaridade_seletivo', function (Blueprint $table) {
            $table->integer('escolaridade_id')->unsigned();
            $table->integer('seletivo_id')->unsigned();

            $table->foreign('escolaridade_id')->references('id')->on('escolaridades')->onDelete('cascade');
            $table->foreign('seletivo_id')->references('id')->on('seletivos')->onDelete('cascade');


            $table->primary(['escolaridade_id','seletivo_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escolaridade_seletivo');
        Schema::dropIfExists('cargo_seletivo');
        Schema::dropIfExists('cargos');  
    }
}
