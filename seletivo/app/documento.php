<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class documento extends Model
{
   protected $table= 'documentos';
   protected $fillable = ['nome_documento','endereço_armazenado','seletivo_id'];

   public function seletivo(){
       return $this->hasMany('App\Seletivo','seletivo_id');
   }
}
