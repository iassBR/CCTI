<?php

use Illuminate\Database\Seeder;
use App\Permissao;
class PermissaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin = Permissao::firstOrCreate([
            'nome' => 'admin-view',
            'descricao' =>'index admin'
        ]);

        $admin = Permissao::firstOrCreate([
            'nome' => 'dashboard-view',
            'descricao' =>'dashboard admin'
        ]);

        $usuarios1 = Permissao::firstOrCreate([
            'nome' =>'usuario-view',
            'descricao' =>'Acesso a lista de Usuários'
        ]);
        $usuario = Permissao::firstOrCreate([
            'nome' =>'usuario-update',
            'descricao' =>'Acesso a lista de Usuários'
        ]);
        $usuarios2 = Permissao::firstOrCreate([
            'nome' =>'usuario-create',
            'descricao' =>'Adicionar Usuários'
        ]);
        $usuarios2 = Permissao::firstOrCreate([
            'nome' =>'usuario-edit',
            'descricao' =>'Editar Usuários'
        ]);
        $usuarios3 = Permissao::firstOrCreate([
            'nome' =>'usuario-delete',
            'descricao' =>'Deletar Usuários'
        ]);
  
        $papeis1 = Permissao::firstOrCreate([
            'nome' =>'papel-view',
            'descricao' =>'Listar Papéis'
        ]);
        $papeis2 = Permissao::firstOrCreate([
            'nome' =>'papel-create',
            'descricao' =>'Adicionar Papéis'
        ]);
        $papeis3 = Permissao::firstOrCreate([
            'nome' =>'papel-edit',
            'descricao' =>'Editar Papéis'
        ]);
        $papeis = Permissao::firstOrCreate([
            'nome' =>'papel-update',
            'descricao' =>'Editar Papéis'
        ]);
  
        $papeis4 = Permissao::firstOrCreate([
            'nome' =>'papel-delete',
            'descricao' =>'Deletar Papéis'
        ]);
  
        $candidato1 = Permissao::firstOrCreate([
            'nome' =>'candidato-view',
            'descricao' =>'Acesso aos candidatos'
        ]);
          // perfil dos candidatos
        $perfil1 = Permissao::firstOrCreate([
            'nome' =>'perfil-view',
            'descricao' =>'Acesso ao perfil'
        ]);
        
        $candidato2 = Permissao::firstOrCreate([
            'nome' =>'candidato-create',
            'descricao' =>'Acesso aos chamados'
        ]);
        $candidato3 = Permissao::firstOrCreate([
            'nome' =>'candidato-edit',
            'descricao' =>'Acesso aos chamados'
        ]);
        $candidato4 = Permissao::firstOrCreate([
            'nome' =>'candidato-delete',
            'descricao' =>'Acesso aos chamados'
        ]);
  




        $gerente = Permissao::firstOrCreate([
            'nome' => 'seletivo-view',
            'descricao' =>'index seletivo'
        ]);
        $gerente = Permissao::firstOrCreate([
            'nome' =>'cargoSeletivo-view',
            'descricao' =>'Acesso a lista de cargos em um seletivo'
        ]);
        $gerente = Permissao::firstOrCreate([
            'nome' =>'seletivo-update',
            'descricao' =>'Acesso a lista de seletivos'
        ]);
        $gerente = Permissao::firstOrCreate([
            'nome' =>'seletivo-create',
            'descricao' =>'Adicionar seletivo'
        ]);
        $gerente = Permissao::firstOrCreate([
            'nome' =>'seletivo-edit',
            'descricao' =>'Editar seletivo'
        ]);
        $gerente = Permissao::firstOrCreate([
            'nome' =>'seletivo-delete',
            'descricao' =>'Deletar seletivo'
        ]);
        $gerente = Permissao::firstOrCreate([
            'nome' =>'seletivo-store',
            'descricao' =>'Deletar seletivo'
        ]);
  
        $gerente = Permissao::firstOrCreate([
            'nome' =>'escolaridadeSeletivo-view',
            'descricao' =>'Acesso às escolaridades do seletivo'
        ]);
        echo "Registros de Permissoes criados no sistema";
    }
}
