<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleComments;
use Illuminate\Http\Request;

class ArticleCommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function index(Article $article)
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function create(Article $article)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Article $article)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @param  \App\Models\ArticleComments  $articleComment
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article, ArticleComments $articleComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @param  \App\Models\ArticleComments  $articleComment
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article, ArticleComments $comment)
    {
        return view('article.comment.edit', compact('article', 'comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @param  \App\Models\ArticleComments  $articleComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article, ArticleComments $comment)
    {
        $data = $this->validate($request, [
            'name' => 'required|min:3',
            'body' => 'required|min:10'
        ]);

        $comment->fill($data);
        $comment->save();

        return redirect()->route('articles.show', compact('article'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @param  \App\Models\ArticleComments  $articleComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article, ArticleComments $articleComment)
    {
        //
    }
}
