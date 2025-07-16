<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::all();
        return view('admin.reports.index', compact('reports'));
    }

    public function create()
    {
        return view('admin.reports.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'full_name' => 'required|string|max:255',
            'work_unit' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'address' => 'required|string|max:500',
            'report' => 'required|string',
            'supporting_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'reportDetail' => 'required|in:corruption,gratification,conflict of interest',
        ]);

        $filePath = null;
        if ($request->hasFile('supporting_photo')) {
            $filePath = $request->file('supporting_photo')->store('reports', 'public');
        }

        Report::create([
            'email' => $request->email,
            'full_name' => $request->full_name,
            'work_unit' => $request->work_unit,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'report' => $request->report,
            'supporting_photo' => $filePath,
            'reportDetail' => $request->reportDetail,
        ]);

        return redirect()->route('reports.index')->with('success', 'Report created successfully.');
    }

    public function edit(Report $report)
    {
        return view('admin.reports.edit', compact('report'));
    }

    public function update(Request $request, Report $report)
    {
        $request->validate([
            'email' => 'required|email',
            'full_name' => 'required|string|max:255',
            'work_unit' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'address' => 'required|string|max:500',
            'report' => 'required|string',
            'supporting_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'reportDetail' => 'required|in:corruption,gratification,conflict of interest',
        ]);

        $filePath = $report->supporting_photo;
        if ($request->hasFile('supporting_photo')) {
            if ($filePath) {
                \Storage::disk('public')->delete($filePath);
            }

            $filePath = $request->file('supporting_photo')->store('reports', 'public');
        }

        $report->update([
            'email' => $request->email,
            'full_name' => $request->full_name,
            'work_unit' => $request->work_unit,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'report' => $request->report,
            'supporting_photo' => $filePath,
            'reportDetail' => $request->reportDetail,
        ]);

        return redirect()->route('reports.index')->with('success', 'Report updated successfully.');
    }

    public function destroy(Report $report)
    {
        if ($report->supporting_photo) {
            \Storage::disk('public')->delete($report->supporting_photo);
        }

        $report->delete();

        return redirect()->route('reports.index')->with('success', 'Report deleted successfully.');
    }


    //HOMEPAGE//
    public function createKorupsi()
    {
        return view('wbs');
    }

    public function storeKorupsi(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'full_name' => 'required|string|max:255',
            'work_unit' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'address' => 'required|string|max:500',
            'report' => 'required|string',
            'supporting_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $filePath = null;
        if ($request->hasFile('supporting_photo')) {
            $filePath = $request->file('supporting_photo')->store('reports', 'public');
        }

        Report::create([
            'email' => $request->email,
            'full_name' => $request->full_name,
            'work_unit' => $request->work_unit,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'report' => $request->report,
            'supporting_photo' => $filePath,
            'reportDetail' => 'corruption',
        ]);

        return redirect()->route('wbs')->with('success', 'Laporan telah berhasil dikirim.');
    }

    public function createGratifikasi()
    {
        return view('wbs');
    }

    public function storeGratifikasi(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'full_name' => 'required|string|max:255',
            'work_unit' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'address' => 'required|string|max:500',
            'report' => 'required|string',
            'supporting_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $filePath = null;
        if ($request->hasFile('supporting_photo')) {
            $filePath = $request->file('supporting_photo')->store('reports', 'public');
        }

        Report::create([
            'email' => $request->email,
            'full_name' => $request->full_name,
            'work_unit' => $request->work_unit,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'report' => $request->report,
            'supporting_photo' => $filePath,
            'reportDetail' => 'gratification',
        ]);

        return redirect()->route('wbs')->with('success', 'Laporan telah berhasil dikirim.');
    }

    public function createBenturanKepentingan()
    {
        return view('wbs');
    }

    public function storeBenturanKepentingan(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'full_name' => 'required|string|max:255',
            'work_unit' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'address' => 'required|string|max:500',
            'report' => 'required|string',
            'supporting_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $filePath = null;
        if ($request->hasFile('supporting_photo')) {
            $filePath = $request->file('supporting_photo')->store('reports', 'public');
        }

        Report::create([
            'email' => $request->email,
            'full_name' => $request->full_name,
            'work_unit' => $request->work_unit,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'report' => $request->report,
            'supporting_photo' => $filePath,
            'reportDetail' => 'conflict of interest',
        ]);

        return redirect()->route('wbs')->with('success', 'Laporan telah berhasil dikirim.');
    }

}
