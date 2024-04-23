<?php

namespace App\Http\Controllers;

use App\Models\IntellectualProperty;
use App\Models\RequestUse;
use Illuminate\Http\Request;

class RequestUseController extends Controller
{
    public function index()
    {
        return view('request_use.index');
    }

    public function create(Request $request)
    {
        $id = $request->input('id');
        return view('request_use.create', ['id' => $id]);
    }

    public function store(Request $request)
    {
        $intellectual_property_id = $request->intellectual_property_id;
        $intellectual_property = IntellectualProperty::find($intellectual_property_id);
        $requestor_id = auth()->id();
        $receiver_id = $intellectual_property->user_id;
        $reason_for_use = $request->reason_for_use;
        $request_use = new RequestUse();
        $request_use->requestor_id = $requestor_id;
        $request_use->receiver_id = $receiver_id;
        $request_use->reason_for_use = $reason_for_use;
        $request_use->intellectual_property_id = $intellectual_property_id;
        $request_use->save();
        return redirect()->route('intellectual-properties')->with('success', 'Request for use has been sent');
    }
}
