<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resources;
use App\Models\IntellectualProperty;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class ResourcesController extends Controller
{
    public function index(): View 
    {
        // Fetching all resources
        $resources = Resources::all();
      
       
        return view('resources.index')->with('resources', $resources);
    }

    public function create(): View
    {
        // Showing the form for creating a new resource
        $category = IntellectualProperty::pluck('category')->all();
        return view ('resources.create',[
            'category'=> $category
        ]);
       
    }

    public function store(Request $request)
{ 
  

    //$requestData =$request->all();

    $validator = Validator::make($request->all(),[
        'title' => 'required|max:255|string',
        'category' => 'required|max:255|string',
        'author' => 'required|max:255|string',
        'brief' => 'required|max:255|string',
        'link' => 'required|max:255|string',
        'image' => 'required|mimes:png,jpg,jpeg,webp',
    ]);



    // Check if there's an uploaded file
    if ($request->hasFile('image')) {
        
        $file =  $validator->file('file');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;

        $path =$file->store('resources');

        $file->storeAs('resources/'. $filename);
 
        // Update request image to the filename
        $request->merge(['image' => $filename]);
    }

    

    Resources::create( $request->all());

    // Redirecting the user to the index route for resources
    return redirect()->route('resources.index')->with('flash_message', 'Resource has been added successfully');
}

    
    

    public function show(string $id): View 
    {
        // Displaying details of a specific resource
        $resource = Resources::find($id);
        return view('resources.show')->with('resource', $resource);
    }

    public function edit(string $id): View
    {
        // Showing the form for editing a resource
        $resource = Resources::find($id);
        return view('resources.edit')->with('resource', $resource);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        // Updating a specific resource
        $resource = Resources::find($id);
        $input = $request->all();
        $resource->update($input);
        return redirect()->route('resources.index')->with('flash_message', 'Resource updated');
    }

    public function destroy(string $id): RedirectResponse
    {
        // Deleting a specific resource
        Resources::destroy($id);
        return redirect()->route('resources.index')->with('flash_message', 'Resource deleted successfully');
    }
}
