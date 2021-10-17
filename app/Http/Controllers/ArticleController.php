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

    public function create()
    {
        $article = new Article();
        return view ('article.create', compact('article'));
    }

    public function store(Request $request) {
        $data = $this->validate($request, [
            'name' => 'required|unique:articles',
            'body' => 'required|min:10'
        ]);

        $article = new Article();
        $article->fill($data);
        $article->save();

        return redirect()
            ->route('articles.index');
    }

    public function edit($id){
        $article = Article::findOrFail($id);
        return view('article.edit', compact('article'));
    }

    public function update(Request $request, $id) {
        $article = Article::findOrFail($id);
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
        // DELETE — идемпотентный метод, поэтому результат операции всегда один и тот же
        $article = Article::find($id);
        if ($article) {
            $article->delete();
        }
        return redirect()->route('articles.index');
    }
}
