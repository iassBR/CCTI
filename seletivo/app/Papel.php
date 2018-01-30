<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Permissao;
class Papel extends Model
{
    protected $table = 'papeis';
    protected $fillable = ['nome', 'descricao'];   

    public function users(){
        return $this->hasOne('App\User','user_id');
    }

    public function permissoes(){
        return $this->belongsToMany('App\Permissao');
    }
}