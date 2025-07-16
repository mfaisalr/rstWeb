<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::all();
        return view('editor.albums.index', compact('albums'));
    }

    public function create()
    {
        return view('editor.albums.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'media.*' => 'nullable|mimes:jpeg,png,jpg,gif,svg,mp4,mkv|max:10240', // Supports image and video files
        ]);

        $album = Album::create($request->only('title', 'description'));

        if ($request->hasFile('media')) {
            foreach ($request->file('media') as $media) {
                $mediaPath = $media->store('media', 'public');
                $type = in_array($media->getClientOriginalExtension(), ['mp4', 'mkv']) ? 'video' : 'photo';

                Media::create([
                    'album_id' => $album->id,
                    'media_path' => $mediaPath,
                    'type' => $type,
                ]);
            }
        }

        return redirect()->route('albums.index')->with('success', 'Album successfully created.');
    }

    public function show(Album $album)
    {
        return view('editor.albums.show', compact('album'));
    }

    public function edit(Album $album)
    {
        return view('editor.albums.edit', compact('album'));
    }

    public function update(Request $request, Album $album)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'media.*' => 'nullable|mimes:jpeg,png,jpg,gif,svg,mp4,mkv|max:10240',
        ]);

        // Update album information
        $album->update($request->only('title', 'description'));

        // Handle new media upload
        if ($request->hasFile('media')) {
            foreach ($request->file('media') as $media) {
                $mediaPath = $media->store('media', 'public');
                $type = in_array($media->getClientOriginalExtension(), ['mp4', 'mkv']) ? 'video' : 'photo';

                Media::create([
                    'album_id' => $album->id,
                    'media_path' => $mediaPath,
                    'type' => $type,
                ]);
            }
        }

        return redirect()->route('albums.index')->with('success', 'Album successfully updated.');
    }

    public function destroy(Album $album)
    {
        // Delete all associated media files
        foreach ($album->media as $media) {
            if (Storage::disk('public')->exists($media->media_path)) {
                Storage::disk('public')->delete($media->media_path);
            }
            $media->delete();
        }

        // Delete the album
        $album->delete();
        return redirect()->route('albums.index')->with('success', 'Album and associated media deleted successfully.');
    }

    public function deleteMedia($id)
    {
        $media = Media::findOrFail($id);

        if (Storage::disk('public')->exists($media->media_path)) {
            Storage::disk('public')->delete($media->media_path);
        }

        $media->delete();

        return back()->with('success', 'Media deleted successfully.');
    }


    //HOMEPAGE//

    public function showGallery()
    {
        $albums = Album::with('media')->get();

        return view('galeri', compact('albums'));
    }

    public function viewAlbum($id)
{
    $album = Album::with('media')->findOrFail($id);

    return view('albums.view', compact('album'));
}
}