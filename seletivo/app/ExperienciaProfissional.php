<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Canidato;
class ExperienciaProfissional extends Model
{
    protected $table = 'experiencias_profissionais';
    protected $fillable = [
        'nome_empresa','data_inicio','data_fim','cargo','descricao','candidato_id',   
    ];

    public function candidatos(){
        return $this->hasMany('App\Canidato','candidato_id');
    }
}
