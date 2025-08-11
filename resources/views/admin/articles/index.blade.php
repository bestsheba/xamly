@extends('layouts.admin')

@section('title', 'Articles')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Header -->
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Articles</h1>
        <a href="{{ route('admin.articles.create') }}" 
           class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-lg transition-colors">
            Create New Article
        </a>
    </div>

    <!-- Success Message -->
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif

    <!-- Articles Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
        @forelse($articles as $article)
            <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                @if($article->image)
                    <img src="{{ Storage::url($article->image) }}" 
                         alt="{{ $article->title }}" 
                         class="w-full h-48 object-cover">
                @else
                    <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                        <span class="text-gray-500">No Image</span>
                    </div>
                @endif
                
                <div class="p-6">
                    <div class="text-sm text-gray-500 mb-2">{{ $article->formatted_date }}</div>
                    <h3 class="text-xl font-bold text-green-600 mb-3">{{ $article->title }}</h3>
                    <p class="text-gray-600 mb-4">{{ $article->excerpt }}</p>
                    
                    <div class="flex justify-between items-center">
                        <a href="{{ route('admin.articles.show', $article) }}" 
                           class="text-green-600 hover:underline">Read More →</a>
                        
                        <div class="flex space-x-2">
                            <a href="{{ route('admin.articles.edit', $article) }}" 
                               class="text-blue-600 hover:text-blue-800">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                            </a>

                            <form action="{{ route('admin.articles.destroy', $article) }}" 
                                  method="POST" 
                                  onsubmit="return confirm('Are you sure you want to delete this article?')"
                                  class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                              d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    @if($article->is_published)
                        <span class="inline-block bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full mt-2">Published</span>
                    @else
                        <span class="inline-block bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full mt-2">Draft</span>
                    @endif
                </div>
            </article>
        @empty
            <div class="col-span-full text-center py-12">
                <p class="text-gray-500 text-lg">No articles found.</p>
                <a href="{{ route('admin.articles.create') }}" 
                   class="text-green-600 hover:underline mt-2 inline-block">Create your first article</a>
            </div>
        @endforelse
    </div>

    <!-- Pagination -->
    {{ $articles->links() }}
</div>
@endsection