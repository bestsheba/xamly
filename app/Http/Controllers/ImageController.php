<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::ordered()->paginate(12);
        return view('admin.images.index', compact('images'));
    }

    public function create()
    {
        return view('admin.images.create');
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
        $imagePath = $imageFile->store('images', 'public');

        Image::create([
            'image' => $imagePath,
            'order' => $request->order ?? 0,
        ]);

        return redirect()->route('admin.images.index')->with('success', 'Image uploaded successfully!');
    }

    public function edit(Image $image)
    {
        return view('admin.images.edit', compact('image'));
    }

    public function update(Request $request, Image $image)
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
            $data['image'] = $imageFile->store('images', 'public');
        }

        $image->update($data);

        return redirect()->route('admin.images.index')->with('success', 'Image updated successfully!');
    }

    public function destroy(Image $image)
    {
        if ($image->image_path && Storage::disk('public')->exists($image->image_path)) {
            Storage::disk('public')->delete($image->image_path);
        }
        
        $image->delete();

        return redirect()->route('admin.images.index')->with('success', 'Image deleted successfully!');
    }

    // API endpoint for load more functionality
    public function loadMore(Request $request)
    {
        $page = $request->get('page', 1);
        $perPage = 2;

        $images = Image::ordered()
            ->paginate($perPage, ['*'], 'page', $page);
        if ($request->ajax()) {
            return response()->json([
                'images' => $images->items(),
                'hasMorePages' => $images->hasMorePages(),
                'nextPage' => $images->currentPage() + 1
            ]);
        }

        return view('partials.image-grid', compact('images'));
    }
} 