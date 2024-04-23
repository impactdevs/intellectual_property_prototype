@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">Intellectual Property {{ $intellectual_property->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/intellectual_property') }}" title="Back"><button class="button2"><i
                                    class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/intellectual_property/' . $intellectual_property->id . '/edit') }}"
                            title="Edit intellectual_property"><button class="button1"><i class="fa fa-pencil-square-o"
                                    aria-hidden="true"></i> Edit</button></a>

                        <form method="POST"
                            action="{{ url('admin/intellectual_property' . '/' . $intellectual_property->id) }}"
                            accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="button3" title="Delete intellectual_property"
                                onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                                    aria-hidden="true"></i> Delete</button>
                        </form>
                        <br />
                        <br />

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Name:</th>
                                        <td>{{ $intellectual_property->name }}</td>
                                    </tr>
                                    <tr>
                                        <th> Intellectual Property Type: </th>
                                        <td> {{ ($intellectual_property->ip_type == 1 ? 'Patent' : $intellectual_property->ip_type == 2) ? 'Trademark' : ($intellectual_property->ip_type == 3 ? 'Copyright' : 'Design') }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th> Intellectual Property Category:</th>
                                        <td> {{ ($intellectual_property->category == 1 ? 'Technology' : $intellectual_property->category == 2) ? 'Pharmaceuticals' : 'Agriculture' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th> Intellectual Property Description </th>
                                        <td> {{ $intellectual_property->description }} </td>
                                    </tr>
                                    <tr>
                                        <th> Status </th>
                                        <td> {{ ($intellectual_property->status == 1 ? 'Pending' : $intellectual_property->status == 2) ? 'Registered' : 'Expired' }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
