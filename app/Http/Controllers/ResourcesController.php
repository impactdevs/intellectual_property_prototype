<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resources;
use App\Models\IntellectualProperty;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

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

    public function store(Request $request): RedirectResponse
    { 
        $ip = IntellectualProperty::all();

        $image = $request->file('image');
    
        // Handle the uploaded file
        if ($image) {
            $extension = $image->getClientOriginalExtension();
            $fileName = time() . '_' . rand(100, 1000) . '.' . $extension;
            
            // Store the uploaded file in the storage directory
            $storage = $image->storeAs('resources', $fileName, 'public');
            
            if (!$storage) {
                return redirect()->back()->with('error', 'An error occurred during the image upload.');
            }
    
            // Save the file details in the database
            $resource = new Resources();
            $resource->title = $request->input('title'); 
            $resource->title = $request->input('category'); 
            $resource->brief = $request->input('brief');
            $resource->author = $request->input('author');
            $resource->link = $request->input('link');
            // $resource->file_name = $request->input('author'); 
            $resource->image = 'storage/resources/' . 'author';
            
            $resource->save();
        } else {
            return redirect()->back()->with('error', 'No image uploaded.');
        }
        
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
