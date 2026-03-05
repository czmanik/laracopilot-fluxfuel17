<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Client;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        if (!session('admin_logged_in')) return redirect()->route('admin.login');
        $projects = Project::with('client')->orderBy('created_at', 'desc')->paginate(15);
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        if (!session('admin_logged_in')) return redirect()->route('admin.login');
        $clients = Client::orderBy('name')->get();
        return view('admin.projects.create', compact('clients'));
    }

    public function store(Request $request)
    {
        if (!session('admin_logged_in')) return redirect()->route('admin.login');
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'client_id' => 'nullable|exists:clients,id',
            'description' => 'nullable|string',
            'technology' => 'nullable|string|max:255',
            'status' => 'required|in:planning,active,completed,paused',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'budget' => 'nullable|numeric|min:0',
            'url' => 'nullable|url'
        ]);
        Project::create($validated);
        return redirect()->route('admin.projects.index')->with('success', 'Projekt byl úspěšně vytvořen.');
    }

    public function edit($id)
    {
        if (!session('admin_logged_in')) return redirect()->route('admin.login');
        $project = Project::findOrFail($id);
        $clients = Client::orderBy('name')->get();
        return view('admin.projects.edit', compact('project', 'clients'));
    }

    public function update(Request $request, $id)
    {
        if (!session('admin_logged_in')) return redirect()->route('admin.login');
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'client_id' => 'nullable|exists:clients,id',
            'description' => 'nullable|string',
            'technology' => 'nullable|string|max:255',
            'status' => 'required|in:planning,active,completed,paused',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'budget' => 'nullable|numeric|min:0',
            'url' => 'nullable|url'
        ]);
        $project = Project::findOrFail($id);
        $project->update($validated);
        return redirect()->route('admin.projects.index')->with('success', 'Projekt byl úspěšně upraven.');
    }

    public function destroy($id)
    {
        if (!session('admin_logged_in')) return redirect()->route('admin.login');
        Project::findOrFail($id)->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Projekt byl smazán.');
    }
}