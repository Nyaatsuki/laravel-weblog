<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index', [
            'posts' => Post::orderBy('published_at', 'desc')->filter(request(['category', 'author']))->get(),
        ]);
    }

    public function show(Post $post)
    {
        return view('show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //TODO: Category selection.

        $body = preg_split( '/\r\n|\r|\n/', request()->input('body'));
        $body = '<p>' . implode( '</p><p>', $body) . '</p>';

        $attributes = request()->validate([
            'body' => ['required'],
            'title' => ['required']
        ]);

        Post::create([
            'title' => request()->input('title'),
            'excerpt' => substr($body, 0, 100) .'...',
            'user_id' => auth()->user()->id,
            'category_id' => 1,
            'slug' => request()->input('title'),
            'body' => $body,
            'published_at' => date("Y-m-d H:i:s")
            ], $attributes);

        return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
