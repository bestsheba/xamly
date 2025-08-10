@extends('layouts.admin')
@section('title', 'Category Create')
@push('styles')
    {{-- styles --}}
@endpush

@section('content')
    <section class="mt-16">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold mb-4">Music Gallery Categories</h1>
            <a href="{{ route('admin.mgCategories.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create Category</a>
            <table class="min-w-full bg-white mt-4">
                <thead>
                    <tr>
                        <th class="py-2">Name</th>
                        <th class="py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mgCategory as $category)
                        <tr>
                            <td class="border px-4 py-2">{{ $category->name }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('admin.mgCategories.show', $category->id) }}" class="text-blue-500">View</a>
                                <a href="{{ route('admin.mgCategories.edit', $category->id) }}" class="text-yellow-500">Edit</a>
                                <form action="{{ route('admin.mgCategories.destroy', $category->id) }}" method="POST"
                                    class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
