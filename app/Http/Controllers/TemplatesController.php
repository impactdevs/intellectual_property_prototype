<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Template;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class TemplatesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     
     public function index(): View 
     {
         //fetching all templates
         $templates = Template::all();
         return view ('templates.index')->with('templates', $templates);
     }

     public function upload(Request $request)
{
   
    // Validate the uploaded file
    // $request->validate([
    //     'file_path' => 'required|file|mimes:pdf,doc,docx|max:10240',
    //     'file_name'=>'required|string' 
    // ]);

    // dd($request->all());
    
    

    // Get the uploaded file
    $file = $request->file('file_path');
   
    
    // Handle the uploaded file
    if ($file) {
        $extension = $file->extension();
        $fileName = time() . '_' . rand(100,1000) . '.' . $extension;
        
        // Store the uploaded file in the storage directory
        $storage = $file->storeAs('templates', $fileName, 'public');
        
        if (!$storage) {
            return redirect()->back()->with('error', 'An error occurred during the file upload.');
        }

        // Save the file details in the database
        $document = new Template();
        $document->file_name = $file->getClientOriginalName(); 
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
        //creating a template
        return view ('templates.create');
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
    ]);

    // Handle file upload
    $file = $request->file('file');
    $filePath = $file->store('templates'); 

    // Create new template record
    $input = $request->all();
    $input['file_path'] ='storage/'. $filePath; 
    
    Template::create($input);
    
    // Redirect with success message
   // return redirect('templates')->with('flash_message', 'Template has been added successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id): View 
    {
        //individual details
        $template = Template::find($id);
        return view ('templates.show')->with('template', $template);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit template 
        $template = Template::find($id);
        return view ('template.edit')->with('template', $template);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //update template
        $template = Template::find($id);
        $input = $request->all();
        $template->update($input);
        return redirect('templates')->with('flash_message', 'template updated'); // Correct redirect route
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //deleting the template
        Template::destroy($id);
        return redirect ('template')->with('flash_message','template deleted successfully');
    }
}
