@extends('layouts.app')

@section('content')
<br><br><br><br><br>
<div class="content mt-5 mx-5"> <!-- Added mx-3 class for horizontal margins -->
    <div class="row mt-5">
        <div class="col-md-12 mt-10">
            <div class="card mt-3">
                <div class="card-header">
                    <div class="text">
                        <a href="{{ route('resources.create') }}">Create New Resource</a>
                    </div>
                </div>
                <div class="card-body mt-5">
                    <div class="row">
                        @forelse ($resources->take(3) as $resource)
                            <div class="col-xl-4 col-lg-6">
                                <article>
                                    <div class="post-img">
                                        <img src="{{ url('public/resources/'.$resource->image) }}" alt="" style="width:430px; height:300px;" class="img-fluid">
                                    </div>
                                    <p class="post-category">{{ $resource->category }}</p>
                                    <h2 class="title">
                                        <a href="{{ url($resource->link) }}">{{ $resource->title }}</a>
                                    </h2>
                                    <p class="post-category">{{ $resource->brief }}</p>
                                    <div class="d-flex align-items-center">
                                        <div class="post-meta">
                                            <p class="post-author">{{ $resource->author }}</p>
                                            <p class="post-date">
                                                <time >{{ $resource->created_at }}</time>
                                            </p>
                                        </div>
                                       <div>
                                           
                                           
                                       </div>
                                    </div>
                                    <div>
                                        @can('edit resources')
                                        <a href="{{ url('resource.edit') }}" class="btn btn-secondary float-end">Edit resource</a>  
                                        @endcan
                                        @can('delete resources')
                                        <a href="{{ url('resource.delete') }}" class="btn btn-danger float-end">Delete resource</a>  
                                        @endcan
                                    </div>
                                </article>
                            </div>
                            <br><br><br>
                        @empty
                            <div class="col-xl-4 col-lg-6">
                                <div class="accordion-body">
                                    <strong>There is no data in the database.</strong>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br>
@endsection
