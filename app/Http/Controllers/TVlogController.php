<?php

namespace App\Http\Controllers;

use App\Models\TVlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TVlogController extends Controller
{
    public function index()
    {
        $t_vlogs = TVlog::ordered()->paginate(10);
        return view('admin.t_vlogs.index', compact('t_vlogs'));
    }

    public function create()
    {
        return view('admin.t_vlogs.create');
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

        TVlog::create($validator->validated());

        return redirect()->route('admin.t_vlogs.index')
            ->with('success', 'TVlog created successfully!');
    }


    public function edit(TVlog $tVlog)
    {
        return view('admin.t_vlogs.edit', compact('tVlog'));
    }

    public function update(Request $request, TVlog $song)
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

        $song->update($request->all());

        return redirect()->route('admin.t_vlogs.index')
            ->with('success', 'TVlog updated successfully!');
    }

    public function destroy(TVlog $song)
    {
        $song->delete();

        return redirect()->route('admin.t_vlogs.index')
            ->with('success', 'TVlog deleted successfully!');
    }

    public function reorder(Request $request)
    {
        $request->validate([
            't_vlogs' => 'required|array',
            't_vlogs.*.id' => 'required|exists:t_vlogs,id',
            't_vlogs.*.order' => 'required|integer|min:0',
        ]);

        foreach ($request->t_vlogs as $songData) {
            TVlog::where('id', $songData['id'])->update(['order' => $songData['order']]);
        }

        return response()->json(['success' => true]);
    }

    public function loadMore(Request $request)
    {
        $page = $request->get('page', 1);
        $perPage = 6;
        $offset = ($page - 1) * $perPage;

        $t_vlogs = TVlog::activeOrdered()
            ->skip($offset)
            ->take($perPage)
            ->get();

        return response()->json([
            't_vlogs' => $t_vlogs,
            'hasMore' => $t_vlogs->count() === $perPage,
            'nextPage' => $page + 1
        ]);
    }
}
