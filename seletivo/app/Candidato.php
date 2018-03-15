<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Seletivo;
use App\Endereco;
use App\Deficiencia;
use App\ExperienciaProfissional;
use App\Formacao;
use App\Cargo;
class Candidato extends Model
{
    
    protected $table = 'candidatos';
    protected $fillable = ['nome','cpf','sexo','rg','data_nascimento','estado_civil',
    'cor_raca','nacionalidade','email','naturalidade','idade','endereco_id'];


    public function endereco(){
        return $this->belongsTo('App\Endereco','endereco_id');
    }

    public function seletivos(){
        return $this->belongsToMany('App\Seletivo');
    }

    public function deficiencia(){
        return $this->belongsTo('App\Deficiencia','candidato_id');
    }

    public function experiencias(){
        return $this->hasMany(ExperienciaProfissional::class);
    }

    public function formacoes(){
        return $this->hasMany(ExperienciaProfissional::class);
    }

    public function cargos(){
        return $this->belongsToMany(Cargo::class);
    }



    public function adicionaCargo($cargo)
    {
        if (is_string($cargo)) {
            $cargo = Cargo::where('nomeCargo','=',$cargo)->firstOrFail();
        }

        if($this->existeCargo($cargo)){
            return;
        }

        return $this->cargos()->attach($cargo);

    }
    public function existeCargo($cargo)
    {
        if (is_string($cargo)) {
            $cargo = Cargo::where('nomeCargo','=',$cargo)->firstOrFail();
        }

        return (boolean) $this->cargos()->find($cargo->id);

    }

    public function removeCargo($cargo)
    {
        if (is_string($cargo)) {
            $cargo = Cargo::where('nomeCargo','=',$cargo)->firstOrFail();
        }

        return $this->cargos()->detach($cargo);
    }


    public function adicionaSeletivo($seletivo)
    {
        if (is_string($seletivo)) {
            $seletivo = Seletivo::where('nomeSeletivo','=',$seletivo)->firstOrFail();
        }

        if($this->existeCargo($seletivo)){
            return;
        }

        return $this->seletivos()->attach($seletivo);

    }
    public function existeSeletivo($seletivo)
    {
        if (is_string($seletivo)) {
            $seletivo = Seletivo::where('nomeSeletivo','=',$seletivo)->firstOrFail();
        }

        return (boolean) $this->seletivos()->find($seletivo->id);

    }

    public function removeSeletivo($seletivo)
    {
        if (is_string($seletivo)) {
            $seletivo = Seletivo::where('nomeSeletivo','=',$seletivo)->firstOrFail();
        }

        return $this->seletivos()->detach($seletivo);
    }

}
