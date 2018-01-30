<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Candidato;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = [
        'name', 'email', 'password','cpf', 'bairro', 'logradouro','num','telefone','papel_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function papel(){
        return $this->belongsTO('App\Papel','papel_id');
    }
    public function candidatos(){
        return $this->hasOne('App\Candidato','user_id');
    }

    
    
}
