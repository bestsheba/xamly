@extends('layouts.admin')

@section('title', 'Edit Article')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Edit Article</h1>
            <a href="{{ route('admin.articles.index') }}" 
               class="text-gray-600 hover:text-gray-800 flex items-center">
                ← Back to Articles
            </a>
        </div>

        <!-- Form -->
        <div class="bg-white rounded-lg shadow-lg p-8">
            <form action="{{ route('admin.articles.update', $article) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Title -->
                <div class="mb-6">
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                    <input type="text" 
                           id="title" 
                           name="title" 
                           value="{{ old('title', $article->title) }}"
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent @error('title') border-red-500 @enderror"
                           required>
                    @error('title')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Excerpt -->
                <div class="mb-6">
                    <label for="excerpt" class="block text-sm font-medium text-gray-700 mb-2">Excerpt</label>
                    <textarea id="excerpt" 
                              name="excerpt" 
                              rows="3"
                              class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent @error('excerpt') border-red-500 @enderror"
                              required>{{ old('excerpt', $article->excerpt) }}</textarea>
                    @error('excerpt')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Content -->
                <div class="mb-6">
                    <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Content</label>
                    <textarea id="content" 
                              name="content" 
                              rows="15"
                              class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent @error('content') border-red-500 @enderror"
                              required>{{ old('content', $article->content) }}</textarea>
                    @error('content')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Current Image -->
                @if($article->image)
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Current Image</label>
                    <img src="{{ Storage::url($article->image) }}" 
                         alt="Current image" 
                         class="w-32 h-32 object-cover rounded-lg">
                </div>
                @endif

                <!-- New Image -->
                <div class="mb-6">
                    <label for="image" class="block text-sm font-medium text-gray-700 mb-2">
                        {{ $article->image ? 'Replace Image' : 'Featured Image' }}
                    </label>
                    <input type="file" 
                           id="image" 
                           name="image" 
                           accept="image/*"
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent @error('image') border-red-500 @enderror">
                    @error('image')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Published -->
                <div class="mb-8">
                    <label class="flex items-center">
                        <input type="checkbox" 
                               name="is_published" 
                               value="1" 
                               {{ old('is_published', $article->is_published) ? 'checked' : '' }}
                               class="rounded border-gray-300 text-green-600 focus:border-green-300 focus:ring focus:ring-green-200">
                        <span class="ml-2 text-sm text-gray-700">Published</span>
                    </label>
                </div>

                <!-- Submit Buttons -->
                <div class="flex justify-end space-x-4">
                    <a href="{{ route('admin.articles.index') }}" 
                       class="px-6 py-2 border border-gray-300 text-gray-700 rounded-md hover:bg-gray-50 transition-colors">
                        Cancel
                    </a>
                    <button type="submit" 
                            class="px-6 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition-colors">
                        Update Article
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- TinyMCE Script -->
<script src="https://cdn.tiny.cloud/1/xt1bofus2ngqydam358bggfzw1q9i3sqiz820u3zdnumqa02/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#content',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        height: 400,
        menubar: false,
        content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif; font-size: 14px; -webkit-font-smoothing: antialiased; }',
        skin: 'oxide',
        content_css: 'default',
        branding: false,
        promotion: false,
    });
</script>
@endsection