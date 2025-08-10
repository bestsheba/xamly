@extends('layouts.admin')

@section('title', 'Category Create')

@push('styles')
    {{-- styles --}}
@endpush

@section('content')
    <section class="mt-16">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold mb-4">Create Category</h1>
            <form action="{{ route('admin.mgCategories.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700">Name</label>
                    <input type="text" name="name" class="border rounded w-full py-2 px-3" required>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create</button>
            </form>
        </div>
    </section>
@endsection
