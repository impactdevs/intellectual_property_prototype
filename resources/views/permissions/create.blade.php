@extends('layouts.app')


@section('content')

<br><br><br><br><br>
<div class="container mt-5">
  
<div class="content mt-5">
<div class="row">
        <div class="col-md-12">
            <div class="card-header">
            <h4>
                Create Permissions
                <a href="{{ url('permissions') }}" class="btn btn-danger float-end">Back</a>
            </h4>
                <div class="card-body">
                   <form action="{{ url ('permissions') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="">Permission Name:</label>
                        <input type="text" name="name" id="" class="form-control">
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