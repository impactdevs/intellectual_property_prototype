@extends('layouts.app')
<!-- Hero Section - Home Page -->
@section('content')
    <section id="hero" class="intellectual_form">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ url('/intellectual-properties') }}" accept-charset="UTF-8"
                                class="form-horizontal" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                @include ('intellectual_properties.form', ['formMode' => 'Submit'])
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- End Hero Section -->
@endsection
