@extends('layouts.admin')
@section('content')
    <div class="mx-auto">
        <h1 class="text-2xl font-semibold text-gray-900 mb-6">Admin Dashboard</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <!-- Total Images -->
            <div class="p-6 bg-blue-100 border-l-4 border-blue-500 text-blue-700 rounded-lg shadow">
                <h3 class="text-lg font-semibold">Total Images</h3>
                <p class="text-3xl font-bold">{{ $totalImages ?? 0 }}</p>
                <a href="{{ route('admin.images.index') }}" class="text-blue-600 hover:text-blue-800 text-sm">Manage Images →</a>
            </div>

            <!-- Active Images -->
            <div class="p-6 bg-green-100 border-l-4 border-green-500 text-green-700 rounded-lg shadow">
                <h3 class="text-lg font-semibold">Active Images</h3>
                <p class="text-3xl font-bold">{{ $activeImages ?? 0 }}</p>
                <a href="{{ route('admin.images.index') }}" class="text-green-600 hover:text-green-800 text-sm">View All →</a>
            </div>

            <!-- Quick Actions -->
            <div class="p-6 bg-purple-100 border-l-4 border-purple-500 text-purple-700 rounded-lg shadow">
                <h3 class="text-lg font-semibold">Quick Actions</h3>
                <div class="mt-3 space-y-2">
                    <a href="{{ route('admin.images.create') }}" 
                       class="block bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded text-sm text-center">
                        Add New Image
                    </a>
                </div>
            </div>
        </div>

        <!-- Recent Images -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-semibold text-gray-900 mb-4">Recent Images</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                @forelse($recentImages ?? [] as $image)
                    <div class="relative group">
                        <img src="{{ Storage::url($image->image_path) }}" 
                             alt="Recent Image" 
                             class="w-full h-24 object-cover rounded-lg">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-200 rounded-lg flex items-center justify-center">
                            <a href="{{ route('admin.images.edit', $image) }}" 
                               class="text-white opacity-0 group-hover:opacity-100 text-sm bg-blue-600 px-2 py-1 rounded">
                                Edit
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center text-gray-500 py-8">
                        No images uploaded yet. 
                        <a href="{{ route('admin.images.create') }}" class="text-blue-600 hover:text-blue-800">Upload your first image</a>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
