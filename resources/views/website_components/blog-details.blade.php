@extends('layouts.app')
@section('content')
    <!-- Blog Details Page Title & Breadcrumbs -->
    <div data-aos="fade" class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>{{ $resource->title }}</h1>
              <p class="mb-0">{{ $resource->short_description }}</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Blog Details</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Blog-details Section - Blog Details Page -->
    <section id="blog-details" class="blog-details">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">

          <div class="col-lg-8">

            <article class="article">

            <div class="post-img">
                <img src="{{ asset('assets/img/blog/blog-1.jpg') }}" alt="" class="img-fluid">
            </div>

              <h2 class="title">{{$resource->title}}</h2>

              

              <div class="content">
                <p>{!! html_entity_decode($resource->body) !!}</p>
              

              </div><!-- End post content -->

              <div class="meta-bottom">
                
               
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01">Jan 1, 2022</time></a></li>
                
                
              </div><!-- End meta bottom -->

            </article><!-- End post article -->

          </div>

          <div class="col-lg-4">

            <div class="sidebar">

              <div class="sidebar-item search-form">
                <h3 class="sidebar-title">Search</h3>
                <form action="" class="mt-3">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <div class="sidebar-item categories">
                <h3 class="sidebar-title">Categories</h3>
                <ul class="mt-3">
                  <li><a href="#">Copyrights <span>(25)</span></a></li>
                  <li><a href="#">Trademarks <span>(12)</span></a></li>
                  <li><a href="#">Patents <span>(5)</span></a></li>
                  <li><a href="#">Utility Models <span>(22)</span></a></li>
                  <li><a href="#">Industrial Designs <span>(8)</span></a></li>
                  <li><a href="#">Geographical Indications <span>(14)</span></a></li>
                  <li><a href="#">Traditional Knowledge <span>(8)</span></a></li>
                  
                </ul>
              </div><!-- End sidebar categories-->

              <div class="sidebar-item recent-posts">
                  <h3 class="sidebar-title">Recent Posts</h3>
                 
                  <div class="post-item">
                  <img src="{{asset('assets/img/blog/avatar.png')}}" alt="" class="flex-shrink-0">
                      <div>
                          <h4><a href="{{ url('blog-details/' . $resource->id) }}">{{ $resource->short_description }}</a></h4>
                          <time date="{{ $resource->created_at->format('Y-m-d') }}">{{ $resource->created_at->format('Y-m-d') }}</time>
                      </div>
                  </div>  
                  
                  <div class="post-item">
                  <img src="{{asset('assets/img/blog/avatar.png')}}" alt="" class="flex-shrink-0">
                      <div>
                          <h4><a href="{{ url('blog-details/' . $resource->id) }}">{{ $resource->short_description }}</a></h4>
                          <time date="{{ $resource->created_at->format('Y-m-d') }}">{{ $resource->created_at->format('Y-m-d') }}</time>
                      </div>
                  </div> 

                  <div class="post-item">
                  <img src="{{asset('assets/img/blog/avatar.png')}}" alt="" class="flex-shrink-0">
                      <div>
                          <h4><a href="{{ url('blog-details/' . $resource->id) }}">{{ $resource->short_description }}</a></h4>
                          <time date="{{ $resource->created_at->format('Y-m-d') }}">{{ $resource->created_at->format('Y-m-d') }}</time>
                      </div>
                  </div> 

                  <div class="post-item">
                  <img src="{{asset('assets/img/blog/avatar.png')}}" alt="" class="flex-shrink-0">
                      <div>
                          <h4><a href="{{ url('blog-details/' . $resource->id) }}">{{ $resource->short_description }}</a></h4>
                          <time date="{{ $resource->created_at->format('Y-m-d') }}">{{ $resource->created_at->format('Y-m-d') }}</time>
                      </div>
                  </div> 
                  
                  
              </div><!-- End sidebar recent posts-->
            </div><!-- End Sidebar -->

          </div>

        </div>

      </div>

    </section><!-- End Blog-details Section -->
    @endsection