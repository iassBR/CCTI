<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Escolaridade;
class Cargo extends Model
{
    
    protected $fillable = ['nomeCargo','tempoExperiencia','escolaridade_id'];

    public function seletivos(){
        return $this->belongsToMany(Seletivo::class);
    }
    
    public function escolaridades(){
        return $this->belongsTo('App\Escolaridade','escolaridade_id');
    }

    public function candidatos(){
        return $this->belongsToMany(Candidatos::class);
    }


}