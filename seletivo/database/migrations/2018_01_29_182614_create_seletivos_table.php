<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeletivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seletivos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomeSeletivo');
            $table->string('dataInicio');
            $table->string('dataTermino');
            $table->string('tempoExperiencia');      
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
        Schema::dropIfExists('seletivos');
    }
}