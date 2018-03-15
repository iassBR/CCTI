<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cargo;
class Endereco extends Model
{
    
    protected $fillable = ['cep','uf','cidade','complemento','bairro', 'logradouro','num'];




    public function candidato(){
        return $this->hasOne('App\Candidato');
    }
    
}
