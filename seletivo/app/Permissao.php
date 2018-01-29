<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Papel;
class Permissao extends Model
{
    protected $table = 'permissoes';
    protected $fillable = ['nome', 'descricao'];  


    public function papeis(){
        return $this->belongsToMany('App\Papel');
    }

    
}