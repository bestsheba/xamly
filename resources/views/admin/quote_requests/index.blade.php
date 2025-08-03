@extends('layouts.admin')

@section('content')
    <div class="mx-auto">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Quote Requests</h2>

        <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
            <table class="min-w-full text-sm text-left text-gray-700">
                <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
                    <tr>
                        <th class="px-4 py-3">#</th>
                        <th class="px-4 py-3">Date</th>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Phone</th>
                        <th class="px-4 py-3">From</th>
                        <th class="px-4 py-3">To</th>
                        <th class="px-4 py-3">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($quotes as $quote)
                        <tr class="border-b hover:bg-gray-50 transition duration-150">
                            <td class="px-4 py-3">{{ $loop->iteration }}</td>
                            <td class="px-4 py-3">{{ $quote->created_at->format('Y-m-d h:i A') }}</td>
                            <td class="px-4 py-3 font-medium text-gray-900">{{ $quote->name }}</td>
                            <td class="px-4 py-3">{{ $quote->email }}</td>
                            <td class="px-4 py-3">{{ $quote->phone }}</td>
                            <td class="px-4 py-3">{{ $quote->from }}</td>
                            <td class="px-4 py-3">{{ $quote->to }}</td>
                            <td class="px-4 py-3">
                                <form action="{{ route('quote.updateStatus', $quote->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <select name="status" onchange="this.form.submit()"
                                        class="w-28 border border-gray-300 rounded px-3 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500
                {{ $quote->status === 'pending' ? 'bg-red-200 text-red-900 border-red-300' : 'bg-green-100 text-green-900 border-green-300' }}">
                                        <option value="pending" {{ $quote->status == 'pending' ? 'selected' : '' }}>Pending
                                        </option>
                                        <option value="approved" {{ $quote->status == 'approved' ? 'selected' : '' }}>
                                            Approved</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-4 py-6 text-center text-gray-500">No quote requests found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            {{ $quotes->links('vendor.pagination.tailwind') }}
        </div>
    </div>
@endsection
