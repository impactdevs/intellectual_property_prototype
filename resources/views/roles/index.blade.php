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
                        <h4>Admin Roles</h4>
                       @can('create role')
                       <a href="{{ url('roles/create') }}" class="btn btn-primary float-end">Create Roles</a>   
                       @endcan
                        
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Role Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>{{ $role->id }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>
                                        @can('can give permissions')
                                        <a href="{{ url('roles/'.$role->id.'/give-permissions') }}" class="btn btn-success">Grant Permissions</a>   
                                        @endcan
                                        @can('edit template')
                                        <a href="{{ url('roles/'.$role->id.'/edit') }}" class="btn btn-success">Edit</a>    
                                          
                                        @endcan
                                       @can('delete template')
                                       <a href="{{ url('roles/'.$role->id.'/delete') }}" class="btn btn-danger mx-2">Delete</a>
                                          
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
