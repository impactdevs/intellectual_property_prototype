@extends('layouts.app')

@section('content')
<br><br><br><br><br>
<div class="container mt-5">
@include('permission-nav-links')
    @if (session('status'))
        <div class="alert alert-info">
            {{ session('status') }}
        </div>
    @endif

    <div class="content mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h4>Admin Permissions</h4>
                       
                        <a href="{{ url('permissions/create') }}" class="btn btn-primary float-end">Create Permissions</a>  
                       
                        
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Permission Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permissions as $permission)
                                    <tr>
                                        <td>{{ $permission->id }}</td>
                                        <td>{{ $permission->name }}</td>
                                        <td>
                                      @can('edit permission')
                                      <a href="{{ url('permissions/'.$permission->id.'/edit') }}" class="btn btn-success">
                                      <i class="bi bi-pencil mx-1"></i>  Edit
                                    </a>   
                                        
                                      @endcan
                                       @can('delete permission')
                                       <a href="{{ url('permissions/'.$permission->id.'/delete') }}" class="btn btn-danger mx-2">
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
