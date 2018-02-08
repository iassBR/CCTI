<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelacionarEscolaridadeCargo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cargos', function(Blueprint $table){
                $table->integer('escolaridade_id')->unsigned();
                $table->foreign('escolaridade_id')->references('id')->on('escolaridades');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cargos', function(Blueprint $table){
            $table->dropForeign('cargos_escolaridade_id_foreign');
            $table->dropColumn('escolaridade_id');
        }
    );
    }
}
