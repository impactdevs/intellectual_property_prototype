@extends('layouts.app')

@section('content')

<br><br><br><br><br>
<div class="container mt-5">
  
<div class="content mt-5">

        <div class="col-md-12">
            <div class="card-header">
            
            <div class="text float-end">
            <h3>
                Templates store
            </h3>
            <br>
            </div>
            <div class="text ">
                @if (Auth::user()->email=="admin@ipportal.com")
                <a href="{{ route('templates.create') }}">Create New Template</a>     
                @endif            
            </div>
            <br>
        </div>
        
                <div class="card-body">
                    
                    <table class="table table-striped">
                            <thead>
                                <tr >
                                    <th scope="col">Form number</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Section</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($templates as $template)
                                <tr >
                                    <td style="color:red;">{{$template->form_number}}</td>
                                    <td style="color:red;">{{$template->file_name}}</td>
                                    <td style="color:red;">{{$template->section}}</td>
                                    <td>
                                        <div>
                                            <a href="{{ route('download', ['id' => $template->id ]) }}" title="Download template">
                                            <i class="bi bi-download mx-1"></i>Download
                                            </a>
                                           
                                            @if (Auth::user()->email=="admin@ipportal.com")
                                            <a href="{{ url('/template/' . $template->id. '/edit') }}" title="Edit template">
                                            <i class="bi bi-pencil mx-1"></i>Edit
                                            </a> 
                                            @endif
                                           
                                            @if (Auth::user()->email=="admin@ipportal.com")
                                            <form action="{{ url('/template/' . $template->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger " title="Delete template" onclick="return confirm('Are you sure you want to delete this template?')">
                                                <i class="bi bi-archive mx-1"></i> Delete
                                                </button>
                                            </form>
                                            @endif
                                            
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
<br><br><br><br><br>
@endsection

