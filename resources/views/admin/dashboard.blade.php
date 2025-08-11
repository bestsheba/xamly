@extends('layouts.admin')
@section('content')
    <div class="mx-auto">
        <h1 class="text-2xl font-semibold text-gray-900 mb-6">Admin Dashboard</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
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

            <!-- Total Songs -->
            <div class="p-6 bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 rounded-lg shadow">
                <h3 class="text-lg font-semibold">Total Songs</h3>
                <p class="text-3xl font-bold">{{ $totalSongs ?? 0 }}</p>
                <a href="{{ route('admin.songs.index') }}" class="text-yellow-600 hover:text-yellow-800 text-sm">Manage Songs →</a>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <div class="p-6 bg-purple-100 border-l-4 border-purple-500 text-purple-700 rounded-lg shadow">
                <h3 class="text-lg font-semibold">Image Actions</h3>
                <div class="mt-3 space-y-2">
                    <a href="{{ route('admin.images.create') }}" 
                       class="block bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded text-sm text-center">
                        Add New Image
                    </a>
                </div>
            </div>

            <div class="p-6 bg-indigo-100 border-l-4 border-indigo-500 text-indigo-700 rounded-lg shadow">
                <h3 class="text-lg font-semibold">Song Actions</h3>
                <div class="mt-3 space-y-2">
                    <a href="{{ route('admin.songs.create') }}" 
                       class="block bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded text-sm text-center">
                        Add New Song
                    </a>
                </div>
            </div>
        </div>

        <!-- Recent Content -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
            <!-- Recent Images -->
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-xl font-semibold text-gray-900 mb-4">Recent Images</h2>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
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

            <!-- Recent Songs -->
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-xl font-semibold text-gray-900 mb-4">Recent Songs</h2>
                <div class="space-y-3">
                    @forelse($recentSongs ?? [] as $song)
                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                            <div class="flex-1">
                                <h3 class="font-medium text-gray-900">{{ $song->title }}</h3>
                                <p class="text-sm text-gray-500">{{ Str::limit($song->youtube_url, 40) }}</p>
                            </div>
                            <div class="flex space-x-2">
                                <a href="{{ route('admin.songs.edit', $song) }}" 
                                   class="text-blue-600 hover:text-blue-800 text-sm">Edit</a>
                                <span class="px-2 py-1 text-xs rounded-full {{ $song->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    {{ $song->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </div>
                        </div>
                    @empty
                        <div class="text-center text-gray-500 py-8">
                            No songs added yet. 
                            <a href="{{ route('admin.songs.create') }}" class="text-blue-600 hover:text-blue-800">Add your first song</a>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
