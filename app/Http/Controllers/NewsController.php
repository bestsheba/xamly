<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::ordered()->paginate(12);
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'order' => 'nullable|integer|min:0',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $imageFile = $request->file('image');
        $imagePath = $imageFile->store('news', 'public');

        News::create([
            'image' => $imagePath,
            'order' => $request->order ?? 0,
        ]);

        return redirect()->route('admin.news.index')->with('success', 'News uploaded successfully!');
    }

    public function edit(News $image)
    {
        return view('admin.news.edit', compact('image'));
    }

    public function update(Request $request, News $image)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'order' => 'nullable|integer|min:0',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = [
            'order' => $request->order ?? 0,
        ];

        if ($request->hasFile('image')) {
            // Delete old image
            if ($image->image && Storage::disk('public')->exists($image->image)) {
                Storage::disk('public')->delete($image->image);
            }

            $imageFile = $request->file('image');
            $data['image'] = $imageFile->store('news', 'public');
        }

        $image->update($data);

        return redirect()->route('admin.news.index')->with('success', 'News updated successfully!');
    }

    public function destroy(News $image)
    {
        if ($image->image_path && Storage::disk('public')->exists($image->image_path)) {
            Storage::disk('public')->delete($image->image_path);
        }

        $image->delete();

        return redirect()->route('admin.news.index')->with('success', 'News deleted successfully!');
    }

    // API endpoint for load more functionality
    public function loadMore(Request $request)
    {
        $page = $request->get('page', 1);
        $perPage = 2;

        $news = News::ordered()
            ->paginate($perPage, ['*'], 'page', $page);
        if ($request->ajax()) {
            return response()->json([
                'news' => $news->items(),
                'hasMorePages' => $news->hasMorePages(),
                'nextPage' => $news->currentPage() + 1
            ]);
        }

        return view('partials.image-grid', compact('news'));
    }
}
