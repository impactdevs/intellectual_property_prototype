@extends('layouts.app')


@section('content')

<br><br><br><br><br>
<div class="container mt-5">
<div class="content mt-5">
<div class="row">
        <div class="col-md-12">
            <div class="card-header">
            <h4>
                Edit Roles
                <a href="{{ url('roles') }}" class="btn btn-danger float-end">Back</a>
            </h4>
                <div class="card-body">
                   <form action="{{ url ('roles/'.$role->id) }}" method="post">
                    @csrf
                    @method ('PUT')
                    <div class="mb-3">
                        <label for="">Permission Name:</label>
                        <input type="text" value="{{ $role -> name}}"name="name" id="" class="form-control">
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