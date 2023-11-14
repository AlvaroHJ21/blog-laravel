<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view("posts.index", compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required|string",
            "subtitle" => "required|string",
            "body" => "required|string",
            "image" => "required|string",
        ]);

        // $request->merge(["user_id" => 1]);

        // Post::create($request->all());

        $request->merge(["slug" => Str::slug($request->title)]);

        // De esta forma se crea el post con el usuario que esta logueado
        $post = $request->user()->posts()->create($request->all());

        return redirect()->route("posts.edit", $post);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view("posts.show", compact("post"));
    }

    public function showBySlug(String $slug)
    {
        $post = Post::where("slug", $slug)->firstOrFail();

        return view("posts.show", compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view("posts.edit", compact("post"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {

        $request->validate([
            "title" => "string",
            "subtitle" => "string",
            "body" => "string",
            "image" => "string",
        ]);

        $post->update($request->all());

        return redirect()->route("posts.edit", $post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route("posts.index");
    }
}
