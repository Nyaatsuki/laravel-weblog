<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
        return view('category.create-category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // TODO: maak aparte request form validation class voor hergebruik van validatie
        $attributes = request()->validate([
            'name' => ['required'],
        ]);

        // TODO: gebruik alleen gevalideerde data voor opslaan in database, dus niet rechtstreeks uit request
        Category::create([
            'name' => request()->input('name'),
            'slug' => strtolower(str_replace(" ", "-", request()->input('name'))),
        ], $attributes);

        return redirect('/create-article');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
