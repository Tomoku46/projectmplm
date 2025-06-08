<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectDetail;
use App\Models\Project;

class ProjectDetailController extends Controller
{
    // Tampilkan semua detail untuk satu project
    public function index($project_id)
    {
        $project = \App\Models\Project::findOrFail($project_id);
        $projectdetails = \App\Models\ProjectDetail::where('project_id', $project_id)->get();
        return view('projectdata', compact('project', 'projectdetails'));
    }

    // Form tambah detail cashflow
    public function create($project_id)
    {
        $project = Project::findOrFail($project_id);
        return view('addcashflow', compact('project'));
    }

    // Simpan detail cashflow baru
    public function store(Request $request, $project_id)
    {
        $validated = $request->validate([
            'year' => 'required|integer',
            'production' => 'nullable|numeric',
            'income' => 'nullable|numeric',
            'invest_capital' => 'nullable|numeric',
            'invest_non_capital' => 'nullable|numeric',
            'operational' => 'nullable|numeric',
            'depreciation' => 'nullable|numeric',
            'taxable_income' => 'nullable|numeric',
            'tax' => 'nullable|numeric',
            'ncf' => 'nullable|numeric',
        ]);
        $validated['project_id'] = $project_id;
        ProjectDetail::create($validated);

        return redirect()->route('projectdetail.index', $project_id)
            ->with('success', 'Cashflow detail added.');
    }

    // Form edit detail cashflow
    public function edit($id)
    {
        $detail = ProjectDetail::findOrFail($id);
        return view('editcashflow', compact('detail'));
    }

    // Update detail cashflow
    public function update(Request $request, $id)
    {
        $detail = ProjectDetail::findOrFail($id);
        $validated = $request->validate([
            'year' => 'required|integer',
            'production' => 'nullable|numeric',
            'income' => 'nullable|numeric',
            'invest_capital' => 'nullable|numeric',
            'invest_non_capital' => 'nullable|numeric',
            'operational' => 'nullable|numeric',
            'depreciation' => 'nullable|numeric',
            'taxable_income' => 'nullable|numeric',
            'tax' => 'nullable|numeric',
            'ncf' => 'nullable|numeric',
        ]);
        $detail->update($validated);

        return back()->with('success', 'Cashflow detail updated.');
    }

    // Hapus detail cashflow
    public function destroy($id)
    {
        $detail = ProjectDetail::findOrFail($id);
        $project_id = $detail->project_id;
        $detail->delete();

        return redirect()->route('projectdetail.index', $project_id)
            ->with('success', 'Cashflow detail deleted.');
    }
}