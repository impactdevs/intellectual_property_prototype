@extends('layouts.app')

@section('content')
<br><br><br><br><br>
<div class="container mt-5">
@include('permission-nav-links')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="content mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h4>Users</h4>
                        @can('create user')
                        <a href="{{ url('users/create') }}" class="btn btn-primary float-end">Create Users</a>  
                        @endcan
                       
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User Name</th>
                                    
                                    <th>Email</th>
                                    <th>Roles</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)
                                <tr>
                                <td>{{ $user->id}}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if(!empty($user ->getRoleNames()))
                                        @foreach ( $user ->getRoleNames() as $roleName)
                                            <label class="badge bg-primary mx-1">{{$roleName}}</label>
                                        @endforeach

                                        @endif
                                    </td>
                                    <td>
                                        @can('edit user')
                                        <a href="{{ url('users/'.$user->id.'/edit') }}" class="btn btn-success">
                                        <i class="bi bi-pencil mx-1"></i>    Edit
                                        </a>      
                                        @endcan
                                        @can('delete user')
                                        <a href="{{ url('users/'.$user->id.'/delete') }}" class="btn btn-danger mx-2">
                                        <i class="bi bi-archive mx-1"></i>Delete 
                                        </a>    
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br>
@endsection
