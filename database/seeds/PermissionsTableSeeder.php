<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// USER  ---------------------------
        Permission::firstOrCreate([
			'name' =>'user-view',
			'description' =>'Acesso a lista de Usuários'
		]);
		Permission::firstOrCreate([
			'name' =>'user-create',
			'description' =>'Adicionar Usuário'
		]);
		Permission::firstOrCreate([
			'name' =>'user-edit',
			'description' =>'Editar Usuário'
		]);
		Permission::firstOrCreate([
			'name' =>'user-delete',
			'description' =>'Deletar Usuário'
		]);
    }
}
