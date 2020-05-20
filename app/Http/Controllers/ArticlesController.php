<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show', ['article' => $article]);
    }
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', ['articles' => $articles]);
    }
    public function create()
    {
        return view('articles.create');
    }
    public function store(Request $request)
    {
        $article = new Article();
        error_log($request->name);

        $article->topic = $request->name;
        $article->description = $request->content;
        $article->seen_count = 0;
        $article->user_id = 2;
        $article->save();
        return redirect('articles');
    }
    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit', ['article' => $article]);
    }
    public function update($id, Request $request)
    {
        $article = Article::find($id);
        $article->topic = $request->name;
        $article->description = $request->content;
        $article->save();
        return redirect('articles');
    }
    public function destroy($id)
    {

        Article::destroy($id);

        return back();
    }
}
