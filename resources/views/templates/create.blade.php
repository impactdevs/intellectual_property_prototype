@extends('layouts.app')


@section('content')
<br><br><br><br><br>
<div class="container mt-5">
  
<div class="content mt-5">
<div class="row">
        <div class="col-md-12">
            <div class="card-header">
              <div class="card-body">
<form class="row gy-2 gx-3 align-items-center" action="{{ route('templates.upload') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">

@csrf

<div class="row form-group" >
  <label for="file_name" class="col-sm-2 col-form-label col-form-label-lg">Document Title:</label>
  <div class="col-sm-10 mt-3">
    <input type="text" class="form-control form-control-lg" name="file_name" id="file_name" placeholder="title for the template">
  </div>
</div>
<br>
<br>
<div class="row form-group">
  <label for="file_path" class="col-sm-2 col-form-label col-form-label-lg">Upload a document template:</label>
  <div class="col-sm-10 mt-3">
    <input type="file" class="form-control form-control-lg" name="file_path" id="file_path" placeholder="Upload the document here">
  </div>
</div>

<div class="col-auto">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection

