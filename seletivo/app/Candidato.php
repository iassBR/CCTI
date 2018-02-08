<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Seletivo;
use App\Endereco;
use App\Deficiencia;
use App\ExperienciaProfissional;
use App\Formacao;
class Candidato extends Model
{
    
    protected $table = 'candidatos';
    protected $fillable = ['nome','cpf','sexo','rg','data_nascimento','estado_civil',
    'cor_raca','nacionalidade','email','naturalidade','idade','endereco_id'];


    public function endereco(){
        return $this->hasOne('App\Endereco','endereco_id');
    }

    public function seletivos(){
        return $this->belongsToMany('App\Seletivo');
    }

    public function deficiencia(){
        return $this->belongsTo('App\Deficiencia','candidato_id');
    }

    public function experienciasProfissional(){
        return $this->belongsToMany('App\ExperienciaProfissional','candidato_id');
    }

    public function formacoes(){
        return $this->belongsToMany('App\Formacao','candidato_id');
    }
}
