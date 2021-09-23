<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index(Request $request)
    {
        $article = new Article();

        if ($request->input()) {
            $validated = $request->validate([
                'q' => 'required|max:255',
            ]);
            $q = $validated['q'];
            $articles = Article::where('name', 'like', "%{$q}%")->get();

            return view('article.index', compact('articles'));
        }

        $articles = $article->getPublishedData();
        return view('article.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article.show-single', compact('article'));
    }
}
