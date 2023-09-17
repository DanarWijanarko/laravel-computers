<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use App\Models\Article;
use App\Models\Message;

class MainController extends Controller
{
    public function index()
    {
        return view('main.static.index');
    }

    public function about()
    {
        return view('main.static.about');
    }

    public function contact()
    {
        return view('main.static.contact');
    }

    public function contactStore(StoreMessageRequest $request)
    {
        $validated = $request->validated();

        // Message::create($validated);

        return back()->with('success', 'done');
    }

    public function articles(Article $article)
    {
        return view('main.article.index', [
            'navbar' => 'bg-slate-700',
            'articles' => $article->latest()->paginate(4)
        ]);
    }

    public function detail(Article $article)
    {
        return view('main.article.detail', [
            'navbar' => 'bg-slate-700'
        ]);
    }

    public function laptops()
    {
        return view('main.laptops.index');
    }
}
