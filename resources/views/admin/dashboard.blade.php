{{-- resources/views/admin/dashboard.blade.php --}}
@extends('layouts.admin')

@section('content')
    <div class="mx-auto">
        <h1 class="text-2xl font-semibold text-gray-900 mb-6">Dashboard</h1>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-6">
            <!-- All Quotes -->
            <div class="p-4 bg-blue-100 border-l-4 border-blue-500 text-blue-700 rounded shadow">
                <h3 class="text-lg font-semibold">All Quotes</h3>
                <p class="text-2xl">{{ $totalQuotes }}</p>
            </div>

            <!-- Pending Quotes -->
            <div class="p-4 bg-red-100 border-l-4 border-red-500 text-red-700 rounded shadow">
                <h3 class="text-lg font-semibold">Pending</h3>
                <p class="text-2xl">{{ $statusCounts['pending'] ?? 0 }}</p>
            </div>

            <!-- Approved Quotes -->
            <div class="p-4 bg-green-100 border-l-4 border-green-500 text-green-700 rounded shadow">
                <h3 class="text-lg font-semibold">Approved</h3>
                <p class="text-2xl">{{ $statusCounts['approved'] ?? 0 }}</p>
            </div>
        </div>

    </div>
@endsection
