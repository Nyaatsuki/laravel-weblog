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

        $body = preg_split('/\r\n|\r|\n/', request()->input('body'));
        $body = '<p>' . implode('</p><p>', $body) . '</p>';

        $attributes = request()->validate([
            'body' => ['required'],
            'title' => ['required'],
            'image' => ['required', 'image', 'mimes:jpeg,jpg,png', 'max:50000'],
            'categories' => ['required']
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('img'), $imageName);

        Post::create([
            'title' => request()->input('title'),
            'excerpt' => str_replace("</p>", "", substr($body, 0, 600)) . '...',
            'user_id' => auth()->user()->id,
            'category_id' => request()->input('categories'),
            'slug' => strtolower(str_replace(" ", "-", request()->input('title'))),
            'image' => '/img/' . $imageName,
            'body' => $body,
            'published_at' => date("Y-m-d H:i:s"),
            'premium_content' => request()->input('premium') ? true : false
        ], $attributes);

        return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        $body = str_replace('</p><p></p><p>', "\r\n\r\n", $post->body);
        if ($post->premium_content == 1){
            $checked = "checked";
        }else{
            $checked = null;
        }
        return view('articles.edit', ['categories' => $categories, 'post' => $post, 'body' => $body, 'checked' => $checked]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Post $post)
    {
        $body = preg_split('/\r\n|\r|\n/', request()->input('body'));
        $body = '<p>' . implode('</p><p>', $body) . '</p>';

        $attributes = request()->validate([
            'body' => ['required'],
            'title' => ['required'],
            'categories' => ['required']
        ]);

        $post->update([
            'title' => request()->input('title'),
            'excerpt' => str_replace("</p>", "", substr($body, 0, 600)) . '...',
            'category_id' => request()->input('categories'),
            'slug' => strtolower(str_replace(" ", "-", request()->input('title'))),
            'body' => $body,
            'premium_content' => request()->input('premium') ? true : false
        ], $attributes);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect("/");
    }
}
