@extends('layouts.app')

@section('content')
<br><br><br><br><br>
<div class="content">
<h1>Resources Page</h1>

<div class="text">
<a href="{{ route('resources.create') }}">Create New Resource</a>
</div>
<br>   
    
    <div class="content">
       
    <div class="col-xl-4 col-lg-6">
    @forelse ($resources->take(3) as $resource)
        <article>
            <div class="post-img">
                <img src="{{ asset('storage/resources/' . $resource->image) }}" alt="" class="img-fluid">

            </div>
            <p class="post-category">{{ $resource->category }}</p>
            <h2 class="title">
                <a href="blog-details.html">{{ $resource->brief }}</a>
            </h2>
            <div class="d-flex align-items-center">
                <div class="post-meta">
                    <p class="post-author">{{ $resource->author }}</p>
                    <p class="post-date">
                        <time datetime="2022-01-01">{{ $resource->created_at }}</time>
                    </p>
                </div>
            </div>
        </article>
    @empty
        <div class="accordion-body">
            <strong>There is no data in the database.</strong>
        </div>
    @endforelse
</div>


    </div>
</div>
<br><br><br><br><br>
@endsection
