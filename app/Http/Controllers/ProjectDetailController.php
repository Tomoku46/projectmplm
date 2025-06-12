<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
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
        $lastYear = ProjectDetail::where('project_id', $project_id)->max('year');
        $nextYear = $lastYear ? $lastYear + 1 : 1;
        return view('addcashflow', compact('project', 'nextYear'));
    }

    // Simpan detail cashflow baru
    public function store(Request $request, $project_id)
    {
        $validated = $request->validate([
            'year' => 'required|integer',
            'production' => 'nullable|numeric',
            'income' => 'nullable|numeric',
            'operational' => 'nullable|numeric',
            'depreciation' => 'nullable|numeric',
            'tax' => 'nullable|numeric',
            'taxable_income' => 'nullable|numeric',
            'ncf' => 'nullable|numeric',
        ]);
        $validated['project_id'] = $project_id;
        \App\Models\ProjectDetail::create($validated);

        return redirect()->route('projectdetail.index', $project_id)
            ->with('success', 'Cashflow detail added.');
    }

    // Form edit detail cashflow
    public function edit($id)
    {
        $detail = \App\Models\ProjectDetail::findOrFail($id);
        $project = $detail->project; // pastikan relasi project() ada di model ProjectDetail
        return view('edit', compact('detail', 'project'));
    }

    // Update detail cashflow
    public function update(Request $request, $id)
    {
        $detail = \App\Models\ProjectDetail::findOrFail($id);
        $validated = $request->validate([
            'year' => 'required|integer',
            'production' => 'nullable|numeric',
            'income' => 'nullable|numeric',
            'operational' => 'nullable|numeric',
            'depreciation' => 'nullable|numeric',
            'taxable_income' => 'nullable|numeric',
            'tax' => 'nullable|numeric',
            'ncf' => 'nullable|numeric',
        ]);
        $detail->update($validated);
        return redirect()->route('projectdetail.index', $detail->project_id)->with('success', 'Cashflow updated!');
    }

    // Hapus detail cashflow
    public function destroy($id)
    {
        $detail = \App\Models\ProjectDetail::findOrFail($id);
        $project_id = $detail->project_id;
        $detail->delete();
        return redirect()->route('projectdetail.index', $project_id)->with('success', 'Cashflow deleted!');
    }

    // Ekspor ke PDF
    public function exportPdf(Request $request, $project_id)
    {
        $project = \App\Models\Project::findOrFail($project_id);
        $projectdetails = \App\Models\ProjectDetail::where('project_id', $project_id)->get();
        $lineChart = $request->input('line_chart');
        $barChart = $request->input('bar_chart');

        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('export_cashflow_pdf', compact('project', 'projectdetails', 'lineChart', 'barChart'));
        return response($pdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="cashflow-details-with-chart.pdf"',
        ]);
    }
}