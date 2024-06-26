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

    
    public function show($slug): View 
    {
        // Displaying details of a specific resource
        $resources = Resources::where('slug', $slug)->first();

        //abort if the resource does not exist
        if(!$resources)
        {
            abort(404);
        }

        //categories 
        // $categories = IntellectualProperty::pluck('category')->all();
        // $categoryCount = count($categories);

        // Fetch all categories and their counts
        $categoryCounts = IntellectualProperty::select('category', \DB::raw('count(*) as count'))
        ->groupBy('category')
        ->pluck('count', 'category');

        // Fetch all categories
        $categories = $categoryCounts->keys()->all();


        //dd($categories, $categoryCount);
       
        return view('website_components.blog-details', compact('resources','categories','categoryCounts'));
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
