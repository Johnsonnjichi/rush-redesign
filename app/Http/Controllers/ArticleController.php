<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of published articles
     */
    public function index()
    {
        $articles = Article::where('published', true)
                          ->latest()
                          ->paginate(6);
        
        return view('articles.index', compact('articles'));
    }

    /**
     * Display the specified article
     */
    public function show(Article $article)
    {
        // Only show published articles to public
        if (!$article->published) {
            abort(404);
        }
        
        return view('articles.show', compact('article'));
    }
}