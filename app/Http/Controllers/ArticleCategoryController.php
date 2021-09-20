<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;

class ArticleCategoryController extends Controller
{

    public function index()
    {
        $oArticleCategory = new ArticleCategory();
        $articles = $oArticleCategory->getData();

        // Статьи передаются в шаблон
        // compact('articles') => [ 'articles' => $articles ]
        return view('article.index', compact('articles'));
    }
}
