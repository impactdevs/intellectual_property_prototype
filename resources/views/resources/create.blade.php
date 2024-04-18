
@extends('resources/layout')


@section('content')
    <h1>Add resource</h1>

<div class="content">

<form class="row gy-2 gx-3 align-items-center" action="{{ route('resources.store') }}" method="POST">

@csrf

<div class="row ">
  <label for="title" class="col-sm-2 col-form-label col-form-label-lg">Title:</label>
  <div class="col-sm-10">
    <input type="text" class="form-control form-control-lg" name="title" id="title" placeholder="title for the resource">
  </div>
</div>

<div class="row">
  <label for="author" class="col-sm-2 col-form-label col-form-label-lg">Author:</label>
  <div class="col-sm-10">
    <input type="text" class="form-control form-control-lg" name="author" id="author" placeholder="author of the resource">
  </div>
</div>

<div class="row">
  <label for="brief" class="col-sm-2 col-form-label col-form-label-lg">Brief:</label>
  <div class="col-sm-10">
  <textarea class="form-control form-control-lg" name="brief"  placeholder="input the brief here " id="brief" style="height: 100px"></textarea>
  </div>
</div>

<div class="row">
  <label for="link" class="col-sm-2 col-form-label col-form-label-lg">Resource link:</label>
  <div class="col-sm-10">
    <input type="text" class="form-control form-control-lg" name="link" id="link" placeholder="url link to the resource">
  </div>
  
</div>

<div class="col-auto">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

</div>
@endsection

