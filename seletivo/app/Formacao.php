<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Canidato;
class Formacao extends Model
{
    protected $table = 'formacoes';
    protected $fillable = [
        'tipo','instituicao','nome_curso','ano_conclusao','candidato_id',
    ];

    public function candidato(){
        return $this->hasMany('App\Candidato','candidato_id');
    }
}
