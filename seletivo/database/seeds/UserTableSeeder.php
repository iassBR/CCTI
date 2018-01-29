<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Papel;
use App\Permissao;

class UserTableSeeder extends Seeder
{
    
    public function run()
    {
        if (User::count() == 0) {
            $papel = Papel::where('id', '1')->firstOrFail();

            User::create([
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password'),
                'cpf'            => '03326283296',
                'bairro'        =>'Cidade Satélite',
                'logradouro'     => 'Rua Aquário',
                'num'            => '122',
                'telefone' => '991723361',
                'remember_token' => str_random(60),
                'papel_id' => $papel->id
                
            ]);
        }
    }
}
