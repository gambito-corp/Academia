<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'Crear Curso'
        ]);
        Permission::create([
            'name' => 'Leer Curso'
        ]);
        Permission::create([
            'name' => 'Actualizar Curso'
        ]);
        Permission::create([
            'name' => 'Borrar Curso'
        ]);
        Permission::create([
            'name' => 'Eliminar Curso'
        ]);
        Permission::create([
            'name' => 'Ver Dashboard'
        ]);
        Permission::create([
            'name' => 'Crear Roles'
        ]);
        Permission::create([
            'name' => 'Ver Roles'
        ]);
        Permission::create([
            'name' => 'Listar Roles'
        ]);
        Permission::create([
            'name' => 'Editar Roles'
        ]);
        Permission::create([
            'name' => 'borrar Roles'
        ]);
        Permission::create([
            'name' => 'Eliminar Roles'
        ]);
        Permission::create([
            'name' => 'Crear Usuarios'
        ]);
        Permission::create([
            'name' => 'Ver Usuarios'
        ]);
        Permission::create([
            'name' => 'Listar Usuarios'
        ]);
        Permission::create([
            'name' => 'Editar Usuarios'
        ]);
        Permission::create([
            'name' => 'Borrar Usuarios'
        ]);
        Permission::create([
            'name' => 'Eliminar Usuarios'
        ]);
    }
}
