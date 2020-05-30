<?php

namespace App\Http\Controllers;

use App\Rules\Uppercase;
use App\Mail\WelcomeUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ValidationController extends Controller
{
    // https://justpaste.it/3u6kt

    public function index()
    {
        return view('validation');
    }

    public function store(Request $request)
    {
        // return $request;

        $rules = [
            'name' => ['required'],
            'email' => ['required', 'email']
            // 'email' => 'required|min:3|max:191|email|unique:users,email',
            // 'age' => 'required|integer|min:1|max:100',
            // 'dob' => 'nullable|date_format:Y-m-d',
            // 'password' => 'required|confirmed',
            // 'contact' => 'required',
            // 'image' => 'required|array',
            // 'image.*' => 'image|mimes:png',
            // 'terms' => 'accepted',
            // 'interest' => 'required|array|min:2',
        ];

        $validator = Validator::make($request->all(), $rules)->validate();

        Mail::to($request->email)->send(new WelcomeUser($request->name));

        return redirect()->back();
    }
}
