<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeficienciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deficiencias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cid');
            $table->integer('candidato_id')->unsigned();
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
        Schema::dropIfExists('deficiencias');
    }
}
