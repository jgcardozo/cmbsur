<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // https://spatie.be/docs/laravel-permission/v6/basic-usage/basic-usage
        //Role::truncate();
        //Permission::truncate();
        $Dev = Role::create(['name' => 'Dev']);
        $web = Role::create(['name' => 'webAdmin']);
        $Pro = Role::create(['name' => 'Profesor']);
        $Usu = Role::create(['name' => 'Usuario']);
        //
        Permission::create(['name' => 'Pagina.Inicio - visualizar'])->syncRoles([$Dev,$web]);
        Permission::create(['name' => 'Pagina.Inicio - crear'])->syncRoles([$Dev,$web]);
        Permission::create(['name' => 'Pagina.Inicio - editar'])->syncRoles([$Dev,$web]);
        Permission::create(['name' => 'Pagina.Inicio - eliminar'])->syncRoles([$Dev,$web]);
        //

    }
}
