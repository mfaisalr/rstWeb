<?php

namespace App\Http\Controllers;

use App\Models\ActivityPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActivityPlanController extends Controller
{
    // Display a listing of the activity plans.
    public function index()
    {
        $activityPlans = ActivityPlan::all();
        return view('admin.activity_plans.index', compact('activityPlans'));
    }

    // Show the form for creating a new activity plan.
    public function create()
    {
        return view('admin.activity_plans.create');
    }

    // Store a newly created activity plan in the database.
    public function store(Request $request)
    {
        $request->validate([
            'activity_date' => 'required|date',
            'activity_name' => 'required|string|max:255',
            'description' => 'required',
            'attached_file' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:2048',
        ]);

        $filePath = null;
        if ($request->hasFile('attached_file')) {
            $filePath = $request->file('attached_file')->store('activity_plan_files', 'public');
        }

        ActivityPlan::create([
            'activity_date' => $request->activity_date,
            'activity_name' => $request->activity_name,
            'description' => $request->description,
            'attached_file' => $filePath,
        ]);

        return redirect()->route('activity_plans.index')->with('success', 'Activity Plan successfully added.');
    }

    // Show the specified activity plan.
    public function show(ActivityPlan $activityPlan)
    {
        return view('admin.activity_plans.show', compact('activityPlan'));
    }

    // Show the form for editing the specified activity plan.
    public function edit(ActivityPlan $activityPlan)
    {
        return view('admin.activity_plans.edit', compact('activityPlan'));
    }

    // Update the specified activity plan in the database.
    public function update(Request $request, ActivityPlan $activityPlan)
    {
        $request->validate([
            'activity_date' => 'required|date',
            'activity_name' => 'required|string|max:255',
            'description' => 'required',
            'attached_file' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:2048',
        ]);

        if ($request->hasFile('attached_file')) {
            // Delete old file
            if ($activityPlan->attached_file) {
                Storage::disk('public')->delete($activityPlan->attached_file);
            }
            $filePath = $request->file('attached_file')->store('activity_plan_files', 'public');
            $activityPlan->attached_file = $filePath;
        }

        $activityPlan->update([
            'activity_date' => $request->activity_date,
            'activity_name' => $request->activity_name,
            'description' => $request->description,
            'attached_file' => $activityPlan->attached_file,
        ]);

        return redirect()->route('activity_plans.index')->with('success', 'Activity Plan successfully updated.');
    }

    public function destroy(ActivityPlan $activityPlan)
    {
        if ($activityPlan->attached_file) {
            Storage::disk('public')->delete($activityPlan->attached_file);
        }
        $activityPlan->delete();
        return redirect()->route('activity_plans.index')->with('success', 'Activity Plan successfully deleted.');
    }

    public function showActivityPlans()
    {
        $activityPlans = ActivityPlan::all();

        return view('info.rencanakegiatan', compact('activityPlans'));
    }


    //EDITOR

    // Display a listing of the activity plans.
    public function indexEditor()
    {
        $activityPlans = ActivityPlan::all();
        return view('editor.activity_plans.index', compact('activityPlans'));
    }

    // Show the form for creating a new activity plan.
    public function createEditor()
    {
        return view('editor.activity_plans.create');
    }

    // Store a newly created activity plan in the database.
    public function storeEditor(Request $request)
    {
        $request->validate([
            'activity_date' => 'required|date',
            'activity_name' => 'required|string|max:255',
            'description' => 'required',
            'attached_file' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:2048',
        ]);

        $filePath = null;
        if ($request->hasFile('attached_file')) {
            $filePath = $request->file('attached_file')->store('activity_plan_files', 'public');
        }

        ActivityPlan::create([
            'activity_date' => $request->activity_date,
            'activity_name' => $request->activity_name,
            'description' => $request->description,
            'attached_file' => $filePath,
        ]);

        return redirect()->route('activity_plans.index')->with('success', 'Activity Plan successfully added.');
    }

    // Show the specified activity plan.
    public function showEditor(ActivityPlan $activityPlan)
    {
        return view('editor.activity_plans.show', compact('activityPlan'));
    }

    // Show the form for editing the specified activity plan.
    public function editEditor(ActivityPlan $activityPlan)
    {
        return view('editor.activity_plans.edit', compact('activityPlan'));
    }

    // Update the specified activity plan in the database.
    public function updateEditor(Request $request, ActivityPlan $activityPlan)
    {
        $request->validate([
            'activity_date' => 'required|date',
            'activity_name' => 'required|string|max:255',
            'description' => 'required',
            'attached_file' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:2048',
        ]);

        if ($request->hasFile('attached_file')) {
            // Delete old file
            if ($activityPlan->attached_file) {
                Storage::disk('public')->delete($activityPlan->attached_file);
            }
            $filePath = $request->file('attached_file')->store('activity_plan_files', 'public');
            $activityPlan->attached_file = $filePath;
        }

        $activityPlan->update([
            'activity_date' => $request->activity_date,
            'activity_name' => $request->activity_name,
            'description' => $request->description,
            'attached_file' => $activityPlan->attached_file,
        ]);

        return redirect()->route('activity_plans.index')->with('success', 'Activity Plan successfully updated.');
    }

    public function destroyEditor(ActivityPlan $activityPlan)
    {
        if ($activityPlan->attached_file) {
            Storage::disk('public')->delete($activityPlan->attached_file);
        }
        $activityPlan->delete();
        return redirect()->route('activity_plans.index')->with('success', 'Activity Plan successfully deleted.');
    }

    public function showActivityPlansEditor()
    {
        $activityPlans = ActivityPlan::all();

        return view('info.rencanakegiatan', compact('activityPlans'));
    }

}
