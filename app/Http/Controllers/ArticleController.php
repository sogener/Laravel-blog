<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index()
    {
        $article = new Article();
        $articles = $article->getPublishedData();

        return view('article.index', compact('articles'));

        // Статьи передаются в шаблон
        // compact('articles') => [ 'articles' => $articles ]
//        return view('article.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article.show-single', compact('article'));
    }
}
