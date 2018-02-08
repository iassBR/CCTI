<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escolaridade extends Model
{
    protected $fillable =[
        "tipo"
    ];
    public function seletivos(){
        return $this->hasMany('App\Seletivo','escolaridade_id');
    }
    public function cargo(){
        return $this->hasMany('App\Cargos','escolaridade_id');
    }
}
