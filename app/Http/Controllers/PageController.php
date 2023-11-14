<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request)
    {
        $search = $request->search;

        $posts = Post::where("title", "LIKE", "%{$search}%")->orderBy('created_at', 'desc')->paginate(5);

        return view('home', compact('posts'));
    }
    public function contact()
    {
        return view('contact');
    }
}
