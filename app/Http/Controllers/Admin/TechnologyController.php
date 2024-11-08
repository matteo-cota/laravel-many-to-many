<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    public function index()
    {
        $technologies = Technology::all();
        return view('admin.technologies.index', compact('technologies'));
    }

    public function create()
    {
        return view('admin.technologies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:technologies'
        ]);

        Technology::create($request->all());

        return redirect()->route('admin.technologies.index')->with('success', 'Tecnologia creata con successo.');
    }

    public function show(Technology $technology)
    {
        return view('admin.technologies.show', compact('technology'));
    }

    public function edit(Technology $technology)
    {
        return view('admin.technologies.edit', compact('technology'));
    }

    public function update(Request $request, Technology $technology)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:technologies,name,' . $technology->id
        ]);

        $technology->update($request->all());

        return redirect()->route('admin.technologies.index')->with('success', 'Tecnologia aggiornata con successo.');
    }

    public function destroy(Technology $technology)
    {
        $technology->delete();

        return redirect()->route('admin.technologies.index')->with('success', 'Tecnologia eliminata con successo.');
    }
}