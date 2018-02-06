<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'enderecos';
    protected $fillable = ['cep','uf','cidade','complemento','bairro', 'logradouro','num'];




    public function user(){
        return $this->belongsTo('App\User','endereco_id');
    }
    
}
