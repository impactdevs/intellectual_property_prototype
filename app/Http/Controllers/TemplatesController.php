<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Yajra\DataTables\DataTables;
use League\Flysystem\AwsS3V3\PortableVisibilityConverter;
use Illuminate\Http\JsonResponse;

class TemplatesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
       
        $templates=Template::query();
        return DataTables()::of($templates)->make(true);
       
        return view('templates.index');

    }

    public function upload(Request $request)
    {
        // Get the uploaded file
        $file = $request->file('file_path');

        // Handle the uploaded file
        if ($file) {
            $extension = $file->extension();
            $fileName = time() . '_' . rand(100, 1000) . '.' . $extension;

            // Store the uploaded file in the storage directory
            $storage = $file->storeAs('templates', $fileName, 'public');

            if (!$storage) {
                return redirect()->back()->with('error', 'An error occurred during the file upload.');
            }

            // Save the file details in the database
            $document = new Template();
            $document->form_number = $request->form_number;
            $document->section = $request->section;
            $document->file_name = $request->file_name;
            $document->file_path = 'storage/templates/' . $fileName;

            $document->save();
        } else {
            return redirect()->back()->with('error', 'No file uploaded.');
        }

        // Redirect with success message
        return redirect()->route('templates.index')->with('success', 'File uploaded successfully.');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // creating a template
        return view('templates.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate the request data
        $request->validate([
            'file_name' => 'required|string|max:255',
            'file_path' => 'required|file|max:10240',
            'form_number' => 'nullable|string|max:100',
            'section' => 'nullable|string|max:100'
        ]);

        // Handle file upload
        $file = $request->file('file');
        $filePath = $file->store('templates');

        // Create new template record
        $input = $request->all();
        $input['file_path'] = 'storage/' . $filePath;
        dd($input);
        Template::create($input);

        // Redirect with success message
        return redirect('templates')->with('flash_message', 'Template has been added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        // individual details
        $template = Template::find($id);
        return view('templates.show')->with('template', $template);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // edit template
        $template = Template::find($id);
        return view('templates.edit')->with('template', $template);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // update template
        $template = Template::find($id);
        $input = $request->all();
        $template->update($input);
        return redirect('templates')->with('flash_message', 'template updated');  // Correct redirect route
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // deleting the template
        Template::destroy($id);
        return redirect('template')->with('flash_message', 'template deleted successfully');
    }

    public function download($id)
    {
        $template = Template::findOrFail($id);

        $filepath = $template->file_path;
        // dd(file_exists(public_path($filepath)));
        if (!file_exists(public_path($filepath))) {
            abort(404);
        }

        return response()->download(public_path($filepath));
    }
}
