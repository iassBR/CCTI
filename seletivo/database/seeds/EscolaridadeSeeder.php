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
                'tipo'=>'CURSO DE CAPACITACAO',
            ],
            [
                'tipo'=>'DOUTORADO COMPLETO',
            ],
            [
                'tipo'=>'DOUTORADO INCOMPLETO',
            ],
            [
                'tipo'=>'MESTRADO COMPLETO',
            ],
            [
                'tipo'=>'MESTRADO INCOMPLETO',
            ],
            [
                'tipo'=>'POS-GRADUACAO COMPLETA',
            ]
            ,[
                'tipo'=>'POS-GRADUACAO INCOMPLETA',
            ]
            ,[
                'tipo'=>'GRADUACAO COMPLETA',
            ]
            ,[
                'tipo'=>'GRADUACAO INCOMPLETA',
            ]
            ,[
                'tipo'=>'ENSINO MEDIO COMPLETO',
            ]
            ,[
                'tipo'=>'ENSINO MEDIO INCOMPLETO',
            ]
            ,[
                'tipo'=>'ENSINO MEDIO TECNICO',
            ]
            ,[
                'tipo'=>'ENSINO FUNDAMENTAL COMPLETO',
            ]
            ,[
                'tipo'=>'ENSINO FUNDAMENTAL INCOMPLETO',
            ],

      
            
        ]);




      
    }
}
