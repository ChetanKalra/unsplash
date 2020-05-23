<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('profile')->get();

        return $users;
        return view('users.index', compact('users'));
    }
}
