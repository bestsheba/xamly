@extends('layouts.admin')
@section('title', 'Category Create')
@push('styles')
    {{-- styles --}}
@endpush

@section('content')
    <section class="mt-16">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold mb-4">Edit Category</h1>
            <form action="{{ route('admin.mgCategories.update', $mgCategory->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label class="block text-gray-700">Name</label>
                    <input type="text" name="name" class="border rounded w-full py-2 px-3" value="{{ $mgCategory->name }}"
                        required>
                </div>
                <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Update</button>
            </form>
        </div>
    </section>
@endsection
