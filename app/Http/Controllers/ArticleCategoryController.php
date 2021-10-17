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
    public function show($id)
    {
        $articles = ArticleCategory::find($id)->articles;
        return view('articlesCategory.show-single', compact('articles'));
    }

    public function edit($id) {
        $article = ArticleCategory::findOrFail($id);
        return view('articlesCategory.edit', compact('article'));
    }

    public function update(Request $request, $id) {
        $article = ArticleCategory::findOrFail($id);
        $data = $this->validate($request, [
            // У обновления немного изменённая валидация. В проверку уникальности добавляется название поля и id текущего объекта
            // Если этого не сделать, Laravel будет ругаться на то что имя уже существует
            'name' => 'required|unique:articles,name,' . $article->id,
            'body' => 'required|min:10',
        ]);

        $article->fill($data);
        $article->save();
        return redirect()->route('articles.index');
    }

    public function destroy($id) {
        $article = ArticleCategory::find($id);
        if ($article) {
            $article->delete();
        }

        return redirect()->route('articles.categories');
    }
}
