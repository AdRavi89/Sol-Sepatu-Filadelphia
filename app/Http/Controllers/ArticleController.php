<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        // Mengambil semua artikel, urut terbaru, dibatasi 9 per halaman (Pagination)
        $articles = Article::latest()->paginate(9);
        
        return view('articles.index', compact('articles'));
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('articles.show', compact('article'));
    }
}