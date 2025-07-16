<?php

namespace App\Http\Controllers;

use App\Models\LatestInfo;
use Illuminate\Http\Request;

class LatestInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $latestInfos = LatestInfo::all();
        return view('editor.latest_infos.index', compact('latestInfos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('editor.latest_infos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string',
            'date' => 'required|date',
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $data['image'] = $imagePath;
        }

        LatestInfo::create($data);

        return redirect()->route('latest_infos.index')->with('success', 'Info successfully created.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LatestInfo  $latestInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(LatestInfo $latestInfo)
    {
        return view('editor.latest_infos.edit', compact('latestInfo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LatestInfo  $latestInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LatestInfo $latestInfo)
    {
        $request->validate([
            'category' => 'required|string',
            'date' => 'required|date',
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $data['image'] = $imagePath;
        }

        $latestInfo->update($data);

        return redirect()->route('latest_infos.index')->with('success', 'Info successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LatestInfo  $latestInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(LatestInfo $latestInfo)
    {
        $latestInfo->delete();

        return redirect()->route('latest_infos.index')->with('success', 'Info successfully deleted.');
    }

    public function showLatestInfos()
    {
        $LatestInfos = LatestInfo::all();

        return view('info.infoterkini', compact('LatestInfos'));
    }
}
