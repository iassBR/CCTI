<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table = 'Cargo';
    protected $fillable = ['nomeCargo','escolaridade_id'];
}
