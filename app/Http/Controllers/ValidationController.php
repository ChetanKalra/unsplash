<?php

namespace App\Http\Controllers;

use App\Rules\Uppercase;
use Illuminate\Http\Request;
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
            'name' => ['required', new Uppercase],
            'email' => ['required', new Uppercase]
            // 'email' => 'required|min:3|max:191|email|unique:users,email',
            'age' => 'required|integer|min:1|max:100',
            'dob' => 'nullable|date_format:Y-m-d',
            'password' => 'required|confirmed',
            'contact' => 'required',
            'image' => 'required|array',
            'image.*' => 'image|mimes:png',
            'terms' => 'accepted',
            'interest' => 'required|array|min:2',
        ];

        $messages = [
            'name.required' => 'Please enter your name!!!!',
            'name.min' => 'Min chars for your name is 3',
            'image.*.image' => 'File should be an image'
        ];

        $validator = Validator::make($request->all(), $rules, $messages)->validate();

        // dd($validator);

        // $request->validate($rules);

        // Store into DB

        // Redirect
    }
}
