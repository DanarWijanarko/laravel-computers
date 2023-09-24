<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Laptop;
use App\Models\Message;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Message $message, Article $articles, Laptop $laptop)
    {
        return view('admin.dashboard', [
            'messages' => $message->latest()->paginate(5, ['*'], 'message_page')->withQueryString(),
            'articles' => $articles->latest()->paginate(5, ['*'], 'articles_page')->withQueryString(),
            'laptops' => $laptop->latest()->paginate(5, ['*'], 'laptops_page')->withQueryString(),
        ]);
    }
}
