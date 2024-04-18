@extends('layouts.app')

@section('content')
<div class="content">
<h1>Resources Page</h1>

<div class="text">
<a href="{{ route('resources.create') }}">Create New Resource</a>
</div>
<br>   
    
    <div class="content">
        <div class="accordion" id="accordionExample">
            @forelse ($resources as $resource)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading{{ $loop->index }}">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $loop->index }}" aria-expanded="true" aria-controls="collapse{{ $loop->index }}">
                            {{ $resource->title }}
                        </button>
                    </h2>
                    <div id="collapse{{ $loop->index }}" class="accordion-collapse collapse show" aria-labelledby="heading{{ $loop->index }}" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            {{ $resource->brief }}
                            <a href="http://{{ $resource->link }}">Read more</a>
                            <div class="accordion-body">
                                <cite>{{ $resource->author }}</cite>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="accordion-body">
                    <strong>There is no data in the database.</strong>
                </div>
            @endforelse
        </div>
    </div>
</div>
  
@endsection
