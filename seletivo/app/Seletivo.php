<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Candidato;
class Seletivo extends Model
{
    
    protected $fillable = [
        'nomeSeletivo','dataInicio','dataTermino','tempoExperiencia','cargoDesejado','escolaridade_id'
    ];

    public function escolaridade(){
        return $this->belongsTo('App\Escolaridade','escolaridade_id');
    }
    public function candidato(){
        return $this->hasOne('App\Candidato','candidato_id');
    }
}

