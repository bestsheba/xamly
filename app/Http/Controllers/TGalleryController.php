<?php

namespace App\Http\Controllers;

use App\Models\TGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TGalleryController extends Controller
{
    public function index()
    {
        $tgalleries = TGallery::ordered()->paginate(12);
        return view('admin.tgalleries.index', compact('tgalleries'));
    }

    public function create()
    {
        return view('admin.tgalleries.create');
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
        $imagePath = $imageFile->store('tgalleries', 'public');

        TGallery::create([
            'image' => $imagePath,
            'order' => $request->order ?? 0,
        ]);

        return redirect()->route('admin.tgalleries.index')->with('success', 'TGallery uploaded successfully!');
    }

    public function edit(TGallery $image)
    {
        return view('admin.tgalleries.edit', compact('image'));
    }

    public function update(Request $request, TGallery $image)
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
            $data['image'] = $imageFile->store('tgalleries', 'public');
        }

        $image->update($data);

        return redirect()->route('admin.tgalleries.index')->with('success', 'TGallery updated successfully!');
    }

    public function destroy(TGallery $image)
    {
        if ($image->image_path && Storage::disk('public')->exists($image->image_path)) {
            Storage::disk('public')->delete($image->image_path);
        }

        $image->delete();

        return redirect()->route('admin.tgalleries.index')->with('success', 'TGallery deleted successfully!');
    }

    // API endpoint for load more functionality
    public function loadMore(Request $request)
    {
        $page = $request->get('page', 1);
        $perPage = 6;

        $tgalleries = TGallery::ordered()
            ->paginate($perPage, ['*'], 'page', $page);
        if ($request->ajax()) {
            return response()->json([
                'tgalleries' => $tgalleries->items(),
                'hasMorePages' => $tgalleries->hasMorePages(),
                'nextPage' => $tgalleries->currentPage() + 1
            ]);
        }

        return view('partials.image-grid', compact('tgalleries'));
    }
}
