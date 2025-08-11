<?php

namespace App\Http\Controllers;

use App\Models\Work;
use App\Models\Image;
use App\Models\Song;
use App\Models\TGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
 public function index()
{
    $songs = Song::ordered()->take(6)->get();
    $images = Image::ordered()->take(6)->get();
    $travelImages = TGallery::ordered()->take(6)->get();

    return view('index', compact('images', 'songs', 'travelImages'));
}
}
