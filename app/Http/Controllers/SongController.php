<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SongController extends Controller
{
    public function index()
    {
        $songs = Song::ordered()->paginate(10);
        return view('admin.songs.index', compact('songs'));
    }

    public function create()
    {
        return view('admin.songs.create');
    }

public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'youtube_url' => [
            'required',
            'url',
            'regex:/^(https?:\/\/)?(www\.)?(youtube\.com|youtu\.be)\/.+$/'
        ],
        'order' => 'nullable|integer|min:0',
    ]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    Song::create($validator->validated());

    return redirect()->route('admin.songs.index')
        ->with('success', 'Song created successfully!');
}


    public function edit(Song $song)
    {
        return view('admin.songs.edit', compact('song'));
    }

    public function update(Request $request, Song $song)
    {
        $validator = Validator::make($request->all(), [
            'youtube_url' => 'required|url|regex:/^(https?:\/\/)?(www\.)?(youtube\.com|youtu\.be)\/.+/',
            'order' => 'nullable|integer|min:0',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $song->update($request->all());

        return redirect()->route('admin.songs.index')
            ->with('success', 'Song updated successfully!');
    }

    public function destroy(Song $song)
    {
        $song->delete();

        return redirect()->route('admin.songs.index')
            ->with('success', 'Song deleted successfully!');
    }

    public function reorder(Request $request)
    {
        $request->validate([
            'songs' => 'required|array',
            'songs.*.id' => 'required|exists:songs,id',
            'songs.*.order' => 'required|integer|min:0',
        ]);

        foreach ($request->songs as $songData) {
            Song::where('id', $songData['id'])->update(['order' => $songData['order']]);
        }

        return response()->json(['success' => true]);
    }

    public function loadMore(Request $request)
    {
        $page = $request->get('page', 1);
        $perPage = 6;
        $offset = ($page - 1) * $perPage;

        $songs = Song::activeOrdered()
            ->skip($offset)
            ->take($perPage)
            ->get();

        return response()->json([
            'songs' => $songs,
            'hasMore' => $songs->count() === $perPage,
            'nextPage' => $page + 1
        ]);
    }
}
