<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function create()
    {
        return view('createproject');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'projectName' => 'required',
            'siteManager' => 'required',
            'investCapital' => 'required|numeric',
            'investNonCapital' => 'required|numeric',
            'depreciation' => 'required|numeric',
            'tax' => 'required|numeric',
        ]);

        $project = \App\Models\Project::create([
            'project_name' => $validated['projectName'],
            'site_manager' => $validated['siteManager'],
            'invest_capital' => $validated['investCapital'],
            'invest_non_capital' => $validated['investNonCapital'],
            'depreciation' => $validated['depreciation'],
            'tax' => $validated['tax'],
        ]);

        // Redirect ke halaman detail project sesuai id
        return redirect()->route('projectdetail.index', $project->id)
            ->with('success', 'Project created successfully!');
    }

    public function index()
    {
        // Get the latest project
        $project = Project::latest()->first();
        return view('projectdata', compact('project'));
    }
    public function destroy(\App\Models\Project $project)
    {
        $project->delete();
        return redirect('/')->with('success', 'Project deleted successfully.');
    }
}
