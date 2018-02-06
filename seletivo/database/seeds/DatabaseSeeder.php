<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EnderecoSeeder::class);
        $this->call(PapelSeeder::class);
        $this->call(PermissaoSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(UserPapel::class);
        $this->call(papel_permissao_Seeder::class);
    }
}
