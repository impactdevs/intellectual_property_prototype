@extends('layouts.app')
@section('content')
    <section id="hero" class="notifications">
        <div class="bd-example m-0 border-0">
            @if(empty($notifications))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <p class="h5">
                        <strong>No Notifications</strong>
                    </p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @foreach ($notifications as $notification)
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <p class="h5">
                        <strong>{{ $notification->intellectual_property->name }}</strong>
                    </p>

                    <p>
                        {{ $notification->reason_for_use }}
                    </p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endforeach
        </div>
    </section>
@endsection
