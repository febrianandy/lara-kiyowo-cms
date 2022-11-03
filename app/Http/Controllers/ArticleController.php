<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view("welcome", ["articles" => $articles]);
    }

    public function create()
    {
        return view("create");
    }
    public function createArticle(Request $request)
    {
        $request->validate([
            "title" => "required",
            "author" => "required",
            "content" => "required",
        ]);

        $article = new Article();
        $article->title = $request->title;
        $article->author = $request->author;
        $article->content = $request->content;
        $article->save();
        return redirect("/")->with("success", "Article created successfully");
    }

    public function update($id)
    {
        $articles = Article::find($id);
        return view("update", ["articles" => $articles]);
    }

    public function updateArticle(Request $request, $id)
    {
        $article = Article::find($id);
        $article->title = $request->title;
        $article->author = $request->author;
        $article->content = $request->content;
        $article->save();
        return redirect("/")->with("success", "Article updated successfully");
    }

    public function delete($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect("/")->with("success", "Article deleted successfully");
    }

    public function show($id)
    {
        $articles = Article::find($id);
        return view("single", ["articles" => $articles]);
    }
}
