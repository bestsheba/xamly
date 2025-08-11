<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Work;
use App\Models\Image;
use App\Models\News;
use App\Models\Song;
use App\Models\TGallery;
use App\Models\TVlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        $songs = Song::ordered()->take(6)->get();
        $images = Image::ordered()->take(6)->get();
        $travelImages = TGallery::ordered()->take(6)->get();
        $t_vlogs = TVlog::ordered()->take(6)->get();
        $articles = Article::latest()->paginate(6);
        $news = News::ordered()->take(6)->get();
        return view('index', compact('images', 'songs', 'travelImages', 't_vlogs', 'articles', 'news'));
    }
}
