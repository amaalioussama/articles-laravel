<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// app/Http/Controllers/HomeController.php

use Illuminate\Support\Facades\View;
use App\Models\Article;

// app/Http/Controllers/HomeController.php


class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('home',['articles'=> $articles]);
    }

    public function showMore($id)
    {
        $article = Article::findOrFail($id);
        return view('show-more',['article'=> $article]);
    }
}


?>
