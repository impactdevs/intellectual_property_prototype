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
                <a href="{{ url('users') }}" class="btn btn-danger float-end">Back</a>
            </h4>
                <div class="card-body">
                   <form action="{{ url ('users') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="">User Name:</label>
                        <input type="text" name="name" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Email:</label>
                        <input type="text" name="email" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Password:</label>
                        <input type="text" name="password" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Roles:</label>
                        <select name="roles[]" class="form-control" multiple >
                            <option value=""> Select role</option>
                            @foreach($roles as $role)
                            <option value="{{$role}}">{{$role}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Save</button>
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