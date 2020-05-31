<?php

namespace App\Observers;

use App\Mail\WelcomeUser;
use Illuminate\Support\Facades\Mail;

class UserObserver
{
    public function created($user)
    {
        Mail::to($user->email)->send(new WelcomeUser($user->name));
    }
    
    // User::observe(UserObserver::class);
}
