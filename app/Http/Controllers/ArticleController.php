<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
    	$articles = Article::all();
        return response()->json([
            'code' => '200',
            'data' => $articles,
            'status' => 'success'
        ]);

    }

    public function show(Article $article)
    {
        return response()->json($article, 200);
    }

    public function store(Request $request)
    {
        $article = Article::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, Article $article)
    {
        $article->update($request->all());

        return response()->json($article, 200);
    }

    public function delete(Article $article)
    {
        $article->delete();

        return response()->json(null, 204);
    }
}
