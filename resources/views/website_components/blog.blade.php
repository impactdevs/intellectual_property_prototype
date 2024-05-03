
@extends('layouts.app')
<!-- Hero Section - Home Page -->
@section('content')
  <main id="main">

    <!-- Blog Page Title & Breadcrumbs -->
    <div data-aos="fade" class="page-title article_details">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Educational Resources</h1>
              
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Blog</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Blog Section - Blog Page -->
    <section id="blog" class="blog">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="text">
        @if (Auth::user()->email=="admin@ipportal.com")
        <a href="{{ route('resources.create') }}">Create New Resource</a>
       @endif
       <br>
      </div>
        <div class="row gy-4 posts-list">
        @forelse ($resources as $resource)
          <div class="col-xl-4 col-lg-6">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">
                  {{
                      $resource->category == 1 ? 'Technology' :
                      ($resource->category == 2 ? 'Pharmaceuticals' : 'Agriculture')
                  }}
              </p>


              <h2 class="title">
                  <a href="{{ url('/resources/blog-details/'.$resource->slug) }}">{{ $resource->short_description }}</a>
              </h2>

              <div class="d-flex align-items-center">
               
                <div class="post-meta">
                 
                <p class="post-date">
                  <time date="{{ $resource->created_at->format('Y-m-d') }}">{{ $resource->created_at->format('Y-m-d') }}</time>
                </p>
                @if (Auth::user()->email=="admin@ipportal.com")
                <a href="{{ url('/resources/'.$resource->id) }}" >
                <i class="bi bi-pencil mx-1"></i>   
                </a>  
                @endif
                @if (Auth::user()->email=="admin@ipportal.com")
                <form method="POST" action="{{ url('/resources/'.$resource->id.'/delete') }}" accept-charset="UTF-8" style="display:inline">
                  {{ method_field('DELETE') }}
                  {{ csrf_field() }}
                <button type="submit" onclick="return confirm(&quot;Confirm delete?&quot;)" class="btn btn-danger " ><i class="bi bi-trash mx-1"></i></button>
                </form> 
                  
                </a>  
                @endif
                </div>
              </div>

            </article>
          </div><!-- End post list item -->
          @empty
              <div class="col-xl-4 col-lg-6">
                  <div class="accordion-body">
                      <strong>There is no data in the database.</strong>
                  </div>
              </div>
          @endforelse

        </div><!-- End blog posts list -->

        <div class="pagination d-flex justify-content-center">
          <ul>
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul>
        </div><!-- End pagination -->

      </div>

    </section><!-- End Blog Section -->

  </main>
@endsection
