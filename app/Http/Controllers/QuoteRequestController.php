<?php

namespace App\Http\Controllers;

use App\Models\QuoteRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class QuoteRequestController extends Controller
{
    public function store(Request $request)
    {
        Log::info($request->all());
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:30',
            'from'  => 'required|string|max:255',
            'to'    => 'required|string|max:255',
        ]);

        QuoteRequest::create($validated);

        return redirect()->back()->with('success', 'Your quote request has been sent successfully. Thank you!');
    }

    // Optional: Admin panel
    public function index()
    {
        $quotes = QuoteRequest::latest()->paginate(10);
        return view('admin.quote_requests.index', compact('quotes'));
    }
    public function updateStatus(Request $request, QuoteRequest $quote)
    {
        $request->validate([
            'status' => 'required|in:pending,approved,rejected',
        ]);

        $quote->status = $request->status;
        $quote->save();

        return back()->with('success', 'Quote status updated successfully.');
    }
}
