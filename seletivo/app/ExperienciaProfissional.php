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
<<<<<<< HEAD
        return $this->belongsTo(Candidato::class);
=======
        return $this->hasMany('App\Candidato','candidato_id');
>>>>>>> 3e1ca61c3ceabec1b3e43fbf6b5e8df320c69848
    }
}
