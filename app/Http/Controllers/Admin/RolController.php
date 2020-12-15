<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;

class RolController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:Listar Roles')->only('index');
        $this->middleware('can:Ver Roles')->only('show');
        $this->middleware('can:Crear Roles')->only('create', 'store');
        $this->middleware('can:Editar Roles')->only('edit', 'update');
        $this->middleware('can:Borrar Roles')->only('delete');
        $this->middleware('can:Eliminar Roles')->only('destroy');
    }

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
        // get previous role id
        $previo = Role::where('id', '<', $role->id)->first();

        // get next role id
        $next = Role::where('id', '>', $role->id)->first();

        return view('Admin.Roles.show', compact('role', 'previo', 'next'));
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

    public function delete(Role $role)
    {
        $role->delete();
        return redirect()->route('admin.roles.index')->with([
            'clave' => 'Exito',
            'mensaje' => 'El Rol se Dado de baja Satisfactoriamente',
            'clase'=>'alert alert-warning'
        ]);
    }


    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('admin.roles.index')->with([
            'clave' => 'Exito',
            'mensaje' => 'El Rol se Eliminado Satisfactoriamente',
            'clase'=>'alert alert-danger'
        ]);
    }
}
