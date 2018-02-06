<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cep');
            $table->string('uf');
            $table->string('cidade');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('logradouro');
            $table->string('num');

            //$table->integer('user_id')->unsigned()->nullable(); 
            //$table->integer('canidato_id')->unsigned()->nullable(); 
            
           // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
           
            //$table->foreign('candidato_id')->references('id')->on('candidatos')->onDelete('cascade');
            
            $table->timestamps();     

        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');    
            $table->integer('endereco_id')->unsigned(); 
            $table->foreign('endereco_id')->references('id')->on('enderecos')->onDelete('cascade');
            $table->rememberToken();
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
       
        
        Schema::dropIfExists('users');
        Schema::dropIfExists('enderecos');
    }
}
