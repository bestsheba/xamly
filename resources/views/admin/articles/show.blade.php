@extends('layouts.admin')

@section('title', $article->title)

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <!-- Navigation -->
        <div class="mb-8">
            <a href="{{ route('admin.articles.index') }}" 
               class="text-gray-600 hover:text-gray-800 flex items-center">
                ← Back to Articles
            </a>
        </div>

        <!-- Article Header -->
        <article class="bg-white rounded-lg shadow-lg overflow-hidden">
            @if($article->image)
                <img src="{{ Storage::url($article->image) }}" 
                     alt="{{ $article->title }}" 
                     class="w-full h-64 md:h-96 object-cover">
            @endif

            <div class="p-8">
                <!-- Meta Information -->
                <div class="flex justify-between items-center mb-4">
                    <div class="text-sm text-gray-500">{{ $article->formatted_date }}</div>
                    
                    <div class="flex space-x-2">
                        <a href="{{ route('admin.articles.edit', $article) }}" 
                           class="text-blue-600 hover:text-blue-800 flex items-center space-x-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                      d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                            <span>Edit</span>
                        </a>

                        <form action="{{ route('admin.articles.destroy', $article) }}" 
                              method="POST" 
                              onsubmit="return confirm('Are you sure you want to delete this article?')"
                              class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800 flex items-center space-x-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                                <span>Delete</span>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Title -->
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">{{ $article->title }}</h1>

                <!-- Status Badge -->
                <div class="mb-6">
                    @if($article->is_published)
                        <span class="inline-block bg-green-100 text-green-800 text-sm px-3 py-1 rounded-full">Published</span>
                    @else
                        <span class="inline-block bg-gray-100 text-gray-800 text-sm px-3 py-1 rounded-full">Draft</span>
                    @endif
                </div>

                <!-- Excerpt -->
                <div class="text-xl text-gray-600 mb-8 italic border-l-4 border-green-500 pl-6">
                    {{ $article->excerpt }}
                </div>

                <!-- Content -->
                <div class="prose prose-lg max-w-none">
                    {!! $article->content !!}
                </div>

                <!-- Article Footer -->
                <div class="mt-12 pt-8 border-t border-gray-200">
                    <div class="flex justify-between items-center">
                        <div class="text-sm text-gray-500">
                            Created: {{ $article->created_at->format('F j, Y \a\t g:i A') }}
                            @if($article->updated_at->ne($article->created_at))
                                <br>Updated: {{ $article->updated_at->format('F j, Y \a\t g:i A') }}
                            @endif
                        </div>
                        
                        <!-- Share Buttons -->
                        <div class="flex space-x-3">
                            <a href="https://twitter.com/intent/tweet?text={{ urlencode($article->title) }}&url={{ urlencode(request()->fullUrl()) }}" 
                               target="_blank"
                               class="text-blue-400 hover:text-blue-600">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                            </a>
                            
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" 
                               target="_blank"
                               class="text-blue-600 hover:text-blue-800">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>
@endsection