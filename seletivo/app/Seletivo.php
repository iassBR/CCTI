<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Candidato;
class Seletivo extends Model
{
    
    protected $fillable = [
        'nomeSeletivo','dataInicio','dataTermino','tempoExperiencia','cargoDesejado','escolaridade_id','documento_id'
    ];

    public function escolaridade(){
        return $this->belongsTo('App\Escolaridade','escolaridade_id');
    }
    public function candidato(){
        return $this->hasOne('App\Candidato','candidato_id');
    }
    public function cargos(){
        return $this->belongsToMany('App\Cargo','cargo_seletivo');
    }
    public function documento(){
    return $this->belongsTo('App\Documento','documento_id');
    }

    public function adicionaCargo($cargo)
    {
        if (is_string($cargo)) {
            $cargo = Cargo::where('nome','=',$cargo)->firstOrFail();
        }

        if($this->existeCargo($cargo)){
            return;
        }

        return $this->cargos()->attach($cargo);

    }
    public function existeCargo($cargo)
    {
        if (is_string($cargo)) {
            $cargo = Cargo::where('nome','=',$cargo)->firstOrFail();
        }

        return (boolean) $this->cargos()->find($cargo->id);

    }
    public function removeCargo($cargo)
    {
        if (is_string($cargo)) {
            $cargo = Cargo::where('nome','=',$cargo)->firstOrFail();
        }

        return $this->cargos()->detach($cargo);
    }


    public function adicionaCandidato($candidato)
    {
        if (is_string($candidato)) {
            $candidato = Candidato::where('nome','=',$candidato)->firstOrFail();
        }

        if($this->existeCandidato($candidato)){
            return;
        }

        return $this->candidato()->attach($candidato);

    }
    public function existeCandidato($candidato)
    {
        if (is_string($candidato)) {
            $candidato = Candidato::where('nome','=',$candidato)->firstOrFail();
        }

        return (boolean) $this->candidato()->find($candidato->id);

    }
    public function removeCandidato($candidato)
    {
        if (is_string($candidato)) {
            $candidato = Candidato::where('nome','=',$candidato)->firstOrFail();
        }

        return $this->candidato()->detach($candidato);
    }




    public function adicionaDocumento($documento)
    {
        if (is_string($documento)) {
            $documento = Documento::where('nome','=',$documento)->firstOrFail();
        }

        if($this->existeDocumento($documento)){
            return;
        }

        return $this->documento()->attach($documento);

    }
    public function existeDocumento($documento)
    {
        if (is_string($documento)) {
            $documento = Documento::where('nome','=',$documento)->firstOrFail();
        }

        return (boolean) $this->documento()->find($documento->id);

    }
    public function removeDocumento($documento)
    {
        if (is_string($documento)) {
            $documento = Documento::where('nome','=',$documento)->firstOrFail();
        }

        return $this->documento()->detach($documento);
    }


}

