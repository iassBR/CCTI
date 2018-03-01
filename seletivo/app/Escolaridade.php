<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cargo;
class Escolaridade extends Model
{
    protected $fillable =[
        "tipo"
    ];
    public function cargos(){
        return $this->hasMany('App\Cargo','escolaridade_id');
    }
    
    public function seletivos(){
        return $this->belongsToMany(Seletivo::class);
    }
    
}