<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\Article;


class HomeController extends Controller
{
    public function index()
    {
        $groupedServices = Service::all()->groupBy('category');
        $galleries = Gallery::latest()->take(6)->get(); 
        $testimonials = Testimonial::where('status', 'approved')->get();
        $articles = Article::latest()->take(3)->get();

        // Mengambil 3 artikel terbaru
        $articles = Article::latest()->take(3)->get();
        
        // Mengirimkan semua data ke halaman view
        return view('welcome', compact('groupedServices', 'galleries', 'testimonials', 'articles'));
    }


    // FUNGSI BARU UNTUK BACA ARTIKEL
    public function show($slug)
    {
        // Cari artikel berdasarkan slug, jika tidak ada tampilkan error 404
        $article = Article::where('slug', $slug)->firstOrFail();
        
        // Buka halaman 'article' dengan membawa data artikel tersebut
        return view('article', compact('article'));
    }
}