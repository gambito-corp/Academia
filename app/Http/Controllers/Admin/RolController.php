<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolController extends Controller
{

    public function index()
    {
        $roles = Role::all();
        return view('Admin.Roles.index', compact('roles'));
    }

    public function create()
    {
        $permissions = Permission::all();
        return view('Admin.Roles.create', compact('permissions'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'permissions' =>'required'
        ]);

        $rol = Role::create([
            'name' => $request->name
        ]);

        $rol->permissions()->attach($request->permissions);

        return redirect()->route('admin.roles.index')->with([
            'clave' => 'Exito',
            'mensaje' => 'El Rol se creo Satisfactoriamente',
            'clase'=>'alert alert-success'
        ]);
    }


    public function show(Role $role)
    {
        return view('Admin.Roles.show', compact('role'));
    }


    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('Admin.Roles.edit', compact('role', 'permissions'));
    }


    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required',
            'permissions' =>'required'
        ]);
        $role->permissions()->sync($request->permissions);
        $role->update(['name' => $request->name]);

        return redirect()->route('admin.roles.edit', $role)->with([
            'clave' => 'Exito',
            'mensaje' => 'El Rol se Edito Satisfactoriamente',
            'clase'=>'alert alert-success'
        ]);

    }


    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('admin.roles.index')->with([
            'clave' => 'Exito',
            'mensaje' => 'El Rol se Eliminado Satisfactoriamente',
            'clase'=>'alert alert-warning'
        ]);
    }
}
