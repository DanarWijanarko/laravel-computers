<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Category;
use App\Models\User;
use Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($header = '')
    {
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $header = 'Category : ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $header = 'Author : ' . $author->name;
        }

        return view('admin.article.edit', [
            'articles' => Article::where('user_id', Auth::id())->latest()->filter(request(['search', 'category', 'author']))->paginate(8)->withQueryString(),
            'header' => $header
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('admin.article.show', [
            'article' => $article,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return 'Method Edit';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        return 'Method Destroy';
    }
}
