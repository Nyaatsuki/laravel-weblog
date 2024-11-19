<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Post;
use Illuminate\Http\Request;


class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* TODO: 
        - Find diffferent method for finding the id of post 
        - Reseed DB*/
        $post = Post::find($request->input('post-id'));
        
        dd($request->input('post-id'), auth()->user()->username, request()->input('comment-text'));

        $attributes = request()->validate([
            'body' => ['required'],
        ]);

        Comments::create([
            'user_id' => auth()->user()->id,
            'body' => request()->input('comment-text'),
        ], $attributes);

    }

    /**
     * Display the specified resource.
     */
    public function show(Comments $comments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comments $comments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Comments $comments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comments $comments)
    {
        //
    }
}