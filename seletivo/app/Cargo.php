<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Escolaridade;
class Cargo extends Model
{
    
    protected $fillable = ['nomeCargo','escolaridade_id'];

<<<<<<< HEAD
    public function seletivo(){
        return $this->belongsToMany('App\Seletivo','cargo_seletivo');
    }
    public function escolaridade(){
        return $this->belongsTo('App\Escolaridade','escolaridade_id');
    }

    public function adicionaSeletivo($seletivo)
    {
        if (is_string($seletivo)) {
            $seletivo = Seletivo::where('nome','=',$seletivo)->firstOrFail();
        }

        if($this->existeCargo($seletivo)){
            return;
        }

        return $this->seletivo()->attach($seletivo);

    }
    public function existeSeletivo($seletivo)
    {
        if (is_string($seletivo)) {
            $seletivo = Seletivo::where('nome','=',$seletivo)->firstOrFail();
        }

        return (boolean) $this->seletivo()->find($seletivo->id);

    }
    public function removeSeletivo($seletivo)
    {
        if (is_string($seletivo)) {
            $seletivo = Seletivo::where('nome','=',$seletivo)->firstOrFail();
        }

        return $this->seletivo()->detach($cargo);
    }

=======
    public function escolaridade(){
        return $this->belongsTo('App\Escolaridade','escolaridade_id');
    }
>>>>>>> 8154dcd23d52940b1e09952e9f43ba66eea031d7
}
