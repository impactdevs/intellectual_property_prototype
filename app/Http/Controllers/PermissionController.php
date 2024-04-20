<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;


class PermissionController extends Controller
{
    //
   
    // public static function middleware(): array
    // {
    // return [
    //     // examples with aliases, pipe-separated names, guards, etc:
    //     'role_or_permission:super admin',
    //     new Middleware('role:view role', only: ['update','edit']),
    //     new Middleware(\Spatie\Permission\Middleware\RoleMiddleware::using('super admin'), except:['show']),
    //     new Middleware(\Spatie\Permission\Middleware\PermissionMiddleware::using('delete role,api'), only:['destroy']),

    // ];
    // }

    public function index()
    {
    $permissions = Permission::all();
    return view('permissions.index', ['permissions' => $permissions]);
    }


    public function create()
    {
        return view('permissions.create');
    }

    public function store(Request $request)
    {
    // Validation rules
    $rules = [
        'name' => ['required', 'string', 'unique:permissions,name']
    ];

    // Validate the request
    $validatedData = $request->validate($rules);

    // Create the permission
    Permission::create([
        'name' => $validatedData['name']
    ]);

    return redirect('permissions')->with('status', 'Permission created successfully.');
    }

    public function edit(Permission $permission)
    {
      

        return view ('permissions.edit', [
            'permission'=>$permission
        ]);
    }

    public function update(Request $request, Permission $permission)
    {
        $request -> validate([
            'name' => [
                'required',
                'string',
                'unique:permissions,name,'.$permission->id
            ]
        ]);

        $permission->update([
            'name'=> $request -> name
        ]);

        return redirect('permissions')->with('status','Permission craeted successfully');
    }

    public function destroy($permissionId)
    {
        $permission = Permission::find ($permissionId);
        $permission->delete();

        return redirect('permissions')->with('status','Permission deleted successfully');
    }

}
