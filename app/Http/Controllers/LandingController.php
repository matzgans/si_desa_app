<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\MaterializedView;
use App\Models\Structure;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $articles = Article::where("is_show", "=", 1)->limit(4)->get();
        return view("pages.landing.index", compact("articles"));
    }

    public function profile()
    {
        $currentVillageHead = Structure::where("position", "=", "Kepala Desa Menjabat")->limit(1)->get();
        $employees = Structure::whereNotIn('position', ['Kepala Desa Menjabat', 'Kepala Desa Lama'])->get();
        $formerVillageHeads = Structure::where("position", "=", "Kepala Desa Lama")->get();

        return view("pages.landing.profile", [
            'currentVillageHead' => $currentVillageHead,
            'employees' => $employees,
            'formerVillageHeads' => $formerVillageHeads
        ]);
    }

    public function refreshMView(Request $request)
    {
        $token = $request->query('token');
        $secret = env('TOKEN_MV', 'fzrsahi');
        if (!$token || $token !== $secret) {
            return redirect("/");
        }

        MaterializedView::truncate();
        // MaterializedView::insertUsing(
        //     ['articles_slug', 'articles_title', 'articles_content', 'articles_thumbnail'],
        //     Article::select('slug', 'title', 'content', 'thumbnail'),
        // );

        // DB::raw('
        // INSERT INTO materialized_views(articles_slug, articles_title, articles_content, articles_thumbnail)
        // SELECT slug, title, content, thumbnail FROM articles
        // ');
        return response()->json(['message' => 'Success Refresh MView!']);
    }
}
