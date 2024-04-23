
@extends('layouts.app')


@section('content')
<br><br><br><br><br>
<div class="container mt-5">
  
<div class="content mt-5">
<div class="row">
        <div class="col-md-12">
            <div class="card-header">
              <div class="card-body">

              <form class="row gy-2 gx-3 align-items-center" action="/resources/store" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">

@csrf

<div class="row mt-3">
  <label for="title" class="col-sm-2 col-form-label col-form-label-lg">Title:</label>
  <div class="col-sm-10">
    <input type="text" class="form-control form-control-lg" name="title" id="title" placeholder="title for the resource" >
  </div>
</div>


<div class="row mt-3">
  <div class="form-control form-control-lg">
  <label for="">IP categories:</label>
  <select name="category" class="form-control"  >
      <option value=""> Select Ip</option>
      @foreach($category as $cat)
      <option value="{{$cat}}">{{$cat}}</option>
      @endforeach
  </select>
  </div>
</div>

<div class="row mt-3">
  <label for="author" class="col-sm-2 col-form-label col-form-label-lg">Author:</label>
  <div class="col-sm-10">
    <input type="text" class="form-control form-control-lg" name="author" id="author" placeholder="author of the resource">
  </div>
</div>

<div class="row mt-3">
  <label for="brief" class="col-sm-2 col-form-label col-form-label-lg">Brief:</label>
  <div class="col-sm-10">
  <textarea class="form-control form-control-lg" name="brief"  placeholder="input the brief here " id="brief" style="height: 100px"></textarea>
  </div>
</div>

<div class="row mt-3">
  <label for="link" class="col-sm-2 col-form-label col-form-label-lg">Resource link:</label>
  <div class="col-sm-10">
    <input type="text" class="form-control form-control-lg" name="link" id="link" placeholder="url link to the resource">
  </div>
</div>
<div class="row mt-3">
  <label for="image" class="col-sm-2 col-form-label col-form-label-lg">Attach image:</label>
  <div class="col-sm-10">
  <input type="file" class="form-control form-control-lg" name="image" id="image" placeholder="attach image">

  </div>
</div>
<div class="col-auto mt-3">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
              </div>
              </div>
          </div>
</div>
</div>
<br><br><br><br><br>
@endsection

