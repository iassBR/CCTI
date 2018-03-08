<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Candidato;
class Seletivo extends Model
{
    
    protected $fillable = [

        'nomeSeletivo','dataInicio','dataTermino','cargoDesejado','documento_id'

        
    ];

    
    public function candidatos(){
        return $this->belongsToMany(Candidato::class);
    }
    public function cargos(){
        return $this->belongsToMany(Cargo::class);
    }
    public function escolaridade(){
        return $this->belongsToMany(Escolaridade::class);
    }

    public function documentos(){
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




    public function adicionaEscolaridade($escolaridade)
    {
        if (is_string($escolaridade)) {
            $escolaridade = Documento::where('nome','=',$escolaridade)->firstOrFail();
        }

        if($this->existeEscolaridade($escolaridade)){
            return;
        }

        return $this->escolaridade()->attach($escolaridade);

    }
    public function existeEscolaridade($escolaridade)
    {
        if (is_string($escolaridade)) {
            $escolaridade = Escolaridade::where('nome','=',$escolaridade)->firstOrFail();
        }

        return (boolean) $this->escolaridade()->find($escolaridade->id);

    }
    public function removeEscolaridade($escolaridade)
    {
        if (is_string($escolaridade)) {
            $escolaridade = Escolaridade::where('nome','=',$escolaridade)->firstOrFail();
        }

        return $this->escolaridade()->detach($escolaridade);
    }


}

