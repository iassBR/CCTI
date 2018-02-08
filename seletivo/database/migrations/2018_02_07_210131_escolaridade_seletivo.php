<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EscolaridadeSeletivo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escolaridade_seletivo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('escolaridade_id')->unsigned();
            $table->foreign('escolaridade_id')->references('id')->on('escolaridades')->onDelete('cascade');

            $table->integer('seletivo_id')->unsigned();
            $table->foreign('seletivo_id')->references('id')->on('seletivos')->onDelete('cascade');
            
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
    }
}
