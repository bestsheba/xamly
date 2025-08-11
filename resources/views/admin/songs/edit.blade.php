@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-900">Edit Song</h1>
            <a href="{{ route('admin.songs.index') }}" 
               class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg transition-colors">
                Back to Songs
            </a>
        </div>

        @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="bg-white shadow-md rounded-lg p-6">
            <form action="{{ route('admin.songs.update', $song) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="youtube_url" class="block text-sm font-medium text-gray-700 mb-2">YouTube URL *</label>
                    <input type="url" 
                           id="youtube_url" 
                           name="youtube_url" 
                           value="{{ old('youtube_url', $song->youtube_url) }}"
                           placeholder="https://www.youtube.com/watch?v=..."
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                           required>
                    <p class="text-sm text-gray-500 mt-1">Enter a valid YouTube video URL</p>
                </div>

                <div class="mb-6">
                    <label for="order" class="block text-sm font-medium text-gray-700 mb-2">Display Order</label>
                    <input type="number" 
                           id="order" 
                           name="order" 
                           value="{{ old('order', $song->order) }}"
                           min="0"
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <p class="text-sm text-gray-500 mt-1">Lower numbers appear first</p>
                </div>

                <div class="flex justify-end space-x-3">
                    <a href="{{ route('admin.songs.index') }}" 
                       class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-lg transition-colors">
                        Cancel
                    </a>
                    <button type="submit" 
                            class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition-colors">
                        Update Song
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
