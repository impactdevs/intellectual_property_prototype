
@extends('layouts.app')


@section('content')

<br><br><br><br><br>
<div class="container mt-5">
  
<div class="content mt-5">
<div class="row">
        <div class="col-md-12">
            <div class="card-header">
            <h4>
                Edit Resource
                
            </h4>
                <div class="card-body">
                <form class="row gy-2 gx-3 align-items-center" action="/resources/store" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title">Resource title:</label>
                        <input type="text" name="title" value="{{ $resource->title ?? "" }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="category" class="control-label">{{ 'Category' }}</label>
                        <select class="form-control" value="{{ $resource->category ?? "" }}" name="category" id="category">
                            @foreach (json_decode('{"1":"Technology","2":"Pharmaceuticals","3":"Agriculture"}') as $item => $value)
                                <option value="{{ $item }}" {{ isset($intellectual_property->category) && $intellectual_property->category == $item ? 'selected' : '' }}>
                                    {{ $value }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="short_description">Resource description:</label>
                        <input type="text" value="{{ $resource->short_description ?? "" }}" name="short_description" id="short_description" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="body" > Body </label>
                        <textarea class="form-control"   id="content" placeholder="Enter the Description" rows="5" name="body">{{ $resource->body ?? "" }}</textarea>
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


