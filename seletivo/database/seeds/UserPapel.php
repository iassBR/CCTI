<?php

use Illuminate\Database\Seeder;

class UserPapel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('papel_user')->insert([
            'papel_id' => '1',
            'user_id' => '1'
           
        ]);
        echo "Papéis do ADMIN associados com sucesso!";
    }
}
