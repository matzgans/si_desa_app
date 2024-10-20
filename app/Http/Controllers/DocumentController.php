<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

class DocumentController extends Controller
{
    public function index()
    {
        return view("pages.landing.document");
    }

    public function store(Request $request)
    {
        $data = $request->except('_token', 'type');

        Document::create([
            'type' => $request->type,
            'data' => json_encode($data),
        ]);

        return redirect()->back()->with('success', 'Sukses Mengirim Data');
    }
}
