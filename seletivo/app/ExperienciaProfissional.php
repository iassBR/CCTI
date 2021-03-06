<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Candidato;
class ExperienciaProfissional extends Model
{
    protected $table = 'experiencias_profissionais';
    protected $fillable = [
        'nome_empresa','data_inicio','data_fim','cargo','descricao','candidato_id',   
    ];

    public function candidatos(){

        return $this->belongsTo(Candidato::class);

        return $this->hasMany('App\Candidato','candidato_id');

    }
}
