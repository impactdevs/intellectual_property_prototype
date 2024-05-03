@extends('layouts.app')
@section('content')

    <!-- Blog Details Page Title & Breadcrumbs -->
    <div data-aos="fade" class="page-title article_details">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8 ">
                        <h1>{{ $resources->title }}</h1>
                        <p class="mb-0">{{ $resources->short_description }}</p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    
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

                        <h2 class="title">{{ $resources->title }}</h2>



                        <div class="content">
                            <p>{!! html_entity_decode($resources->body) !!}</p>


                        </div><!-- End post content -->

                        <div class="meta-bottom">


                            <li class="d-flex align-items-center"><i class="bi bi-clock mx-2"></i>  {{ $resources->created_at->format('Y-m-d') }}</li>


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
                                @foreach (json_decode('{"1":"Technology","2":"Pharmaceuticals","3":"Agriculture"}') as $categoryId => $categoryName)
                                <li>
                                    <a href="#">{{ $categoryName }}<span>{{ $categoryCounts[$categoryId] ?? 0 }}</span></a>
                                </li>   
                                @endforeach
                               
                            </ul>
                        </div><!-- End sidebar categories-->

                        <div class="sidebar-item recent-posts">
                            {{-- <h3 class="sidebar-title">Recent Posts</h3>

                            <div class="post-item">
                                <img src="{{ asset('assets/img/blog/avatar.png') }}" alt="" class="flex-shrink-0">
                                <div>
                                    <h4><a
                                            href="{{ url('blog-details/' . $resource->id) }}">{{ $resource->short_description }}</a>
                                    </h4>
                                    <time
                                        date="{{ $resource->created_at->format('Y-m-d') }}">{{ $resource->created_at->format('Y-m-d') }}</time>
                                </div>
                            </div>

                            <div class="post-item">
                                <img src="{{ asset('assets/img/blog/avatar.png') }}" alt="" class="flex-shrink-0">
                                <div>
                                    <h4><a
                                            href="{{ url('blog-details/' . $resource->id) }}">{{ $resource->short_description }}</a>
                                    </h4>
                                    <time
                                        date="{{ $resource->created_at->format('Y-m-d') }}">{{ $resource->created_at->format('Y-m-d') }}</time>
                                </div>
                            </div>

                            <div class="post-item">
                                <img src="{{ asset('assets/img/blog/avatar.png') }}" alt="" class="flex-shrink-0">
                                <div>
                                    <h4><a
                                            href="{{ url('blog-details/' . $resource->id) }}">{{ $resource->short_description }}</a>
                                    </h4>
                                    <time
                                        date="{{ $resource->created_at->format('Y-m-d') }}">{{ $resource->created_at->format('Y-m-d') }}</time>
                                </div>
                            </div>

                            <div class="post-item">
                                <img src="{{ asset('assets/img/blog/avatar.png') }}" alt="" class="flex-shrink-0">
                                <div>
                                    <h4><a
                                            href="{{ url('blog-details/' . $resource->id) }}">{{ $resource->short_description }}</a>
                                    </h4>
                                    <time
                                        date="{{ $resource->created_at->format('Y-m-d') }}">{{ $resource->created_at->format('Y-m-d') }}</time>
                                </div>
                            </div> --}}


                        </div><!-- End sidebar recent posts-->
                    </div><!-- End Sidebar -->

                </div>

            </div>

        </div>
      
    </section><!-- End Blog-details Section -->
  
@endsection
