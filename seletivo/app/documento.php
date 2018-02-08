<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class documento extends Model
{
   protected $table= 'Documento';
   protected $fillable = ['nome_documento','seletivo_id'];

   public function seletivo(){
       return $this->hasMany('App\Seletivo','seletivo_id');
   }
}
