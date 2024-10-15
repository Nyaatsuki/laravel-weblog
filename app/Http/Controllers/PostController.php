<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
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
        $categories = Category::all();
        return view('articles.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $body = preg_split( '/\r\n|\r|\n/', request()->input('body'));
        $body = '<p>' . implode( '</p><p>', $body) . '</p>';

        $attributes = request()->validate([
            'body' => ['required'],
            'title' => ['required'],
            'image'=> ['required','image','mimes:jpeg,jpg,png','max:2048'],
            'categories' => ['required']
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('img'), $imageName);

        Post::create([
            'title' => request()->input('title'),
            'excerpt' => str_replace("</p>", "", substr($body, 0, 600)) .'...',
            'user_id' => auth()->user()->id,
            'category_id' => request()->input('categories'),
            'slug' => strtolower(str_replace(" ", "-", request()->input('title'))),
            'image' => '/img/'.$imageName,
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
