<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use App\Models\Article;
use App\Models\Category;
use App\Models\Company;
use App\Models\Laptop;
use App\Models\Message;
use App\Models\Series;
use App\Models\User;

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

        Message::create($validated);

        return back()->with('success', 'done');
    }

    public function articles($header = 'All Articles')
    {
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $header = 'Article in Category: ' . $category->name;
        }

        if (request('company')) {
            $author = User::firstWhere('username', request('author'));
            $header = 'Article by Author: ' . $author->name;
        }

        return view('main.article.index', [
            'navbar' => 'bg-slate-700',
            'header' => $header,
            'articles' => Article::latest()->filter(request(['search', 'category', 'author']))->paginate(7)
        ]);
    }

    public function detail(Article $article)
    {
        return view('main.article.detail', [
            'navbar' => 'bg-slate-700',
            'article' => $article
        ]);
    }

    public function laptops($header = 'Laptops')
    {
        if (request('series')) {
            $series = Series::firstWhere('slug', request('series'));
            $header = 'Series: ' . $series->name;
        }

        if (request('company')) {
            $company = Company::firstWhere('slug', request('company'));
            $header = 'Company: ' . $company->name;
        }

        return view('main.laptops.index', [
            'laptops' => Laptop::latest()->filter(request(['search', 'series', 'company']))->paginate(6),
            'header' => $header,
        ]);
    }

    public function laptopDetail(Laptop $laptop) {
        return view('main.laptops.detail', [
            'laptop' => $laptop
        ]);
    }
}
