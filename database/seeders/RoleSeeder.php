<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'Admin']);
        $role->permissions()->attach([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15]);

        $role = Role::create(['name' => 'Instructor']);
        $role->syncPermissions(['Crear Curso', 'Leer Curso', 'Actualizar Curso', 'Eliminar Curso']);
    }
}
