@extends('layouts.app')


@section('content')
<br><br><br><br>
  <h1>Add Template</h1>
<br>
<br>
<div class="content">

<form class="row gy-2 gx-3 align-items-center" action="{{ route('templates.upload') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">

@csrf

<div class="row form-group" >
  <label for="file_name" class="col-sm-2 col-form-label col-form-label-lg">Document Title:</label>
  <div class="col-sm-10">
    <input type="text" class="form-control form-control-lg" name="file_name" id="file_name" placeholder="title for the template">
  </div>
</div>
<br>
<br>
<div class="row form-group">
  <label for="file_path" class="col-sm-2 col-form-label col-form-label-lg">Upload a document template:</label>
  <div class="col-sm-10">
    <input type="file" class="form-control form-control-lg" name="file_path" id="file_path" placeholder="Upload the document here">
  </div>
</div>

<div class="col-auto">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

</div>
@endsection

