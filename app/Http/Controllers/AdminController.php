<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalImages = Image::count();
        $activeImages = Image::count();
        $recentImages = Image::take(6)->get();

        return view('admin.dashboard', compact('totalImages', 'activeImages', 'recentImages'));
    }
}
