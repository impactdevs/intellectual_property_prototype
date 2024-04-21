@extends('layouts.app')
@section('content')
    <section id="hero" class="search_intellectuals">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form method="GET" action="{{ url('intellectualProperties') }}" accept-charset="UTF-8"
                            class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..."
                                    value="{{ request('search') }}">
                                <span style="margin-left:5px">
                                    <button class="btn btn-primary" type="submit" style="height:34px">
                                        Search
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br />
                        <br />
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>Category</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($intellectualProperties as $item)
                                        <tr>
                                            <td>{{ ($item->ip_type == 1 ? 'Patent' : $item->ip_type == 2) ? 'Trademark' : ($item->ip_type == 3 ? 'Copyright' : 'Design') }}
                                            </td>
                                            <td>{{ ($item->category == 1 ? 'Technology' : $item->category == 2) ? 'Pharmaceuticals' : 'Agriculture' }}
                                            </td>
                                            <td class="now">{{ $item->description }}</td>
                                            <td>{{ ($item->status == 1 ? 'Pending' : $item->status == 2) ? 'Registered' : 'Expired' }}
                                            </td>
                                            <td>
                                                @if(Auth::user()->id==$item->user_id)
                                                    <a href="{{ url('/intellectual-properties/' . $item->id) }}"
                                                        title="View intellectualProperties"><button
                                                            class="button2 bg-primary"><i class="fa fa-eye"
                                                                aria-hidden="true"></i> View</button></a>
                                                    <a href="{{ url('/intellectual-properties/' . $item->id . '/edit') }}"
                                                        title="Edit intellectualProperties"><button
                                                            class="button1 bg-success"><i class="fa fa-pencil-square-o"
                                                                aria-hidden="true"></i> Edit</button></a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $intellectualProperties->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
