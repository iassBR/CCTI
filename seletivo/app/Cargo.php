<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Escolaridade;
class Cargo extends Model
{
    
    protected $fillable = ['nomeCargo','escolaridade_id'];

    public function escolaridade(){
        return $this->belongsTo('App\Escolaridade','escolaridade_id');
    }
}
