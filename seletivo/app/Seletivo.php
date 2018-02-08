<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Candidato;
class Seletivo extends Model
{
    
    protected $fillable = [
        'nomeSeletivo','dataInicio','dataTermino','tempoExperiencia','cargoDesejado'
    ];

    
    public function candidato(){
        return $this->hasOne('App\Candidato','candidato_id');
    }
}

