<?php

use Illuminate\Database\Seeder;
use App\Papel;
class PapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Papel::firstOrCreate([
            'nome' => 'Admin',
            'descricao' => 'acesso total ao sistema(root) '
        ]);

        $gerente = Papel::firstOrCreate([
            'nome' => 'Gerente',
            'descricao' => 'Responsável pelo departamento'
        ]);

        $auxiliar = Papel::firstOrCreate([
            'nome' => 'Auxiliar do departamento'
            ,'descricao' => 'Vizualiza os Relatórios'
        ]);
        
        $candidato = Papel::firstOrCreate([
            'nome' => 'Candidato',
            'descricao' => 'candidato do seletivo'
        ]);



        echo 'Papeis criados!!';
    }
}
