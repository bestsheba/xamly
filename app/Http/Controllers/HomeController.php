<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function contact()
    {
        return view('contact');
    }
    public function services()
    {
        return view('services');
    }
    public function about()
    {
        return view('about');
    }
    public function events()
    {
        return view('events');
    }
    public function joinTelegram()
    {
        return view('join-telegram');
    }
}
