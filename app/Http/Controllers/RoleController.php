<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\facades\DB;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', ['roles' => $roles]);
    }

    public function create()
    {
        return view('roles.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => ['required', 'string', 'unique:roles,name']
        ];

        $validatedData = $request->validate($rules);

        Role::create([
            'name' => $validatedData['name']
        ]);

        return redirect('roles')->with('status', 'Role created successfully.');
    }

    public function edit(Role $role)
    {
        return view('roles.edit', ['role' => $role]);
    }

    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:roles,name,' . $role->id
            ]
        ]);

        $role->update([
            'name' => $request->name
        ]);

        return redirect('roles')->with('status', 'Role updated successfully.');
    }

    public function destroy($roleId)
    {
        $role = Role::findOrFail($roleId);
        $role->delete();

        return redirect('roles')->with('status', 'Role deleted successfully.');
    }

    public function givePermissionsToRole($roleId)
    {
        $permissions = Permission::get();
        $role = Role::findOrFail($roleId);
        
        $rolePermissions = DB::table('role_has_permissions')
            ->where('role_id', $role->id)
            ->pluck('permission_id')
            ->all();
    
        return view('roles.add-permission', [
            'role' => $role,
            'permissions' => $permissions,
            'rolePermissions' => $rolePermissions
        ]);
    }
    

    public function updatePermissionsToRole(Request $request, $roleId)
    {
        $request -> validate ([
            'permission'=>'required'
        ]);

        $role = Role :: findOrFail($roleId);
        $role->syncPermissions($request->permission);

        return redirect()->back()->with('status','permission roles updated');
    }
}
