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
<<<<<<< HEAD
            $table->string('nomeCargo')->unsigned();
            $table->integer('escolaridade_id')->unsigned();
            $table->integer('escolaridade_id')->references('id')->on('escolaridade')->onDelete('cascade');
=======
            $table->string('nomeCargo');
>>>>>>> 8154dcd23d52940b1e09952e9f43ba66eea031d7
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
        Schema::dropIfExists('cargos');
    }
}
