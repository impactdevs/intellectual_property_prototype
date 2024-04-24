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
        return view('website_components.blog', compact('resources'));
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
    
    $validated = $request->validate([
        'title'=>'required|max:255',
        'category'=>'required|max:150',
        'short_description'=>'required|max:255',
        'body'=>'required',
    ]);
    
    Resources::create( [
        'title'=>$request->title,
        'category'=>$request->category,
        'short_description'=>$request->short_description,
        'body'=>$request->body
    ]);

    // Redirecting the user to the index route for resources
    return redirect()->route('resources.index')->with('flash_message', 'Resource has been added successfully');
}

    
    

    public function show(string $id): View 
    {
        // Displaying details of a specific resource
        $resources = Resources::find($id);
        return view('website_components.blog-details')->with('resource', $resources);
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
