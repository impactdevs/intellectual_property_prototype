<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Templates;
use Illuminate\View\View;

class TemplatesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View 
    {
        //fetching all templates
        $templates = Templates::all();
        return view ('templates.index')->with('templates', $templates);
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
        //storing into db
        $input = $request->all();
        Template::create($input);
        return redirect('template')->with('flash_message', 'Template has been added successfully');

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
        $template = Template::finde($id);
        $input = $request->all();
        $template ->update($input);
        return redirect ('template')->with('flash_message', 'template updated');

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
