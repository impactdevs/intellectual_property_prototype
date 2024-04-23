@extends('layouts.app')

@section('content')
<div class="content">
    <div class="table-body">
        <br>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <br>
                        <br>
                        <div class="table-header">
                            <div class="text">
                                <h3>
                                    Templates store
                                </h3>
                                <br>
                                <div class="text">
                                    <a href="{{ route('templates.create') }}">Create New Resource</a>
                                </div>
                                <br>
                            </div>
                        </div>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">File name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($templates as $template)
                                <tr>
                                    <td>{{$template->id}}</td>
                                    <td>{{$template->file_name}}</td>
                                    <td>
                                        <div>
                                            <a href="{{ route('download', ['id' => $template->id ]) }}" title="Download template">
                                                <button class="btn btn-info">Download</button>
                                            </a>
                                           
                                            @can('edit templates')
                                            <a href="{{ url('/template/' . $template->id. '/edit') }}" title="Edit template">
                                                <button class="btn btn-primary">Edit</button>
                                            </a> 
                                            @endcan
                                           
                                            @can('delete template')
                                            <form action="{{ url('/template/' . $template->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger " title="Delete template" onclick="return confirm('Are you sure you want to delete this template?')">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i> DELETE
                                                </button>
                                            </form>
                                            @endcan
                                            
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
