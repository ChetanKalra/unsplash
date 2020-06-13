<?php

namespace App\Http\Controllers;

use App\User;
use App\Photo;
use App\Category;
use App\Mail\NewPhotoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PhotoController extends Controller
{
    public function create()
    {
        // $categories = Category::all();

        return view('photos.create');
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
            'category_id' => $request->category,
            'path' => $filename
        ]);

        $adminUsers = User::where('is_admin', 1)->get();

        foreach($adminUsers as $adminUser)
        {
            Mail::to($adminUser->email)->queue(new NewPhotoMail($photo));
        }

        return back();
    }

    public function index()
    {
        $photos = Photo::paginate(2);

        // ->get() // ->all()

        return view('photos.index', compact('photos'));
    }
}
