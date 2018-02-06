<?php

use Illuminate\Database\Seeder;
use App\Endereco;
class EnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Endereco::create([
            'cep' => 'admin',
            'uf' => 'admin',
            'cidade' => 'admin',
            'complemento' => 'admin',
            'bairro' => 'admin',
            'logradouro' => 'admin',
            'num' => 'admin',
    ]);
    echo 'Endereços criados!!';
    }
}
