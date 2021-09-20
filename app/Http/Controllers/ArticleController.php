<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index()
    {
        return Article::paginate();

        // Статьи передаются в шаблон
        // compact('articles') => [ 'articles' => $articles ]
//        return view('article.index', compact('articles'));
    }

    public function show($id)
    {
        ddd('123');
        $article = Article::findOrFail($id);
        return view('article.show', compact('article'));
    }
}
