<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class ArticlesController extends Controller
{
    public function show($id)
    {
        $article = Article::find($id);
        $article->seen_count++;
        $article->save();
        return view('articles.show', ['article' => $article]);
    }
    public function index()
    {
        $articles = Article::all()->sortByDesc("seen_count");
        return view('articles.index', ['articles' => $articles]);
    }
    public function create()
    {
        return view('articles.create');
    }
    public function store(Request $request)
    {
        $article = new Article();
        if($request->hasFile('img')){
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $path = 'articles/'.$file->getFilename().Time().'.'.$extension;
             Storage::disk('public')->put($path,  File::get($file));

                    error_log('articles/'.$file->getFilename().'.'.$extension);
            $article->image=$path;


        }else{
            $article->image='articles/heart1.jpg';
        }

        $article->topic = $request->name;
        $article->description = $request->content;
        $article->seen_count = 0;
        $article->user_id = Auth::user()->id;
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
