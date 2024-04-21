<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('permission:view permission',['only'=>['update','edit']]);
        $this->middleware('permission:create permission',['only'=>['create','store']]);
        $this->middleware('permission:update permission',['only'=>['update','edit']]);
        $this->middleware('permission:delete permission',['only'=>['destory']]);
    }
    
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }
    
    public function create()
    {
        $roles = Role::pluck('name')->all();
        return view ('users.create',[
            'roles'=> $roles
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|max:50', 
            'roles' => 'required', 
        ]);
    
        $user = User::create([
            'name' => $request->name, 
            'email' => $request->email,
            'password' => Hash::make($request->password), 
        ]);
    
        // Assuming 'roles' are sent in the request
        $user->syncRoles([$request->roles]); // Assuming you want to assign only one role
    
        return redirect('/users')->with('status', 'User created successfully with roles assigned'); // Fixed typo here
    }

    public function edit(User $user)
    {
        $roles = Role::pluck('name')->all();
        $userRoles = $user->roles->pluck('name')->all();

        

         return view ('users.edit',[
            'user'=> $user,
            'roles'=>$roles,
            'userRoles'=>$userRoles
         ]);

    }

    public function update(Request $request, User $user)
    {

        $request->validate([
            'name' => 'required|string|max:255',           
            'password' => 'nullable|string|min:8|max:50', 
            'roles' => 'required', 
        ]);

        $data =[
            'name'=>$request->name,
            'email'=>$request->email,
        ];

        if(!empty($request->password))
        {
            $data +=[
                'passowrd'=>Hash::make($request->password),
            ];
        }

        $user ->update($data);
        $user->syncRoles($request->roles);
    
        return redirect('/users')->with('status', 'User updated successfully with roles assigned');   
    }

    public function destroy($userId)
    {
        $user =User::findOrFail($userId);
        $user->delete();

        return redirect('/users')->with('status', 'User deleted successfully with roles assigned');   
    }
    
}
