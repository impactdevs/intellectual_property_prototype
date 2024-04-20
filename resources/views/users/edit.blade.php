@extends('layouts.app')


@section('content')

<br><br><br><br><br>
<div class="container mt-5">
<div class="content mt-5">
<div class="row">
        <div class="col-md-12">
            <div class="card-header">
            <h4>
                Create User
                <a href="{{ url('users/'.$user->id) }}" class="btn btn-danger float-end">Back</a>
            </h4>
                <div class="card-body">
                   <form action="{{ url ('users/'.$user->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="">User Name:</label>
                        <input type="text" value="{{$user->name}}"name="name" id="" class="form-control">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Email:</label>
                        <input type="text" readonly value="{{$user->email}}" name="email" id="" class="form-control">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Password:</label>
                        <input type="text" name="password" id="" class="form-control">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Roles:</label>
                        <select name="roles[]" class="form-control" multiple >
                            <option value=""> Select role</option>
                            @foreach($roles as $role)
                            <option value="{{$role}}" 
                            {{ in_array($role, $userRoles) ? 'selected':''}}
                            >
                            {{$role}}
                            </option>
                            @endforeach
                        </select>
                        @error('roles')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                   </form>
                </div>
            </div>
        </div>
    </div>  
</div>
</div>
<br><br><br><br><br>
@endsection