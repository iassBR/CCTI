<?php

use Illuminate\Database\Seeder;
use App\User;



class UserTableSeeder extends Seeder
{
    
    public function run()
    {
        if (User::count() == 0) {
           
            User::create([
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password'),               
                'endereco_id' => '1'                
            ]);

            echo "ADmin criado com sucesso!";
        }
    }
}
