<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formacao extends Model
{
    protected $table = 'formacoes';
    protected $fillable = [
        'tipo','instituicao','nome_curso','ano_conclusao','candidato_id',
    ];

    public function candidato(){
        return $this->belongsTo(Candidato::class);
    }
}
