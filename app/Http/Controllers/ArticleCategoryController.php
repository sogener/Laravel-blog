<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;

class ArticleCategoryController extends Controller
{

    public function index()
    {
        $oArticleCategory = new ArticleCategory();
        $articles = $oArticleCategory->getData();

        return view('articlesCategory.show', compact('articles'));
    }
    public function show($id){
        $articles = ArticleCategory::find($id)->articles;
        return view('articlesCategory.show-single', compact('articles'));
    }
}
