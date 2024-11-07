<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Type;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::with('type')->get(); // Include anche il tipo associato
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        return view('admin.projects.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'technologies' => 'nullable|array',  // Assicurati che venga passato un array di ID delle tecnologie
            'technologies.*' => 'exists:technologies,id',  // Verifica che le tecnologie esistano nella tabella technologies
        ]);

        // Crea il progetto
        $project = Project::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        // Associa le tecnologie al progetto (se ci sono)
        if ($request->has('technologies')) {
            $project->technologies()->attach($request->input('technologies'));
        }

        return redirect()->route('admin.projects.index')->with('success', 'Progetto creato con successo!');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $project = Project::with('type')->findOrFail($id);
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $types = Type::all();
        return view('admin.projects.edit', compact('project', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'technologies' => 'nullable|array',
            'technologies.*' => 'exists:technologies,id',
        ]);

        // Aggiorna il progetto
        $project->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        // Aggiorna le tecnologie associate al progetto
        if ($request->has('technologies')) {
            $project->technologies()->sync($request->input('technologies'));
        }

        return redirect()->route('admin.projects.index')->with('success', 'Progetto aggiornato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Progetto eliminato con successo');
    }
}