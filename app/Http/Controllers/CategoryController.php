<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('create-category');
    }

    public function store(Request $request)
    {
        $category = Category::create([
            'name' => $request->category
        ]);

        return redirect()->route('category.create');
    }

    public function display()
    {
        // $categories = Category::with('photos')->get();

        // return $categories;

        return view('categories');
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);

        return view('category-show', compact('category'));
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('category-edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $category->name = $request->category;
        $category->save();

        return redirect()->route('category.display');
    }

    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('category.display');
    }
}
