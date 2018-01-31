<?php

use Illuminate\Database\Seeder;
use App\Escolaridade;

class EscolaridadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('escolaridades')->insert([
            [
                'tipo'=>'ENSINO FUNDAMENTAL',
            ],
            [
                'tipo'=>'ENSINO MEDIO',
            ],
            [
                'tipo'=>'ENSINO SUPERIOR',
            ],
            [
                'tipo'=>'MESTRADO',
            ],
            [
                'tipo'=>'DOUTORADO',
            ]
        ]);
    }
}
