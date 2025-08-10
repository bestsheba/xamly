<?php

namespace App\Http\Controllers;

use App\Models\Work;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        $songs = collect([
            (object) ['youtube_url' => 'https://youtu.be/JlIfgl5xuJw?si=2WWL0baQRkWvStOt'],
            (object) ['youtube_url' => 'https://youtu.be/kXYiU_JCYtU'],
            (object) ['youtube_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'],
            (object) ['youtube_url' => 'https://youtu.be/oHg5SJYRHA0'],
            (object) ['youtube_url' => 'https://www.youtube.com/watch?v=Zi_XLOBDo_Y'],
            (object) ['youtube_url' => 'https://youtu.be/2Vv-BfVoq4g'],
        ]);
        $images = Image::ordered()->take(6)->get();
        return view('index', compact(['images', 'songs']));
    }
}
