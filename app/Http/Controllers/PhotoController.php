<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PhotoController extends Controller
{
    public function create()
    {
        $categories = Category::all();

        return view('photos.create', compact('categories'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|min:10|max:191',
            'description' => 'required',
            'image' => 'required|image'
        ]);


        $no = rand(1, 100000000);

        $filename = "images/photos/photo$no.png";
        move_uploaded_file($request->file('image'), $filename);

        $photo = Photo::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => Auth::user()->id,
            'collection_id' => $request->category,
            'path' => $filename
        ]);

        return back();
    }

    public function index()
    {
        $photos = Photo::all();

        return view('photos.index', compact('photos'));
    }
}
