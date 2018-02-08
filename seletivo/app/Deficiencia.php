<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Canidato;
class Deficiencia extends Model
{
    protected $table = 'deficiencias';
    protected $fillable = [
        'nome','cid','candidato_id'
    ];

    public function candidato(){
        return $this->hasOne('App\Candidato', 'candidato_id');
    }

}
