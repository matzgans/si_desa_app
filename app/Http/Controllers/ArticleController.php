<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public  function index()
    {
        return view("pages.landing.article");
    }

    public  function getById()
    {
        return view("pages.landing.article-detail");
    }
}
