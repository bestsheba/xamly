<?php

namespace App\Http\Controllers;

use App\Models\QuoteRequest;
use App\Models\Work;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $statusCounts = QuoteRequest::select('status', \DB::raw('count(*) as total'))
            ->groupBy('status')
            ->pluck('total', 'status');
        $totalQuotes = QuoteRequest::count();

        return view('admin.dashboard', compact('statusCounts', 'totalQuotes'));
    }
}
