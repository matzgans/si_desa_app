<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public  function index()
    {
        $articles = Article::orderBy('created_at', 'DESC')->paginate(3);
        return view("pages.landing.article", compact("articles"));
    }

    public  function getBySlug(Request $request)
    {
        $article = Article::where("slug", "=", $request->slug)->first();
        return view("pages.landing.article-detail", compact("article"));
    }
}
