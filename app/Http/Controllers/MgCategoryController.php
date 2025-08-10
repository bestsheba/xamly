<?php

namespace App\Http\Controllers;

use App\Models\MgCategory;
use Illuminate\Http\Request;

class MgCategoryController extends Controller
{
    public function index()
    {
        $mgCategory = MgCategory::all();
        return view('admin.mgCategory.index', compact('mgCategory'));
    }

    public function create()
    {
        $mgCategory = MgCategory::all();
        return view('admin.mgCategory.create', compact('mgCategory'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:mg_categories,name',
        ]);
        MgCategory::create($request->all());
        return redirect()->route('admin.mgCategories.index');
    }

    public function show(MgCategory $category)
    {
        return view('admin.mgCategory.show', compact('category'));
    }

  public function edit(MgCategory $mgCategory)
{
    $allCategories = MgCategory::all();
    return view('admin.mgCategory.edit', compact('mgCategory', 'allCategories'));
}

    public function update(Request $request, MgCategory $mgCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:mg_categories,name,' . $mgCategory->id,
        ]);
        $mgCategory->update($request->all());
        return redirect()->route('admin.mgCategories.index');
    }

    public function destroy(MgCategory $mgCategory)
    {
        $mgCategory->delete();
        return redirect()->route('admin.mgCategories.index');
    }
}
