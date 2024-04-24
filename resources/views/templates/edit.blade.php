

@extends('layouts.app')


@section('content')

<br><br><br><br><br>
<div class="container mt-5">
  
<div class="content mt-5">
<div class="row">
        <div class="col-md-12">
            <div class="card-header">
            <h4>
                Edit Template Upload
                
                <a href="{{ url('templates') }}" class="btn btn-danger float-end">Back</a>
            </h4>
                <div class="card-body">
                <form class="row gy-2 gx-3 align-items-center" action="{{ route('templates.update', $template->id) }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">

                    @csrf
                    @METHOD('PUT')
                    <div class="mb-3">
                        <label for="file_name">Document Name:</label>
                        <input type="text" name="file_name" id="file_name" value="{{ $template->file_name ?? '' }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="form_number">form Number:</label>
                        <input type="text" name="form_number" value="{{ $template->form_number ?? '' }}" id="form_number" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="section">Section:</label>
                        <input type="text" name="section" id="section" value="{{ $template->section ?? '' }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="file_path">Upload Document:</label>
                        <input type="file" name="file_path" id="file_path" class="form-control">
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



