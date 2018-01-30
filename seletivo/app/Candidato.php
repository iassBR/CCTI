<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Seletivo;
class Candidato extends Model
{
    
    protected $table = 'candidatos';
    protected $fillable = ['formacao','cargoPretendido','profissaoAtual','curso','user_id','seletivo_id'];


    public function users(){
        return $this->belongsTo('App\User','user_id');
    }

    public function seletivo(){
        return $this->belongsTO('App\Seletivo','seletivo_id');
    }
}
