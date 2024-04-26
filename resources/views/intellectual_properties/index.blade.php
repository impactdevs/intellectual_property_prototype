@extends('layouts.app')
@section('content')
    <section id="hero" class="search_intellectuals">
        <div class="row">
            <div class="col-sm-12">
                        <h1 class="text-center">Search Intellectual Properties</h1>
                        <form method="GET" action="{{ url('intellectual-properties') }}" accept-charset="UTF-8"
                            class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control rounded-5" name="search" placeholder="Search..."
                                    value="{{ request('search') }}" autofocus>
                                <span style="margin-left:5px">
                                    <button class="btn btn-primary" type="submit" style="height:34px">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br />
                        <br />
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr class="table-success">
                                        <th class="text-white lead font-weight-bold text-center">Name</th>
                                        <th class="text-white lead font-weight-bold text-center">Type</th>
                                        <th class="text-white lead font-weight-bold text-center">Category</th>
                                        <th class="text-white lead font-weight-bold text-center">Status</th>
                                        <th class="text-white lead font-weight-bold text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($intellectualProperties as $item)
                                        <tr class="text-center">
                                            <td>{{$item->name}}</td>
                                            <td>{{ ($item->ip_type == 1 ? 'Patent' : $item->ip_type == 2) ? 'Trademark' : ($item->ip_type == 3 ? 'Copyright' : 'Design') }}
                                            </td>
                                            <td>{{ ($item->category == 1 ? 'Technology' : $item->category == 2) ? 'Pharmaceuticals' : 'Agriculture' }}
                                            </td>
                                            <td>{{ ($item->status == 1 ? 'Pending' : $item->status == 2) ? 'Registered' : 'Expired' }}
                                            </td>
                                            <td>
                                                @if (Auth::user()->id == $item->user_id)
                                                    <a href="{{ url('/intellectual-properties/' . $item->id) }}"
                                                        title="View intellectual Property Details"><i
                                                            class="bi bi-eye"></i></a>
                                                    <a href="{{ url('/intellectual-properties/' . $item->id . '/edit') }}"
                                                        title="Edit intellectual Property"><i class="bi bi-brush"></i></a>
                                                @endif

                                                @if (Auth::user()->id != $item->user_id)
                                                    <a href="{{ url('/request-ip-usage?id=' . $item->id) }}"
                                                        title="Request Usage"><i class="bi bi-lock"></i>
                                                    </a>
                                                @endauth
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $intellectualProperties->appends(['search' => Request::get('search')])->render() !!} </div>
            </div>
        </div>
    </div>
</section>
@endsection
