<?php

namespace App\Http\Controllers;

use Session;
use App\User;
use App\Photo;
use App\Category;
use Carbon\Carbon;
use App\Notification;
use App\Mail\NewPhotoMail;
use Illuminate\Http\Request;
use App\Events\NewPhotoUpload;
use App\Jobs\SendNotification;
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
            'title' => 'required|max:191',
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

        // dispatch(new SendNotification($photo))->delay(Carbon::now()->addDays(30));

        event(new NewPhotoUpload($photo));

        // return back();
    }

    public function index()
    {
        $photos = Photo::paginate(2);
        return view('photos.index', compact('photos'));
    }

    public function returnSession()
    {
        return Session::all();
    }
}
