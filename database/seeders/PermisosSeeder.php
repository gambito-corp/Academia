<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

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
            'name' => 'Eliminar Curso'
        ]);
    }
}
