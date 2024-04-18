<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resources;
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
        return view('resources.create');
    }

    public function store(Request $request): RedirectResponse
    {
    // Validating the request data
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'brief' => 'required|string',
        'author' => 'required|string|max:255',
        'link' => 'required|url',
    ]);
 
    // Creating the newly created resource
    Resources::create($validatedData);
    
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
