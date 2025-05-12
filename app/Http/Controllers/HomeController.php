<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Event;
use App\Models\Page;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::where('published', true)->latest()->take(3)->get();
        $events = Event::latest()->take(3)->get();
        $aboutPage = Page::where('slug', 'about-us')->first();
        $missionPage = Page::where('slug', 'our-mission')->first();
        
        return view('home', compact('articles', 'events', 'aboutPage', 'missionPage'));
    }
}