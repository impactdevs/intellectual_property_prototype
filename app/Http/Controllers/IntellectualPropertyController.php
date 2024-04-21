<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\IntellectualProperty;
use Illuminate\Http\Request;

class IntellectualPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');

        $perPage = 25;

        if (!empty($keyword)) {
            $intellectualProperties = IntellectualProperty::where('ip_type', 'LIKE', "%$keyword%")
                ->orWhere('category', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('documents', 'LIKE', "%$keyword%")
                ->orWhere('expiry_date', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $intellectualProperties = IntellectualProperty::latest()->paginate($perPage);
        }

        return view('intellectual_properties.index', compact('intellectualProperties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {

        return view('intellectual_properties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        //check if the request has a file
        if ($request->hasFile('file_path')) {
            $file = $request->file('file_path');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);

            //save the document to documents table
            $document = new Document();
            $document->file_name = $requestData['file_name'];
            $document->file_path = 'uploads/' . $filename;
            $document->save();
            //remove the file_name and file_path from the request data
            unset($requestData['file_name']);
            unset($requestData['file_path']);
            $requestData['documents_id'] = $document->id;
            $requestData['user_id'] = auth()->id();
        }

        IntellectualProperty::create($requestData);

        return back()->with('flash_message', 'intellectual property added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {

        $intellectual_property = IntellectualProperty::findOrFail($id);

        return view('intellectual_properties.show', compact('intellectual_property'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $intellectual_property = IntellectualProperty::findOrFail($id);

        //check in documents table if the document exists
        $document = Document::where('id', $intellectual_property->documents_id)->first();

        return view('intellectual_properties.edit', compact('intellectual_property', 'document'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {

        $requestData = $request->all();

        $intellectual_property = IntellectualProperty::findOrFail($id);
        $intellectual_property->update($requestData);

        //find the document with $requestData['document_id']
        $document = Document::where('id', $requestData['document_id'])->first();
        //check if the request has a file
        $documentDataUpdate = [];
        if ($request->hasFile('file_path')) {
            $file = $request->file('file_path');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $documentDataUpdate['file_path'] = 'uploads/' . $filename;
        }

        //save the document to documents table
        $documentDataUpdate['file_name'] = $requestData['file_name'];
        $document->update($documentDataUpdate);


        return redirect('intellectual-properties')->with('flash_message', 'intellectual property updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        IntellectualProperty::destroy($id);

        return redirect('intellectual_property')->with('flash_message', 'intellectual_property deleted!');
    }
}
